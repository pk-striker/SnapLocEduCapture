<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webapp";

// Function to generate a random token
function generateToken($length = 10) {
    return bin2hex(random_bytes($length));
}

// Function to add the token to the URL
function addTokenToURL($url, $tokenName, $token) {
    $separator = (parse_url($url, PHP_URL_QUERY) == NULL) ? '?' : '&';
    return $url . $separator . $tokenName . '=' . $token;
}

// Function to save token to the database
function saveTokenToDatabase($token, $expires) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tokens (token, expires) VALUES ('$token', '$expires')";
    if ($conn->query($sql) === TRUE) {
       // echo "Token saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Check if token exists in session and if it's expired
$tokenName = 'security_token'; // Change this to your token name

if (!isset($_SESSION[$tokenName]) || !isset($_SESSION[$tokenName . '_expires']) || $_SESSION[$tokenName . '_expires'] < time()) {
    // Token doesn't exist or expired, generate a new one
    $token = generateToken();
    $_SESSION[$tokenName] = $token;
    // Set token expiration time (10 minutes)
    $_SESSION[$tokenName . '_expires'] = time() + 1000;
}

// Get the current token from the session
$token = $_SESSION[$tokenName];

// Check if token exists in the URL and validate it against session token
if (isset($_GET[$tokenName])) {
    $urlToken = $_GET[$tokenName];
    if ($urlToken !== $token) {
        // Token in URL doesn't match session token, redirect to error page
        header('Location: ../../404/');
        exit;
    }
} else {
    // Token not found in URL, add it and redirect to the updated URL
    $url = addTokenToURL($_SERVER['REQUEST_URI'], $tokenName, $token);
    header('Location: ' . $url);
    exit;
}

// Echo the token for verification
//echo "Token: $token";

// Save the token to the database
$expires = date('Y-m-d H:i:s', $_SESSION[$tokenName . '_expires']);
saveTokenToDatabase($token, $expires);
?>
<?php
// Include Composer's autoloader to load DeviceDetector library
require_once __DIR__ . '/../vendor/autoload.php';

// Import DeviceDetector class from DeviceDetector library
use DeviceDetector\DeviceDetector;

// Fetch the user agent from the HTTP request
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Create an instance of DeviceDetector
$dd = new DeviceDetector($userAgent);

// Parse the user agent and extract device information
$dd->parse();

// Retrieve device information
$osInfo = $dd->getOs();
$device = $dd->getDeviceName();
$brand = $dd->getBrandName();
$model = $dd->getModel();
// Check if brand and model information is available
if (empty($brand)) {
    $brand = "N/A";
}
if (empty($model)) {
    $model = "N/A";
}
?>

<?php
if (isset($_POST['lat'], $_POST['lng'])) {
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    // Construct the Google Geocode API URL
    $url = sprintf("https://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s", $lat, $lng);

    // Fetch JSON content
    $content = file_get_contents($url);

    // Debug: Output the content fetched
    echo $content;

    $metadata = json_decode($content, true);

    if (count($metadata['results']) > 0) {
        // Save the location data in your database or perform other actions
        $result = $metadata['results'][0];
        echo json_encode($result['formatted_address']); // Echo the formatted address
    } else {
        // No results returned
        echo "No address found.";
    }
}
?>

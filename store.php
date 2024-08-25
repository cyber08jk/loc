<?php
// Define the file path
$file = 'location.json';

// Read the existing JSON file
if (file_exists($file)) {
    $jsonData = file_get_contents($file);
    $data = json_decode($jsonData, true);
    if (!is_array($data)) {
        $data = array(); // Initialize as an empty array if decoding failed
    }
} else {
    $data = array(); // Initialize as an empty array if file does not exist
}

// Prepare the new entry
$newEntry = array(
    'lat' => $_GET['lat'] ?? 'N/A',
    'long' => $_GET['long'] ?? 'N/A',
    'IP' => $_SERVER['REMOTE_ADDR'],
    'User agent' => $_GET['uagent'] ?? 'N/A'
);

// Append the new entry to the existing data
$data[] = $newEntry;

// Write the updated data back to the JSON file
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
?>
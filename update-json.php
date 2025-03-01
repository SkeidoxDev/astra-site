<?php
// Protect against direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Access Denied.");
}

// Get JSON data from request
$data = json_decode(file_get_contents("php://input"), true);

// Check if jsonData exists
if (!isset($data['jsonData'])) {
    die("Invalid Data.");
}

// Save to data.json
file_put_contents("data.json", $data['jsonData']);

// Success message
echo "JSON updated successfully!";
?>

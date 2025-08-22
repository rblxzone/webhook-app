<?php
// index.php (webhook receiver)

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo "Only POST requests are allowed.";
    exit;
}

// Read incoming data
$input = file_get_contents("php://input");

// Log it (optional: writes to a file for debugging)
file_put_contents("webhook_log.txt", date("Y-m-d H:i:s") . " - " . $input . PHP_EOL, FILE_APPEND);

// Respond to sender
http_response_code(200);
echo "Webhook received successfully!";

<?php
header("Content-Type: application/json");

// Read POST body
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Fallback for empty POST
if (!$data) {
    $data = ["message" => "No JSON received"];
}

echo json_encode([
    "status" => "ok",
    "received" => $data
]);
?>

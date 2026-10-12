<?php
// ===============================================
// Retrieves the latest reviews to display on the homepage
// ===============================================
require_once "config/db.php";

$result = $conn->query("SELECT name, rating, comment, created_at FROM reviews ORDER BY created_at DESC LIMIT 10");

$reviews = [];
while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}

send_json(["success" => true, "reviews" => $reviews]);
?>

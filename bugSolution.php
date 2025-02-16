<?php
// Secure connection using MySQLi
$mysqli = new mysqli("localhost", "username", "password", "database_name");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Perform queries using prepared statements to prevent SQL injection
$stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$userId = 1; // Example user ID
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    // Process the data
    echo "ID: " . $row["id"] . "<br>";
}

$stmt->close();
$mysqli->close();
?> 
<?php
// Enable full error reporting (very helpful during development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$db = "crud_books";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    // Optional: confirm if connected
    // echo "✅ Database connected successfully";
}
?>

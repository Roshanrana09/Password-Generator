<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "RoshanRana@123"; // Default password for XAMPP is empty
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
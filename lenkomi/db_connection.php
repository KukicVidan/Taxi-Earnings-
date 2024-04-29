<?php
// Database connection variables
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$database = "lenkomi"; // Enter your database name here

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

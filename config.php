<?php
$host = "localhost";
$username = "root";
$password = ""; // XAMPP/LAMP users usually keep it blank
$database = "jmtc_db";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

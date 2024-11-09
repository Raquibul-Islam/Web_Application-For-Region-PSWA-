<?php
// Database connection parameters
$servername = "localhost"; // Server name or IP address
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "region";         // Database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection for any errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to UTF-8 to support international characters
$conn->set_charset("utf8");

// Connection successful
// echo "Connected successfully"; // Uncomment for debugging purposes

?>

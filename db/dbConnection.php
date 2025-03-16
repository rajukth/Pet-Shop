<?php
// Database configuration
$servername = 'localhost';
$dbname = 'everestdogchew';
$username = 'root';
$password = '';

// Create a database connection
try {
    $conn = new mysqli($servername, $username, $password,$dbname);
} catch(Exception $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>
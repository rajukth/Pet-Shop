<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create table 'login' if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS logins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL COLLATE latin1_general_cs,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute query
if ($conn->query($sql) === TRUE) {

include "../queries/loginqueries.php";
CreateUser($conn,'admin','admin@123','rajukhatiwada.rk@gmail.com');
    echo "Table 'login' created with default user successfully ";
    
} else {
    echo "Error creating table: " . $conn->error;
}
?>

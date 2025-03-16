<?php

// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "ttt";
$dbname = "everestdogchew";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists
if (!mysqli_select_db($conn, $dbname)) {
    // Create the database if it doesn't exist
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully\n";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

// Select database
$conn->select_db($dbname);




// Create table if it doesn't exist
 if (!IsTableExists($conn,$dbname,'logins')){
    include "create_login_table.php";
}
if (!IsTableExists($conn,$dbname,'products')){
include "create_product_table.php";
} 

// Close connection
$conn->close();

// Function to check if a table exists
function IsTableExists($conn, $databaseName, $tableName) {
    $result = $conn->query("SELECT 1 FROM `$databaseName`.`$tableName` LIMIT 1");
    return $result !== false;
}
?>
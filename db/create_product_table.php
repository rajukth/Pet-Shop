

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// SQL query to create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    price DECIMAL(10, 2) NOT NULL,
    stock_level INT NOT NULL,
    offer DECIMAL(10, 2)
)";

// Execute query
if ($conn->query($sql) === TRUE) {
echo "Table 'products' created successfully";
}else{
	echo "Error creating table: " . $conn->error;
}

?>
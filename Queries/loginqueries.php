<?php
function isUserExists($conn, $username,$password) {
    // Escape the username to prevent SQL injection
    $escapedUsername = mysqli_real_escape_string($conn, $username);
    $escapedPassword = mysqli_real_escape_string($conn, $password);
echo $escapedUsername;
echo $escapedPassword;
    // Execute query to check if user exists
    $result = $conn->query("SELECT 1 FROM logins WHERE (username = '$escapedUsername' OR email = '$escapedUsername') AND password ='$escapedPassword' LIMIT 1");

    // Check if the query was successful
    if ($result === false) {
        // Handle query error
        return false;
    }

    // Check if the result set is not empty
    return $result->num_rows > 0;
}

function CreateUser($conn,$username,$password,$email){
// Prepare the SQL statement
$sql = "INSERT INTO logins (username, password,email, created_at) VALUES (?, ?, ?,NOW())";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password,$email);
$success = $stmt->execute();
$stmt->close();
return $success;
}

?>
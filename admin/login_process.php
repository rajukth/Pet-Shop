<?php
session_start();
require_once "../config.php";
require_once BASE_PATH."/db/dbConnection.php";
require_once BASE_PATH."/queries/loginqueries.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $usernames = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (example: hardcoded credentials)
    // Get username and password from the form
       $usernames = $_POST["username"];
       $password = $_POST["password"];
   if(isUserExists($conn,$usernames,$password)){
   $_SESSION['username'] = $usernames;
    header("Location: index.php");
    exit;
   }else{
   // Authentication failed, redirect back to login page with error message
                 header("Location: login.php?error=1");
                 exit;
   }
}
?>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php?returnUrl=index.php");
    exit;
}

// Get the username from the session
$username = $_SESSION['username'];
?>
<?php require_once '../config.php';?>
<?php include_once BASE_PATH."/header.php"?>



<h2>Welcome, <?php echo $username; ?>!</h2>

<?php include_once BASE_PATH."/footer.php"?>
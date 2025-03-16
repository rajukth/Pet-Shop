<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    $url=$_GET['returnUrl'] ? $_GET['returnUrl']:'index.php';
    header("Location: ".$url);
    exit;
}

?>
<?php require_once '../config.php';?>
<?php include_once BASE_PATH."/header.php"?>

<style>

    .login-container {
        margin-top: 5%;
    }
    .login-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 5px 5px 10px 5px rgba(0,0,0,0.3);
    }
</style>
<div class="container">
    <div class="row justify-content-center login-container">
        <div class="col-md-6">
            <div class="login-form">
                <h2 class="text-center">Login</h2>
                <form action="admin/login_process.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username or email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once BASE_PATH."/footer.php"?>
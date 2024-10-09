<?php 
require("koneksi.php");
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You are not logged in! Redirecting to login page...');</script>";
    header("Location: login.php");
    exit;
}

$currentUser = $_SESSION['username'];
$currentPassword = $_SESSION['password'];
$currentEmail = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>
    <?php require("navbar.php"); ?>

    <div>
        <h1>Profile</h1>

        <main class="profile-container">
            <div class="profile-picture">
                <img src="assets/sensei_default_profile.jpeg" alt="Profile Picture">
            </div>
            <div class="profile-description">
                <h2><?php echo $currentUser; ?></h2>
                <a href="change.php">Change your name</a>
                <p><?php echo $currentEmail; ?></p>
            </div>
            <a href="delete.php" class="delete-button">Delete Account</a>
        </main>
    </div>

</body>
</html> 
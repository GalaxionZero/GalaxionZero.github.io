<?php 
    require("koneksi.php");
    session_start();

    if ($_SESSION['username'] == 'root' || !isset($_SESSION['username'])) {
        echo "<script>alert('You are not logged in! Redirecting to login page...');</script>";
        header("Location: login.php");
        exit;
    }

    echo $_SESSION['photo_address'];

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
    
    <link rel="Icon" href="assets/Prime_Student_Council_Icon.webp">
</head>
<body>
<?php require("navbar.php"); ?>

<div>
    <h1>Profile</h1>

    <main class="profile-container">
        <div class="profile-picture">
            <img src="<?php echo $_SESSION['photo_address']?>" alt="Profile Picture" style="width: 280px; height: 320px">
        </div>
        <div class="profile-description">
            <h2><?php echo $currentUser; ?></h2>
            <a href="change.php">Change your name/profile picture</a>
            <br>
            <a href="delete-photo.php">Revert to default pfp</a>
            <p><?php echo $currentEmail; ?></p>
        </div>
        <a href="#" class="delete-button" id="deleteBtn">Delete Account</a>
        <a href="logout.php" class="logout-button">Logout</a>
    </main>
</div>

<script src="scripts/crud.js"></script>

</body>
</html> 
<?php
    session_start();

    require("koneksi.php");

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $username = $_SESSION['username'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = $_POST['username'];

        $query = "UPDATE sensei SET username = '$newUsername' WHERE email = '$email'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['username'] = $newUsername;
            header("Location: profile.php");
            exit;
        } else {
            echo "Error updating username: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/home.css">
    
    <link rel="Icon" href="assets/Prime_Student_Council_Icon.webp">
</head>
<body>
    <style>
        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(assets/arona-touch-login.png);
            background-size: cover;
            background-position: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>

    <?php require("navbar.php"); ?>

    <main class="container2">
        <div id="login-container" class="login-container">
            <form id="login-form" method="POST">
                <label for="newUsername">New Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                
                <input type="submit" id="login-button" value="Change Name">
            </form>
        </div>
    </main>

</body>
</html>

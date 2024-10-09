<?php
    require("koneksi.php");

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "INSERT INTO sensei (username, password, email) VALUES ('$username', '$password', '$email')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data berhasil ditambahkan')</script>";
            header("Location: index.php");
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/home.css">
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
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <input type="submit" id="login-button" value="Sign Up">
            </form>
        </div>
    </main>

</body>
</html>

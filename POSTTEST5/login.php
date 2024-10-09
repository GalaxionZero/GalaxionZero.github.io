<?php
    session_start();

    require("koneksi.php");

    $password = '';
    $email = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "SELECT * FROM sensei";

        $result = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($result)) {
            if ($data['email'] == $email && $data['password'] == $password) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $data['password'];
                $_SESSION['username'] = $data['username'];
                echo "<script>alert('Login berhasil')</script>";
                header("Location: profile.php");
                exit;
            } elseif ($data['email'] == $email && $data['password'] != $password) {
                echo "<script>alert('Password salah')</script>";
                break;
            }
        }
        echo "<script>alert('Login gagal')</script>";
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
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="gmail@gmail.com" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="********" required><br><br>
                
                
                <input type="submit" id="login-button" value="Log in">
            </form>
            <div>
                <br>Don't have an account? <a href="sign-up.php"><span>Register</span></a>
            </div>
        </div>
    </main>

</body>
</html>

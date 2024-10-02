<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            <form id="login-form" action="index.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <input type="submit" id="login-button" value="Login">
            </form>
        </div>
    </main>

    <script src="scripts/scripts.js"></script>
</body>
</html>

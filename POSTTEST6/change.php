<?php
    session_start();

    require("koneksi.php");
    date_default_timezone_set('Asia/Makassar');

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $username = $_SESSION['username'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = $_POST['username'];
        $tmp_photo = $_FILES['photo']['tmp_name'];
        $photo = $_FILES['photo']['name'];

        $oldPhoto = $_SESSION['photo_address'];

        if (!empty($photo)) {
            $validExtension = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = explode('.', $photo);
            $extension = strtolower(end($extension));
            $photo = date('Y-m-d h.i.s') . "." . $extension;

            if (!in_array($extension, $validExtension)) {
                echo "
                    <script>
                        alert('File yang diupload bukan gambar!');
                        document.location.href = 'change.php';
                    </script>
                ";
                exit;
            } else {
                if (!empty($oldPhoto) && file_exists($oldPhoto) && $oldPhoto != "assets/sensei_default_profile.jpeg") {
                    unlink($oldPhoto);
                }

                if (move_uploaded_file($tmp_photo, 'pfp_img/' . $photo)) {
                    echo "
                        <script>
                            alert('Berhasil mengupload gambar!');
                        </script>
                    ";
                    $query = "UPDATE sensei SET username = '$newUsername', photo_address = '$photo' WHERE email = '$email'";
            
                    if (mysqli_query($conn, $query)) {
                        $_SESSION['username'] = $newUsername;
                        if (!empty($photo)) {
                            $_SESSION['photo_address'] = "pfp_img/" . $photo;
                        } else {
                            $_SESSION['photo_address'] = "assets/sensei_default_profile.jpeg";
                        }
                        header("Location: profile.php");
                        exit;
                    } else {
                        echo "Error updating username: " . mysqli_error($conn);
                    }
                } else {
                    echo "
                        <script>
                            alert('Gagal mengupload gambar!');
                        </script>
                    ";
                    exit;
                }
            }
        } else {
            $photo = $oldPhoto;
            header("Location: profile.php");
        }

    }

    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Information Page</title>
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
            <form id="login-form" method="POST" enctype="multipart/form-data">
                <label for="newUsername">New Username:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br><br>
                <label for="photo">New Profile Picture:</label>
                <input type="file" id="photo" name="photo">
                <br><br>
                <input type="submit" id="login-button" value="Submit Changes">
            </form>
        </div>
    </main>

</body>
</html>

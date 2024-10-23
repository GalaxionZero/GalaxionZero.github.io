<?php
    session_start();

    require("koneksi.php");

    if (!isset($_SESSION['username'])) {
        echo "<script>alert('You are not logged in! Redirecting to login page...');</script>";
        header("Location: login.php");
        exit;
    }

    $email = $_SESSION['email'];

    $oldPhoto = $_SESSION['photo_address'];

    if (!empty($oldPhoto) && file_exists($oldPhoto) && $oldPhoto != "assets/sensei_default_profile.jpeg") {
        
        $query = "UPDATE sensei SET photo_address = NULL WHERE email = '$email'";
        
        if (mysqli_query($conn, $query)) {
            unlink($oldPhoto);
            $_SESSION['photo_address'] = "assets/sensei_default_profile.jpeg";
            header("Location: profile.php");
            exit;
        } else {
            echo "Error updating username: " . mysqli_error($conn);
        }
        header("Location: profile.php");
    } else {
        echo "Error deleting photo!";
        header("Location: profile.php");
    }
?>
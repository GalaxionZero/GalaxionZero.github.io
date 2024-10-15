<?php
    session_start();

    require("koneksi.php");

    if (!isset($_SESSION['username'])) {
        echo "<script>alert('You are not logged in! Redirecting to login page...');</script>";
        header("Location: login.php");
        exit;
    }

    $oldPhoto = $_SESSION['photo_address'];

    if (!empty($oldPhoto) && file_exists($oldPhoto)) {
        unlink($oldPhoto);
        $_SESSION['photo_address'] = "assets/sensei_default_profile.jpeg";
        header("Location: profile.php");
    }
?>
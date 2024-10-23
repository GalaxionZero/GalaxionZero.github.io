<?php
    require("koneksi.php");
    session_start();

    if (!isset($_SESSION['username'])) {
        echo "<script>alert('You are not logged in! Redirecting to login page...');</script>";
        header("Location: login.php");
        exit;
    }

    $username = $_SESSION['username'];

    $stmt = $conn->prepare("DELETE FROM sensei WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        session_destroy();
        echo "<script>alert('Your account has been deleted.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('There was an error deleting your account. Please try again later.'); window.location.href = 'profile.php';</script>";
    }

    $stmt->close();
    $conn->close();
?>
<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $db_name = 'shittim_chest';

    $conn = mysqli_connect($server, $username, $password, $db_name);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
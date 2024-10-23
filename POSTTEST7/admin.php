<?php
    session_start();
    include 'koneksi.php';

    include 'navbar.php';

    if (isset($_SESSION)){
        if ($_SESSION['adminStatus'] == true){
            echo "Welcome," . $_SESSION['username'];
        } else {
            header('Location: login.php');
        }
    }

    $query = "SELECT * FROM sensei";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $query = "SELECT * FROM sensei WHERE username LIKE '%$search%'";
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>

    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        body {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>

    <h1>Admin View</h1>

    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
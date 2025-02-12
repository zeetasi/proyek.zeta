<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, Admin!</h1>
        <a href="users.php">Manajemen Pengguna</a> |
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
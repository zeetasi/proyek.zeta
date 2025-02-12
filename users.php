<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Pengguna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Daftar Pengguna</h2>
    <a href="add_user.php">Tambah Pengguna</a> | <a href="logout.php">Logout</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['role'] ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $row['id'] ?>">Edit</a> | 
                    <a href="delete_user.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
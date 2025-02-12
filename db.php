<?php
$host = "localhost";
$user = "root"; // Ganti jika ada user lain
$pass = ""; // Ganti jika ada password
$dbname = "admin_panel";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
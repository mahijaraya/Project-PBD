<?php
// koneksi database
include 'koneksi.php';

$username = $_GET['username'];
$sandi = $_GET['idadmin'];

// Menggunakan prepared statements untuk menghindari serangan SQL Injection
$query = "SELECT username, idadmin FROM tbadmin WHERE username = ? AND idadmin = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $sandi);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($username == $row['username'] && $sandi == $row['idadmin']) {
    // Login berhasil
    header("Location: home.php");
    exit();
} else {
    // Gagal login
    header("Location: login.php?error=1");
    exit();
}
?>

<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idadmin = $_POST['idadmin'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];
$nama_lengkap = $_POST['nama_lengkap'];

// update data ke database
mysqli_query($koneksi,"update tbadmin set username='$username',sandi='$sandi',nama_lengkap='$nama_lengkap' where idadmin='$idadmin'");

// mengalihkan halaman kembali tampil tbguru
header("location:home.php?page=admin");

?>
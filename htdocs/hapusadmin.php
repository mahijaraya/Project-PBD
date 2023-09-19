<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idadmin = $_GET['idadmin'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbadmin where idadmin='$idadmin'");

// mengalihkan halaman kembali ke index.php
header("location:home.php?page=admin");

?>
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idguru = $_GET['idguru'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbguru where idguru='$idguru'");

// mengalihkan halaman kembali ke index.php
header("location:home.php?page=guru");

?>
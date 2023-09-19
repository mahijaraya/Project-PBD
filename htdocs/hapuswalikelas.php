<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idkelas = $_GET['idkelas'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbwalikelas where idkelas='$idkelas'");

// mengalihkan halaman kembali ke index.php
header("location:home.php?page=walikelas");

?>
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idadmin = $_POST['idadmin'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];
$nama_lengkap = $_POST['nama_lengkap'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbadmin values('$idadmin','$username','$sandi','$nama_lengkap')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=admin");

?>
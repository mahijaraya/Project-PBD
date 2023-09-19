<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$idguru = $_POST['idguru'];
$jabatan_guru = $_POST['jabatan_guru'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbwalikelas values('$idkelas','$kelas','$idguru','$jabatan_guru')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=walikelas");

?>
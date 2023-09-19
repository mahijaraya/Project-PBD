<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idguru = $_POST['idguru'];
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbguru values('$idguru','$nip','$nama_guru','$jenis_kelamin')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=guru");

?>
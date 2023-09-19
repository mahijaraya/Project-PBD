<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idspp = $_POST['idspp'];
$idsiswa = $_POST['idsiswa'];
$nama_siswa = $_POST['nama_siswa'];
$idadmin = $_POST['idadmin'];
$nama_admin = $_POST['nama_admin'];
$tglbayar = $_POST['tglbayar'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];


// menginput data ke database
mysqli_query($koneksi,"insert into tbspp values('$idspp','$idsiswa','$nama_siswa','$idadmin','$nama_admin','$tglbayar','$jumlah','$ket')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=spp");

?>
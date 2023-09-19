<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form tambah pelanggan
$idsiswa = $_POST['idsiswa'];
$nama_siswa = $_POST['nama_siswa'];
$idkelas = $_POST['idkelas'];
$tahun_pelajaran = $_POST['tahun_pelajaran'];
$biaya = $_POST['biaya'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbsiswa values('$idsiswa','$nama_siswa','$idkelas','$tahun_pelajaran','$biaya')");

// mengalihkan halaman kembali ke tampilpelanggan.php
header("location:home.php?page=siswa");

?>
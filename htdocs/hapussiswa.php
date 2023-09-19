<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idsiswa = $_GET['idsiswa'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbsiswa where idsiswa='$idsiswa'");

// mengalihkan halaman kembali ke index.php
header("location:home.php?page=siswa");

?>
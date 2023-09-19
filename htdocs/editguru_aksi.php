<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idguru = $_POST['idguru'];
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// update data ke database
mysqli_query($koneksi,"update tbguru set nip='$nip',nama_guru='$nama_guru',jenis_kelamin='$jenis_kelamin' where idguru='$idguru'");

// mengalihkan halaman kembali tampil tbguru
header("location:home.php?page=guru");

?>
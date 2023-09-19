<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$idguru = $_POST['idguru'];
$jabatan_guru = $_POST['jabatan_guru'];

// update data ke database
mysqli_query($koneksi,"update tbwalikelas set kelas='$kelas',idguru='$idguru',jabatan_guru='$jabatan_guru' where idkelas='$idkelas'");

// mengalihkan halaman kembali tampil tbwalikelas
header("location:home.php?page=walikelas");

?>
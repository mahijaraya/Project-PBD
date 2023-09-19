<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idspp = $_POST['idspp'];
$idsiswa = $_POST['idsiswa'];
$nama_siswa = $_POST['nama_siswa'];
$idadmin = $_POST['idadmin'];
$nama_admin = $_POST['nama_admin'];
$tglbayar = $_POST['tglbayar'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];

// update data ke database
mysqli_query($koneksi,"update tbspp set idsiswa='$idsiswa',nama_siswa='$nama_siswa',idadmin='$idadmin', nama_admin='$nama_admin', tglbayar='$tglbayar', jumlah='$jumlah', ket='$ket' where idspp='$idspp'");

// mengalihkan halaman kembali tampil tbguru
header("location:home.php?page=spp");

?>
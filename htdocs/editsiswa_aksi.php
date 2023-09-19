<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idsiswa = $_POST['idsiswa'];
$nama_siswa = $_POST['nama_siswa'];
$idkelas = $_POST['idkelas'];
$tahun_pelajaran = $_POST['tahun_pelajaran'];
$biaya = $_POST['biaya'];

// update data ke database
mysqli_query($koneksi,"update tbsiswa set nama_siswa='$nama_siswa',idkelas='$idkelas',tahun_pelajaran='$tahun_pelajaran', biaya='$biaya' where idsiswa='$idsiswa'");

// mengalihkan halaman kembali tampil tbguru
header("location:home.php?page=siswa");

?>
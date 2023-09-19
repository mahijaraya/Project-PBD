<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idspp = $_GET['idspp'];


// menghapus data dari database
mysqli_query($koneksi,"delete from tbspp where idspp='$idspp'");

// mengalihkan halaman kembali ke index.php
header("location:home.php?page=spp");

?>
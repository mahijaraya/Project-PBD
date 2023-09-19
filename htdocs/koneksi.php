<?php 
$koneksi = mysqli_connect("sql100.infinityfree.com","if0_34491112","9Z4iU37AEOAKQge","if0_34491112_tim7");

// Cek Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
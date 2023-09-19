<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}

		h2 {
			text-align: center;
			color: #333;
		}

		a {
			display: inline-block;
			margin-top: 10px;
			color: #fff;
			background-color: #1976D2;
			padding: 5px 10px;
			text-decoration: none;
			border-radius: 4px;
		}

		a:hover {
			background-color: #555;
		}

		form {
			width: 400px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 4px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		table {
			width: 100%;
		}

		td {
			padding: 10px;
		}

		input[type="text"] {
			width: 100%;
			padding: 5px;
			border-radius: 4px;
			border: 1px solid #ccc;
		}

		input[type="submit"] {
			display: inline-block;
			margin-top: 10px;
			color: #fff;
			background-color: #1976D2;
			padding: 5px 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}

		.center {
			text-align: center;
		}

		.error-message {
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<h2>TAMBAH SPP</h2>
	<br/>
	<a href="home.php?page=spp">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahspp_aksi.php">
		<table>
             <tr>			
				<td>Id SPP</td>
				<td><input type="text" name="idspp"></td>
			</tr>
			<tr>			
				<td>Id Siswa</td>
				<td><input type="text" name="idsiswa"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama_siswa"></td>
			</tr>
            <tr>			
				<td>Id Admin</td>
				<td><input type="text" name="idadmin"></td>
			</tr>
			<tr>
				<td>Nama Admin</td>
				<td><input type="text" name="nama_admin"></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tglbayar"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
            <tr>			
				<td>Keterangan</td>
				<td><input type="text" name="ket"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'spp':
				include "tampilspp.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>
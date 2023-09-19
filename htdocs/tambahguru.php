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

	<h2>TAMBAH DATA GURU</h2>
	<br/>
	<a href="home.php?page=guru">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambahguru_aksi.php">
		<table>
			<tr>			
				<td>Id Guru</td>
				<td><input type="text" name="idguru"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input type="text" name="nama_guru"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
                <td>
                <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki 
                <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                </td>
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
			case 'guru':
				include "tampilguru.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>

</body>
</html>
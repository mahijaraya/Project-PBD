<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 20px;
		}

		h2 {
			color: #333;
			text-align: center;
			margin-bottom: 20px;
		}

		a {
			display: inline-block;
			background-color: #1976D2;
			color: #fff;
			padding: 10px 20px;
			text-decoration: none;
			border-radius: 4px;
			margin-bottom: 10px;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 4px;
		}

		table {
			width: 100%;
		}

		td {
			padding: 10px;
		}

		input[type="text"] {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		input[type="submit"] {
			display: inline-block;
			background-color: #1976D2;
			color: #fff;
			padding: 10px 20px;
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

		.error {
			color: red;
		}
	</style>
</head>
<body>

	<h2>EDIT DATA GURU</h2>
	<br/>
	<a href="home.php?page=guru">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$idguru = $_GET['idguru'];
	$data = mysqli_query($koneksi,"select * from tbguru where idguru='$idguru'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="editguru_aksi.php">
			<table>
				<tr>			
					<td>NIP</td>
					<td>
						<input type="hidden" name="idguru" value="<?php echo $d['idguru']; ?>">
						<input type="text" name="nip" value="<?php echo $d['nip']; ?>">
					</td>
					<td>Nama Guru</td>
					<td>
						<input type="text" name="nama_guru" value="<?php echo $d['nama_guru']; ?>">
					</td>
					<td>Jenis Kelamin</td>
					<td>
                        <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($d['jenis_kelamin'] === 'laki-laki') ? 'checked' : ''; ?>> Laki-laki
                        <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($d['jenis_kelamin'] === 'perempuan') ? 'checked' : ''; ?>> Perempuan

					</td>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'kategori':
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
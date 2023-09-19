<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
		h2 {
			text-align: center;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		th, td {
			padding: 10px;
			text-align: left;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		a.button {
			display: inline-block;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			border-radius: 4px;
			background-color: #4CAF50;
			color: white;
		}

		a.button:hover {
			background-color: #45a049;
		}

		a.edit {
			background-color: #2196F3;
		}

		a.delete {
			background-color: #F44336;
		}

		a.edit, a.delete {
			display: inline-block;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			border-radius: 4px;
			color: white;
			margin-right: 5px;
		}

		a.edit:hover {
			background-color: #1976D2;
		}

		a.delete:hover {
			background-color: #D32F2F;
		}

        .search-form {
			text-align: center;
			margin-bottom: 20px;
		}

		.search-input {
			padding: 8px;
			width: 300px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.search-button {
			padding: 8px 16px;
			border: none;
			border-radius: 4px;
			background-color: #2196F3;
			color: white;
			cursor: pointer;
		}

		.search-button:hover {
			background-color: #1976D2;
		}
	</style>
	<script>
		function confirmDelete() {
			var result = confirm("Apakah Anda yakin ingin menghapus data walikelas ini?");
			if (result) {
				return true;
			} else {
				return false;
			}
		}
	</script>
</head>
<body>

	<h2>DATA WALIKELAS</h2>
	<br/>
    <div class="search-form">
		<form action="tampilwalikelas.php" method="GET">
			<input class="search-input" type="text" name="idkelas" placeholder="Cari berdasarkan Id Kelas">
			<button class="search-button" type="submit">Cari</button>
		</form>
	</div>
	<a class="button" href="tambahwalikelas.php">+ TAMBAH WALIKELAS</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id Kelas</th>
			<th>Kelas</th>
			<th>Id Guru</th>
			<th>Jabatan Guru</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$idkelas = isset($_GET['idkelas']) ? $_GET['idkelas'] : '';
		$query = "SELECT * FROM tbwalikelas";
		if (!empty($idkelas)) {
			$query .= " WHERE idkelas LIKE '%$idkelas%'";
		}
		$query .= " ORDER BY idkelas";
		$data = mysqli_query($koneksi, $query);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idkelas']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['idguru']; ?></td>
				<td><?php echo $d['jabatan_guru']; ?></td>
				<td>
					<a class="edit" href="editwalikelas.php?idkelas=<?php echo $d['idkelas']; ?>">Edit</a>
					<a class="delete" href="hapuswalikelas.php?idkelas=<?php echo $d['idkelas']; ?>" onclick="return confirmDelete();">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
    <br/>
	<a class="button" href="home.php">Kembali</a>
</body>
</html>
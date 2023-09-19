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
			var result = confirm("Apakah Anda yakin ingin menghapus data guru ini?");
			if (result) {
				return true;
				} else {
				return false;
			}
		}
	</script>
</head>
<body>
	<h2>DATA GURU</h2>
	<br/>
    <div class="search-form">
		<form action="tampilguru.php" method="GET">
			<input class="search-input" type="text" name="search" placeholder="Cari berdasarkan NIP atau Nama Guru" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
			<button class="search-button" type="submit">Cari</button>
		</form>
	</div>
	<a class='button' href="tambahguru.php">+ TAMBAH GURU</a>
	<br/>
	<br/>
	<table border='1'> 
		<tr>
			<th>Id Guru</th>
			<th>NIP</th>
			<th>Nama Guru</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$search_value = isset($_GET['search']) ? $_GET['search'] : '';
		$query = "SELECT * FROM tbguru";
		if (!empty($search_value)) {
			$query .= " WHERE nip LIKE '%$search_value%' OR nama_guru LIKE '%$search_value%'";
		}
		$query .= " ORDER BY idguru";
		$data = mysqli_query($koneksi, $query);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['idguru']; ?></td>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nama_guru']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td>
					<a class = 'edit' href="editguru.php?idguru=<?php echo $d['idguru']; ?>">Edit</a>
					<a class = 'delete' href="hapusguru.php?idguru=<?php echo $d['idguru']; ?>" onclick="return confirmDelete();">Hapus</a>
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

<!DOCTYPE html>
<html>
<head>
	<title>Data Admin</title>
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
			var result = confirm("Apakah Anda yakin ingin menghapus data admin ini?");
			if (result) {
				return true;
				} else {
				return false;
			}
		}
	</script>
</head>
<body>
	<h2>DATA ADMIN</h2>
	<br/>
	<div class="search-form">
		<form action="tampiladmin.php" method="GET">
			<input class="search-input" type="text" name="idadmin" placeholder="Cari berdasarkan Id Admin">
			<button class="search-button" type="submit">Cari</button>
		</form>
	</div>
	<a class="button" href="tambahadmin.php">+ TAMBAH ADMIN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id Admin</th>
			<th>Username</th>
			<th>Sandi</th>
			<th>Nama Lengkap</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$idadmin = isset($_GET['idadmin']) ? $_GET['idadmin'] : '';
		$query = "SELECT * FROM tbadmin";
		if (!empty($idadmin)) {
			$query .= " WHERE idadmin LIKE '%$idadmin%'";
		}
		$query .= " ORDER BY idadmin";
		$data = mysqli_query($koneksi, $query);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idadmin']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['sandi']; ?></td>
				<td><?php echo $d['nama_lengkap']; ?></td>
				<td>
					<a class="edit" href="editadmin.php?idadmin=<?php echo $d['idadmin']; ?>">Edit</a>
					<a class="delete" href="hapusadmin.php?idadmin=<?php echo $d['idadmin']; ?>" onclick="return confirmDelete();">Hapus</a>
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

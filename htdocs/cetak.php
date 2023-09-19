<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
 
	<center>
 
		<h2>LAPORAN DATA GURU</h2>
		<h4>SMA ANDALUSIA</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="7%">Idguru</th>
			<th>Nama Guru</th>
			<th width="5%">NIP</th>
			<th width="10%">Jenis Kelamin</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tbguru");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['idguru']; ?></td>
			<td><?php echo $data['nama_guru']; ?></td>
			<td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
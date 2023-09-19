<!DOCTYPE html>
<html>
<head>
<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}
.container {
max-width: 800px;
margin: 0 auto;
padding: 20px;
}

h2,p {
text-align: center;
}

h4 {
text-align: center;
color: #888;
}

.table-container {
margin-top: 20px;
}

table {
width: 100%;
border-collapse: collapse;
}

table th, table td {
padding: 10px;
border: 1px solid #ddd;
}

table th {
background-color: #1976D2;
color: #fff;
}

.button {
display: inline-block;
background-color: #1976D2;
color: #fff;
padding: 10px 20px;
text-decoration: none;
border-radius: 4px;
margin-bottom: 10px;
}

.button:hover {
background-color: #1565C0;
}

</style>
</head>
<body>
<div class="container">
  <h2>LAPORAN DATA SPP</h2>
  <h4></h4>
  <p>Pemrograman Basis Data </p>
  <?php
  include 'koneksi.php';
  ?>
  <div class="table-container">
    <table>
      <tr>
        <th>Id SPP</th>
        <th>Id Siswa</th>
        <th>Nama Siswa</th>
        <th>Id Admin</th>
        <th>Nama Admin</th>
        <th>Tanggal Bayar</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
      </tr>
      <?php
      $no = 1;
      $sql = mysqli_query($koneksi, "SELECT * FROM tbspp");
      while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $data['idspp']; ?></td>
          <td><?php echo $data['idsiswa']; ?></td>
          <td><?php echo $data['nama_siswa']; ?></td>
          <td><?php echo $data['idadmin']; ?></td>
          <td><?php echo $data['nama_admin']; ?></td>
          <td><?php echo $data['tglbayar']; ?></td>
          <td><?php echo $data['jumlah']; ?></td>
          <td><?php echo $data['ket']; ?></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </div>
  <div class="button-container">
    <a class="button" href="cetak.php" target="_blank">CETAK LAPORAN</a>
    <a class="button" href="home.php" target="_blank">KEMBALI</a>
  </div>
</div>
</body>
</html>
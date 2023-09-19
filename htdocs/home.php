<!DOCTYPE html>
<html>
<head>
	<title>SMA ANDALUSIA</title>
    <style>
    
    .marquee {
        background-color: #333;
        color: #fff;
        padding: 10px;
        font-size: 16px;
        font-weight: 700;
    }

    .marquee span {
        display: inline-block;
        margin-right: 20px;
        animation: marquee 15s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }

	</style>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">SMA ANDALUSIA</h1>
		<h3 class="deskripsi">Jalan Belanja No. 1 Purwokerto Utara</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="home.php?page=beranda">BERANDA</a></li>
            <li><a href="home.php?page=admin">ADMIN</a></li>
   			<li><a href="home.php?page=guru">GURU</a></li>
			<li><a href="home.php?page=siswa">SISWA</a></li>
			<li><a href="home.php?page=walikelas">WALIKELAS</a></li>
            <li><a href="home.php?page=spp">SPP</a></li>
            <li><a href="home.php?page=laporan">LAPORAN</a></li>
			<li><a href="home.php?page=tentang">TENTANG</a></li>
		</ul>
	</div>

    <div class="badan">
            <div class="marquee">
				<span>Luruskan dan rapatkan barisan solat. Selamat datang di SMA Andalusia. Temukan pengetahuan dan inspirasi di sini.</span>
			</div>
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'beranda':
				include "beranda.php";
				break;
            case 'admin':
				include "tampiladmin.php";
				break;
			case 'guru':
				include "tampilguru.php";
				break;	
			case 'siswa':
				include "tampilsiswa.php";
				break;	
			case 'walikelas':
				include "tampilwalikelas.php";
				break;
            case 'spp':
				include "tampilspp.php";
				break;	
            case 'laporan':
				include "laporan.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "beranda.php";
	}

	 ?>
   </div>
</div>
</body>
</html>
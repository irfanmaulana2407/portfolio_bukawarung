<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">IRFAN_Bukawarung</a></h1>
			<ul>
				<li><a href="dashboard.php">Beranda Portfolio</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
			</div>
	</header>
	<!-- conten -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko Online</h4>
			</div>
		</div>
	</div>
	<!-- produk -->
	<div class="section">
		<div class="produk">
			<h4>Produk Terkini</h4>
			<div class="box">
				<div class="col-4">
					<img src="img/jaket.jpg">
					<p class="nama">Jaket gunung</p>
					<p class="harga">Rp.350,000</p>
					<img src="img/tas.jpg">
					<p class="nama">tas gunung</p>
					<p class="harga">Rp.500,000</p>
					<img src="img/tenda.jpg">
					<p class="nama">tenda kapasitas 2 orang</p>
					<p class="harga">Rp.800,000</p>
					<img src="img/sepatu.jpg">
					<p class="nama">sepatu gunung</p>
					<p class="harga">Rp.600,000</p>
					
					
				</div>
			</div>
		</div>
		
	</div>


	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Bukawarung.</small>
		</div>
	</footer>
</body>
</html>
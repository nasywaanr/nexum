<?php
session_start();
include 'dbconnect.php';

?>

<style>
	/* 
----- © Copyright wrseno ----- 
 YT : Sen Tutorial 
 IG : wrzeno_
 
*/

	:root {
		--blue: #2C2546;
		--dark-blue: #1B1535;
		--green: #00EB09;
		--white: #fff;
	}

	*,
	*::before,
	*::after {
		margin: 0;
		padding: 0;
		list-style-type: none;
		text-decoration: none;
		box-sizing: border-box;
		font-family: 'Tahoma';
	}

	body {
		background-color: var(--dark-blue);
		color: var(--white);
	}

	header {
		align-items: center;
		position: fixed;
		width: 100%;
		top: 0;
		padding: 2%;
		font-weight: bold;
		font-size: 15pt;
		justify-content: center;
		text-align: center;
		background-color: var(--blue);
		z-index: 999;
	}

	.title {
		color: var(--green);
		font-size: 15pt;
		border-bottom: 1px solid var(--white);
	}

	.search-input {
		border-radius: 0 0 0 20px;
		border: none;
		padding: 2px;
		background-color: var(--white);
		margin-bottom: 15px;
		width: 30%;
	}

	.search-submit {
		border-radius: 0 20px 0 0;
		border: none;
		padding: 2px;
		margin-left: -5px;
		background-color: var(--green);
		color: var(--blue);
		font-weight: bold;
		width: 5%;
	}

	nav ul {
		display: flex;
		gap: 2rem;
		justify-content: center;
	}

	nav ul li a {
		color: var(--green);
		font-size: 12pt;
	}

	nav ul li a:hover {
		border-bottom: 1px solid var(--white);
	}

	li.active a {
		border-bottom: 2px solid var(--white);
	}

	.menu {
		transition: .5s;
	}

	.container {
		width: 100%;
		height: 100vh;
		margin-top: 5%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.swiper {
		width: 80%;
		height: fit-content;
	}

	.swiper-slide img {
		width: 100%;
		border-radius: 10px;
	}

	.list__harga {
		color: var(--white);
	}

	.title-p {
		margin-top: 5%;
		margin-left: 65px;
		margin-bottom: 10px;
	}

	.populer {
		display: grid;
		grid-template-columns: repeat(6, 1fr);
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		gap: 1rem;
		font-weight: bold;
	}

	.populer img {
		border-radius: 10px;
	}

	.link a {
		color: var(--white);
	}

	.link a:hover {
		color: var(--green);
	}

	.overlay {
		position: fixed;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: rgba(0, 0, 0, 0.7);
		transition: opacity 500ms;
		visibility: hidden;
		opacity: 0;
		z-index: 999;
	}

	.overlay:target {
		visibility: visible;
		opacity: 1;
	}

	.popup {
		margin: 70px auto;
		padding: 20px;
		background: var(--dark-blue);
		border-radius: 5px;
		width: 30%;
		position: relative;
		transition: all 5s ease-in-out;
	}

	.popup h2 {
		margin-top: 0;
		color: var(--white);
		font-family: Tahoma, Arial, sans-serif;
	}

	.popup .close {
		position: absolute;
		top: 20px;
		right: 30px;
		transition: all 200ms;
		font-size: 30px;
		font-weight: bold;
		text-decoration: none;
		color: #333;
	}

	.popup .close:hover {
		color: #06D85F;
	}

	.content {
		max-height: 30%;
		width: 50%;
	}

	.harga {
		color: var(--green);
	}

	.pesan {
		color: var(--blue);
		background-color: var(--green);
		border-radius: 10px;
		padding: 10px;
	}

	.pesan:hover {
		color: var(--green);
		background-color: var(--dark-blue);
	}

	.pesan img {
		margin-top: 20px;
		width: 20px;
		background-color: var(--green);
		color: var(--blue);
	}

	.title-s {
		margin-top: 5%;
		margin-left: 65px;
		margin-bottom: 10px;
	}

	.streaming {
		display: grid;
		grid-template-columns: repeat(6, 1fr);
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		gap: 1rem;
		font-weight: bold;
	}

	.streaming img {
		border-radius: 10px;
	}

	.title-v {
		margin-top: 5%;
		margin-left: 65px;
		margin-bottom: 10px;
	}

	.voucher {
		display: grid;
		grid-template-columns: repeat(6, 1fr);
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		gap: 1rem;
		font-weight: bold;
	}

	.voucher img {
		border-radius: 10px;
	}

	.tentang {
		display: grid;
		justify-content: center;
		margin-top: 10%;
		font-size: 15pt;
	}

	.card {
		background-color: var(--blue);
		padding: 5%;
		border-radius: 10px;
		box-shadow: 20px 20px black;
	}

	.card h1 {
		text-align: center;
	}

	html {
		scroll-behavior: smooth;
	}

	footer {
		display: grid;
		justify-content: center;
		background-color: var(--blue);
		margin-top: 10%;
		padding: 2%;
	}

	.sosmed img {
		width: 50px;
	}

	#copyright {
		text-align: center;
		padding: 10px;
	}


	/* RESPONSIVE WEB DI HANDPHONE */
	@media screen and (max-width:600px) {
		body {
			overflow-x: hidden;
		}

		header {
			font-size: 20pt;
		}

		nav ul li a {
			font-size: 10pt;
		}

		.container {
			width: 100%;
			margin-top: 20%;
			height: 40vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.title-p {
			font-size: 15pt;
			margin-left: 30px;
		}

		.populer {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			width: 90%;
			margin-left: 7%;
			margin-right: 3%;
			font-size: 10pt;
			margin-top: 5%;
		}

		.populer img {
			width: 100%;
		}

		.popup {
			margin: 70px auto;
			padding: 10px;
			background: var(--dark-blue);
			border-radius: 5px;
			width: 80%;
			position: relative;
			transition: all 5s ease-in-out;
		}

		.title-s {
			margin-top: 10%;
			font-size: 15pt;
			margin-left: 30px;
		}

		.streaming {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 10pt;
		}

		.streaming img {
			width: 100%;
		}

		.title-v {
			margin-top: 10%;
			font-size: 15pt;
			margin-left: 30px;
		}

		.voucher {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 10pt;
		}

		.voucher img {
			border-radius: 10px;
			width: 100%;
		}

		.pesan img {
			width: 10%;
		}

		.tentang {
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			height: 200px;
			font-size: 11pt;
			margin-bottom: 10%;
		}

		footer {
			font-size: 10pt;
		}

		.sosmed img {
			width: 30px;
		}
	}


	/* RESPONSIVE WEB DI TABLET */
	@media screen and (min-width:600px) {
		body {
			overflow-x: hidden;
		}

		header {
			font-size: 20pt;
		}

		nav ul li a {
			font-size: 12pt;
		}

		.container {
			width: 100%;
			margin-top: 20%;
			height: 40vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.title-p {
			font-size: 15pt;
			margin-left: 30px;
		}

		.populer {
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 10pt;
			margin-top: 5%;
		}

		.populer img {
			width: 100%;
		}

		.popup {
			margin: 70px auto;
			padding: 10px;
			background: var(--dark-blue);
			border-radius: 5px;
			width: 80%;
			position: relative;
			transition: all 5s ease-in-out;
		}

		.title-s {
			margin-top: 10%;
			font-size: 15pt;
			margin-left: 30px;
		}

		.streaming {
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 10pt;
		}

		.streaming img {
			width: 100%;
		}

		.title-v {
			margin-top: 10%;
			font-size: 15pt;
			margin-left: 30px;
		}

		.voucher {
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 10pt;
		}

		.voucher img {
			border-radius: 10px;
			width: 100%;
		}

		.pesan img {
			width: 10%;
		}

		.tentang {
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			height: 200px;
			font-size: 13pt;
			margin-bottom: 10%;
		}

		footer {
			font-size: 10pt;
		}

		.sosmed img {
			width: 50px;
		}
	}


	@media screen and (min-width:968px) {
		.title {
			color: var(--green);
			font-size: 15pt;
			border-bottom: 1px solid var(--white);
		}

		.search-input {
			border-radius: 0 0 0 20px;
			border: none;
			padding: 2px;
			background-color: var(--white);
			margin-bottom: 15px;
			width: 30%;
		}

		.search-submit {
			border-radius: 0 20px 0 0;
			border: none;
			padding: 2px;
			margin-left: -5px;
			background-color: var(--green);
			color: var(--blue);
			font-weight: bold;
			width: 5%;
		}

		nav ul {
			display: flex;
			gap: 2rem;
			justify-content: center;
		}

		nav ul li a {
			color: var(--green);
			font-size: 12pt;
		}

		nav ul li a:hover {
			border-bottom: 1px solid var(--white);
		}

		li.active a {
			border-bottom: 2px solid var(--white);
		}

		.menu {
			transition: .5s;
		}

		.container {
			width: 100%;
			height: 100vh;
			margin-top: 5%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.swiper {
			width: 80%;
			height: fit-content;
		}

		.swiper-slide img {
			width: 100%;
			border-radius: 10px;
		}

		.list__harga {
			color: var(--white);
		}

		.title-p {
			font-size: 20pt;
			margin-top: 5%;
			margin-left: 65px;
			margin-bottom: 10px;
		}

		.populer {
			display: grid;
			grid-template-columns: repeat(6, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			gap: 1rem;
			font-weight: bold;
		}

		.populer img {
			border-radius: 10px;
		}

		.link a {
			color: var(--white);
		}

		.link a:hover {
			color: var(--green);
		}

		.overlay {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			transition: opacity 500ms;
			visibility: hidden;
			opacity: 0;
			z-index: 999;
		}

		.overlay:target {
			visibility: visible;
			opacity: 1;
		}

		.popup {
			margin: 70px auto;
			padding: 20px;
			background: var(--dark-blue);
			border-radius: 5px;
			width: 30%;
			position: relative;
			transition: all 5s ease-in-out;
		}

		.popup h2 {
			margin-top: 0;
			color: var(--white);
			font-family: Tahoma, Arial, sans-serif;
		}

		.popup .close {
			position: absolute;
			top: 20px;
			right: 30px;
			transition: all 200ms;
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			color: #333;
		}

		.popup .close:hover {
			color: #06D85F;
		}

		.content {
			max-height: 30%;
			width: 50%;
		}

		.harga {
			color: var(--green);
		}

		.pesan {
			color: var(--blue);
			background-color: var(--green);
			border-radius: 10px;
			padding: 10px;
		}

		.pesan:hover {
			color: var(--green);
			background-color: var(--dark-blue);
		}

		.pesan img {
			margin-top: 20px;
			width: 20px;
			background-color: var(--green);
			color: var(--blue);
		}

		.title-s {
			font-size: 20pt;
			margin-top: 5%;
			margin-left: 65px;
			margin-bottom: 10px;
		}

		.streaming {
			display: grid;
			grid-template-columns: repeat(6, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			gap: 1rem;
			font-weight: bold;
		}

		.streaming img {
			border-radius: 10px;
		}

		.title-v {
			font-size: 20pt;
			margin-top: 5%;
			margin-left: 65px;
			margin-bottom: 10px;
		}

		.voucher {
			display: grid;
			grid-template-columns: repeat(6, 1fr);
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			gap: 1rem;
			font-weight: bold;
		}

		.voucher img {
			border-radius: 10px;
		}

		.tentang {
			display: grid;
			justify-content: center;
			margin-top: 10%;
			font-size: 15pt;
		}

		.card {
			background-color: var(--blue);
			padding: 5%;
			border-radius: 10px;
			box-shadow: 20px 20px black;
		}

		.card h1 {
			text-align: center;
		}

		html {
			scroll-behavior: smooth;
		}

		footer {
			display: grid;
			justify-content: center;
			background-color: var(--blue);
			margin-top: 10%;
			padding: 2%;
		}

		.sosmed img {
			width: 50px;
		}

		#copyright {
			text-align: center;
			padding: 10px;
		}
	}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nexum E-Commerce</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="images/nexum_logo.png">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body style="background: linear-gradient(to right,#382A3E, #E22F89);">
	<!-- start header -->
	<header style=" background-color: #382A3E;">
		<nav>

			<ul>
				<li><a class="" href="#"><img src="images/nexum_logo.png" alt="" style="width: 60px; height: 60px; margin-top: -20px"></a></li>
				<li class="active"><a class="menu" href="#">BERANDA</a></li>
				<li><a class="menu" href="#produk">PRODUK</a></li>
				<li><a class="menu" href="#tentang">TENTANG KAMI</a></li>
				<div class="agile-login">
					<ul>
						<?php
						if (!isset($_SESSION['log'])) {
							echo '
					<li><a href="registered.php"> DAFTAR</a></li>
					<li><a href="login.php">MASUK</a></li>
					';
						} else {

							if ($_SESSION['role'] == 'Member') {
								echo '
					
					<li><a href="logout.php">Keluar</a></li>
					';
							} else {
								echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="admin">ADMIN PANEL</a></li>
					<li><a href="logout.php">KELUAR?</a></li>
					';
							};
						}
						?>

					</ul>
			</ul>
		</nav>
	</header>
	<!-- end header -->



	<!-- image slider -->
	<div class="container">
		<div class="swiper">
			<div class="swiper-wrapper">

				<div class="swiper-slide"><img src="images/web banner.jpeg" alt=""></div>
				<div class="swiper-slide"><img src="images/web banner 2.png" alt=""></div>
				<div class="swiper-slide"><img src="images/web banner 3.png" alt=""></div>
				<div class="swiper-slide"><img src="images/bannerJuniCeria.png" alt=""></div>

			</div>

			<div class="swiper-pagination"></div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</div>
	<!-- end image slider -->



	<!-- start section populer -->
	<div id="produk" style="margin-bottom: 0px;"></div>
	<h1 class="title-p">POPULER</h1>
	<section id="populer" class="populer">

		<!-- free fire -->
		<div class="ff">
			<div class="link">
				<a href="#harga-ff">
					<img src="images/ff.png" alt="">
					<div class="judul-produk">Free Fire</div>
				</a>
			</div>
			<div class="overlay" id="harga-ff">
				<div class="popup">
					<h2>HARGA FREE FIRE</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">
							70 Diamonds :
							<br>
							<span class="harga">Rp 10.000</span>
						</a>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">140 Diamonds : </a>
						<br>
						<span class="harga">Rp 20.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">210 Diamonds : </a>
						<br>
						<span class="harga">Rp 30.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">280 Diamonds : </a>
						<br>
						<span class="harga">Rp 40.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">355 Diamonds : </a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">510 Diamonds : </a>
						<br>
						<span class="harga">Rp 75.000</span>
						<br>
						<a class="list__harga" href="harga/ff.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873 " target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end free fire -->

		<!-- moblie legends -->
		<div class="mlbb">
			<div class="link">
				<a href="#harga-mlbb">
					<img src="images/mlbb.jpg" alt="">
					<div class="judul-produk">Mobile Legends</div>
				</a>
			</div>
			<div class="overlay" id="harga-mlbb">
				<div class="popup">
					<h2>HARGA MOBILE <br />LEGENDS</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">28 Diamonds :</a>
						<br>
						<span class="harga">Rp 10.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">59 Diamonds :</a>
						<br>
						<span class="harga">Rp 20.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">85 Diamonds :</a>
						<br>
						<span class="harga">Rp 25.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">172 Diamonds :</a>
						<br>
						<span class="harga">Rp 45.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">185 Diamonds :</a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">257 Diamonds :</a>
						<br>
						<span class="harga">Rp 65.000</span>
						<br>
						<a class="list__harga" href="harga/mlbb.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end mobile legends -->

		<!-- pubg -->
		<div class="pubgm">
			<div class="link">
				<a href="#harga-pubg">
					<img src="images/pubgm.jpg" alt="">
					<div class="judul-produk">Pubg Mobile</div>
				</a>
			</div>
			<div class="overlay" id="harga-pubg">
				<div class="popup">
					<h2>HARGA PUBG <br />MOBILE</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">50 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 10.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">70 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 17.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">125 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 25.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">250 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">350 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 70.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">500 UC PUBGM : </a>
						<br>
						<span class="harga">Rp 100.000</span>
						<br>
						<a class="list__harga" href="harga/pubg.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end pubg -->




		<!-- genshin -->
		<div class="gi">
			<div class="link">
				<a href="#harga-genshin-impact">
					<img src="images/GenshinImpact.jpg" alt="">
					<div class="judul-produk">Genshin Impact</div>
				</a>
			</div>
			<div class="overlay" id="harga-genshin-impact">
				<div class="popup">
					<h2>HARGA GENSHIN <br> IMPACT</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">60 Genesis Crystals :</a>
						<br>
						<span class="harga">Rp 18.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">300 Genesis Crystals :</a>
						<br>
						<span class="harga">Rp 80.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">980 Genesis Crystals :</a>
						<br>
						<span class="harga">Rp 250.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">1980 Genesis Crystals :</a>
						<br>
						<span class="harga">Rp 480.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">3280 Genesis Crystals :</a>
						<br>
						<span class="harga">Rp 800.000</span>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end genshin -->

		<!-- start codm -->
		<div class="codm">
			<div class="link">
				<a href="#harga-codm">
					<img src="images/codm.jpg" alt="">
					<div class="judul-produk">Call of Duty Mobile</div>
				</a>
			</div>
			<div class="overlay" id="harga-codm">
				<div class="popup">
					<h2>HARGA COD <br />MOBILE</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">62 CP :</a>
						<br>
						<span class="harga">Rp 11.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">127 CP :</a>
						<br>
						<span class="harga">Rp 20.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">317 CP :</a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">634 CP :</a>
						<br>
						<span class="harga">Rp 100.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">1373 CP :</a>
						<br>
						<span class="harga">Rp 200.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">2059 CP :</a>
						<br>
						<span class="harga">Rp 300.000</span>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end codm -->

		<!-- start aov -->
		<div class="aov">
			<div class="link">
				<a href="#harga-aov">
					<img src="images/aov.jpg" alt="">
					<div class="judul-produk">Arena of Valor</div>
				</a>
			</div>
			<div class="overlay" id="harga-aov">
				<div class="popup">
					<h2>HARGA ARENA OF VALOR</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">18 Voucher :</a>
						<br>
						<span class="harga">Rp 7.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">40 Voucher :</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">90 Voucher :</a>
						<br>
						<span class="harga">Rp 20.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">230 Voucher :</a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">470 Voucher :</a>
						<br>
						<span class="harga">Rp 95.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">1430 Voucher :</a>
						<br>
						<span class="harga">Rp 280.000</span>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end aov -->

		<!-- start pb -->
		<div class="pb">
			<div class="link">
				<a href="#harga-pb">
					<img src="images/PointBlank.jpg" alt="">
					<div class="judul-produk">Point Blank</div>
				</a>
			</div>
			<div class="overlay" id="harga-pb">
				<div class="popup">
					<h2>HARGA POINT BLANK</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">1.200 PB Cash :</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">2.400 PB Cash :</a>
						<br>
						<span class="harga">Rp 20.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">6.000 PB Cash :</a>
						<br>
						<span class="harga">Rp 50.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">12.000 PB Cash :</a>
						<br>
						<span class="harga">Rp 100.000</span>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end pb -->

		<!-- start ragnarok -->
		<div class="ragnarok">
			<div class="link">
				<a href="#harga-ragnarok">
					<img src="images/ragnarok.jpg" alt="">
					<div class="judul-produk">Ragnarok M</div>
				</a>
			</div>
			<div class="overlay" id="harga-ragnarok">
				<div class="popup">
					<h2>HARGA RAGNAROK M</h2>
					<a class="close" href="#produk">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Isi Sendiri :</a>
						<br>
						<span class="harga">Isi Sendiri</span>
						<br>
						<a class="list__harga" href="harga/ragnarok.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end ragnarok -->


	</section>
	<!-- end section populer -->




	<!-- start section streaming app -->
	<div id="streaming"></div>
	<h1 class="title-s">LAINNYA</h1>
	<section class="streaming">

		<!-- start spotify -->
		<div class="spotify">
			<div class="link">
				<a href="#harga-spotify">
					<img src="./images/Pulsa.png" alt="">
					<div class="judul-produk">Pulsa Reguler</div>
				</a>
			</div>
			<div class="overlay" id="harga-spotify">
				<div class="popup">
					<h2>HARGA PULSA <br> REGULER</h2>
					<a class="close" href="#streaming">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">5.000:</a>
						<br>
						<span class="harga">Rp 7.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">10.000:</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">15.000:</a>
						<br>
						<span class="harga">Rp 17.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">20.000:</a>
						<br>
						<span class="harga">Rp 22.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">25.000:</a>
						<br>
						<span class="harga">Rp 27.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">30.000:</a>
						<br>
						<span class="harga">Rp 32.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">35.000:</a>
						<br>
						<span class="harga">Rp 37.000</span>
						<br>
						<a class="list__harga" href="harga/pulsa.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end spotify -->

		<!-- start viu -->
		<div class="viu">
			<div class="link">
				<a href="#harga-viu">
					<img src="./images/Internet.png" alt="">
					<div class="judul-produk">Paket Internet</div>
				</a>
			</div>
			<div class="overlay" id="harga-viu">
				<div class="popup">
					<h2>HARGA PAKET <br />INTERNET</h2>
					<a class="close" href="#streaming">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Telkomsel 1,5 GB 3 hari:</a>
						<br>
						<span class="harga">Rp 10.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Telkomsel 2,5 GB 5 hari:</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Telkomsel 4 GB 30 hari:</a>
						<br>
						<span class="harga">Rp 33.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Telkomsel 10 GB 30 hari:</a>
						<br>
						<span class="harga">Rp 62.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Telkomsel 14 GB 30 hari:</a>
						<br>
						<span class="harga">Rp 77.000</span>
						<br>
						<br>

					</div>
				</div>
			</div>
		</div>
		<!-- end viu -->

		<!-- start vidio -->
		<div class="vidio">
			<div class="link">
				<a href="#harga-vidio">
					<img src="./images/e-wallet.png" alt="">
					<div class="judul-produk">E-Wallet</div>
				</a>
			</div>
			<div class="overlay" id="harga-vidio">
				<div class="popup">
					<h2>HARGA E-WALLET</h2>
					<a class="close" href="#streaming">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Shoppe Pay 10.000:</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Shoppe Pay 20.000 :</a>
						<br>
						<span class="harga">Rp 22.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Shoppe Pay 30.000:</a>
						<br>
						<span class="harga">Rp 32.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Shoppe Pay 40.000 :</a>
						<br>
						<span class="harga">Rp 42.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Shoppe Pay 50.000:</a>
						<br>
						<span class="harga">Rp 52.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Dana 10.000 :</a>
						<br>
						<span class="harga">Rp 12.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">Dana 20.000 :</a>
						<br>
						<span class="harga">Rp 22.000</span>
						<br>
						<a class="list__harga" href="harga/e-wallet.html" target="_blank" rel="noopener noreferrer">Cek Harga Lengkap...</a>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end vidio -->

		<!-- start nimo -->
		<div class="nimo">
			<div class="link">
				<a href="#harga-nimo">
					<img src="./images/tagihan.png" alt="">
					<div class="judul-produk">Tagihan</div>
				</a>
			</div>
			<div class="overlay" id="harga-nimo">
				<div class="popup">
					<h2>LIST TAGIHAN</h2>
					<a class="close" href="#streaming">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">BPJS</a>
						<br>
						<span class="harga"></span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">TELKOM</a>
						<br>
						<span class="harga"></span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">GAS</a>
						<br>
						<span class="harga"></span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">PDAM</a>
						<br>
						<span class="harga"></span>
					</div>
				</div>
			</div>
		</div>
		<!-- end nimo -->

		<!-- start viu -->
		<div class="viu">
			<div class="link">
				<a href="#harga-iqiyi">
					<img src="./images/Listrik.png" alt="">
					<div class="judul-produk">Token Listrik</div>
				</a>
			</div>
			<div class="overlay" id="harga-iqiyi">
				<div class="popup">
					<h2>HARGA TOKEN LISTRIK</h2>
					<a class="close" href="#streaming">&times;</a>
					<br>
					<div class="content">
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">20.000:</a>
						<br>
						<span class="harga">Rp 22.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">50.000:</a>
						<br>
						<span class="harga">Rp 52.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">100.000:</a>
						<br>
						<span class="harga">Rp 102.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">200.000:</a>
						<br>
						<span class="harga">Rp.202.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">500.000:</a>
						<br>
						<span class="harga">Rp 502.000</span>
						<br>
						<a href="konfirmasi.php" target="_blank" rel="noopener noreferrer" style="color: #E22F89;">1.000.000:</a>
						<br>
						<span class="harga">Rp 1.002.000</span>
						<br>
						<a class="pesan" href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end viu -->

	</section>
	<!-- end section streaming app -->









	<!-- start tentang -->
	<div id="tentang"></div>
	<section class="tentang">
		<div class="card">
			<h1>TENTANG KAMI</h1>
			<br>
			<p>
				<a href="" class="title">Nexum</a> adalah Website top-up terbaik, tercepat dan terpercaya.

				Setiap harinya, banyak pelanggan yang menggunakan Nexum untuk kebutuhan top-up mereka dengan lancar dan tidak ribet. Mulai dari Game, Voucher, E-Money dan berbagai pilihan yang lainnya !
			</p>
		</div>
	</section>
	<!-- end tentang -->



	<a href="https://wa.me/6281298764873" class="float" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin-top: 12px;">
			<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
		</svg>
	</a>

	<!-- CSS -->
	<style>
		.float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 3px #999;
			z-index: 100;
		}

		.my-float {
			margin-top: 16px;
		}
	</style>

	<footer id="kontak">
		<div class="sosmed">
			<h1>SOSIAL MEDIA</h1>
			<a href="https://www.instagram.com/ilhaam_celuler/" target="_blank" rel="noopener noreferrer"><img style="border-radius: 9999px;" src="./images/ig.png" alt=""></a>
			<a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images//fb.png" alt=""></a>
			<a href="https://twitter.com/i__aamm" target="_blank" rel="noopener noreferrer"><img src="./images/twitter.png" alt=""></a>
			<a href="https://wa.me/6281298764873" target="_blank" rel="noopener noreferrer"><img src="./images/whatsapp1.png" alt=""></a>
		</div>
	</footer>
	<div id="copyright" style="background-color: var(--blue);">
		&copy;Copyright Nexum. All Rights Reserved
	</div>

	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>
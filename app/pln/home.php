<?php
if (!isset($_GET['menu'])) {
	header('location:hal_utama.php?menu=home');
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>HOME</title>
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			font-family: Arial, sans-serif;
		}

		.hero {
			display: flex;
			align-items: center;
			justify-content: space-between;
			height: 100vh;
			background: linear-gradient(90deg, #facc15 60%, white 100%);
			padding: 50px;
			box-sizing: border-box;
			overflow: hidden;
		}

		.hero-text {
			color: #000;
			max-width: 40%;
			z-index: 2;
		}

		.hero-text h1 {
			margin: 10px 0;
			font-size: 3rem;
			font-weight: bold;
			color: #facc15;
		}

		.hero-text p {
			font-size: 1.1rem;
			color: #333;
		}

		.social-icons {
			margin-top: 20px;
		}

		.social-icons i {
			font-size: 24px;
			margin-right: 15px;
			color: #000;
		}

		.hero-image {
			flex: 1;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.hero-image img {
			width: 80%;
			max-width: 400px;
			height: auto;
			object-fit: contain;
		}

		@media (max-width: 768px) {
			.hero {
				flex-direction: column;
				text-align: center;
			}

			.hero-image {
				margin-top: 20px;
			}

			.hero-image img {
				width: 100%;
			}
		}

		.hero-text p {
			font-size: 1.4rem;
			/* atau pakai 24px */
			color: #333;
			line-height: 1.6;
		}

		@media (max-width: 768px) {
			.hero {
				flex-direction: column;
				text-align: center;
				padding: 30px;
			}

			.hero-text {
				max-width: 100%;
			}

			.hero-image {
				width: 100%;
				height: 300px;
				background-position: center;
			}
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
	<div class="hero">
		<div class="hero-text">
			<h1 style="color: black;">SELAMAT DATANG DI WEB</h1>
			<h1 style="color: black;">LISTRIK</h1>
			<p class="hero-desc">
				Sebuah layanan untuk memudahkan anda dalam mengelola data listrik maupun melakukan pembayaran listrik secara online.
			</p>
			<div class="social-icons">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
			</div>
		</div>

		<div class="hero-image">
			<img src="../images/logo_pln1.png" alt="Logo PLN">
		</div>
	</div>
	<script>
		var i = 0;
		var txt = "<?php echo $_SESSION['nama_petugas']; ?>...";
		var speed = 100;

		function typeWriter() {
			if (i < txt.length) {
				document.getElementById("demo").innerHTML += txt.charAt(i);
				i++;
				setTimeout(typeWriter, speed);
			}
		}
		typeWriter()
	</script>
</body>

</html>
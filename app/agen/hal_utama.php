 <?php
	include '../config/koneksi.php';
	include '../library/fungsi.php';

	session_start();
	date_default_timezone_set("Asia/Jakarta");

	$aksi = new oop();
	if (empty($_SESSION['username_agen'])) {
		$aksi->alert("Harap Login Dulu !!!", "index.php");
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['username_agen']);
		unset($_SESSION['id_agen']);
		unset($_SESSION['nama_agen']);
		unset($_SESSION['biaya_admin']);
		unset($_SESSION['akses_agen']);
		$aksi->alert("logout Berhasil !!!", "index.php");
	}

	?>
 <!DOCTYPE html>
 <html>

 <head>
 	<title>PT. SETROOMPAYMENT</title>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<style type="text/css">
 		.navbar-collapse {
 			background-color: #eeeeee;
 		}

 		html,
 		body {
 			min-height: 100vh;
 		}
 	</style>
 </head>

 <body>
 	<div class="container">
 		<div class="">
 			<div class="col-md-12">
 				<div class="navbar navbar-fixed-top navbar-default">
 					<div class="navbar-header">
 						<a href="?menu=home" class="navbar-brand" style="">
 							<span style="background-color:#DB2777;padding:8px;border-radius:5px;color:white">PLN </span> Listrik
 						</a>
 					</div>
 					<div class="navbar-collapse collapse">
 						<ul class="nav navbar-nav">
 							<li class="dropdown">
 								<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="transaksi">
 									<div class="glyphicon glyphicon-shopping-cart"></div>&nbsp;
 									<strong>TRANSAKSI</strong>&nbsp;
 									<span class="caret"></span>
 								</a>
 								<ul class="dropdown-menu" aria-labelledbay="transaksi" style="border-radius:15px; overflow:hidden;">
 									<li>
 										<a href="?menu=riwayat">
 											<strong>RIWAYAT PEMBAYARAN</strong>
 										</a>
 									</li>
 									<li>
 										<a href="?menu=pembayaran">
 											<strong>KELOLA PEMBAYARAN</strong>
 										</a>
 									</li>
 								</ul>
 							</li>

 							<li class="dropdown">
 								<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="laporan">
 									<div class="glyphicon glyphicon-duplicate"></div>&nbsp;
 									<strong>LAPORAN</strong>&nbsp;
 									<span class="caret"></span>
 								</a>
 								<ul class="dropdown-menu" arai-labelledby="laporan" style="border-radius:15px; overflow:hidden;">
 									<li>
 										<a href="?menu=laporan">
 											<strong>RIWAYAT PEMBAYARAN</strong>
 										</a>
 									</li>
 								</ul>
 							</li>
 						</ul>

 						<ul class="nav navbar-nav navbar-right" style="margin-right: 50px;">
 							<li class="dropdown">
 								<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="akun">
 									<div class="glyphicon glyphicon-user"></div>&nbsp;
 									<strong><?php echo $_SESSION['nama_agen']; ?></strong>&nbsp;
 									<span class="caret"></span>
 								</a>
 								<ul class="dropdown-menu" aria-labelledby="akun" style="border-radius:15px; overflow:hidden;">
 									<li>
 										<a href="?menu=profil">
 											<div class="glyphicon glyphicon-cog"></div>&nbsp;
 											<strong>PROFIL</strong>
 										</a>
 									</li>
 									<li>
 										<a href="?logout" onclick="return conf">
 											<div class="glyphicon glyphicon-log-out"></div>&nbsp;&nbsp;
 											<strong>KELUAR</strong>
 										</a>
 									</li>
 								</ul>
 							</li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<?php
		switch (@$_GET['menu']) {
			case 'home':
				include 'home.php';
				break;
			case 'riwayat':
				echo " ";
				include 'riwayat.php';
				break;
			case 'pembayaran':
				echo " ";
				include 'pembayaran.php';
				break;
			case 'laporan':
				echo " ";
				include 'laporan.php';
				break;
			case 'profil':
				echo " ";
				include 'profil.php';
				break;
			// case 'struk':include'struk.php'; break;
			default:
				$aksi->redirect("?menu=home");
				break;
		}
		?>


 	<footer class="container-fluid bg-4 text-center">
 		<p>
 			<strong>Bintang Ariel Septian</strong>
 		</p>
 	</footer>

 	<script type="text/javascript" src="../js/jquery.min.js"></script>
 	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
 	<script type="text/javascript">
 		$("#tbayar").keyup(function() {
 			var totalakhir = parseInt($("#ttotalakhir").val());
 			var bayar = parseInt($("#tbayar").val());
 			var kembalian = 0;
 			if (bayar < totalakhir) {
 				kembalian = "";
 			};
 			if (bayar > totalakhir) {
 				kembalian = bayar - totalakhir;
 			};
 			$("#tkembalian").val(kembalian);
 		});

 		// $("#tjumlah").keyup(function(){
 		//   		var harga = parseInt($("#tharga").val());
 		//   		var jumlah = parseInt($("#tjumlah").val());
 		//   		var total = harga * jumlah;
 		//   		$("#ttotal").val(total);
 		//   })
 	</script>
 </body>

 </html>
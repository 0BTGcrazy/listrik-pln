     <?php
		include '../config/koneksi.php'; //untuk koneksi ke database
		include '../library/fungsi.php'; //untuk memasukan library

		session_start(); //untuk menampung session
		date_default_timezone_set("Asia/Jakarta"); //untuk mengatur zona waktu

		$aksi = new oop(); //untuk memanggil class di library

		//tampung us & pw agar dibaca string bukan syntax
		@$username = ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['username']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		@$password = ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['password']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));

		//jika session username petugas tidak kosong, pindah ke halaman utama
		if (@$_SESSION['username_petugas'] != "") {
			$aksi->redirect("hal_utama.php?menu=home");
		}

		//jika tekan login maka menjalankan fungsi login dari library 
		if (isset($_POST['login'])) {
			$aksi->login("petugas", $username, $password, "hal_utama.php?menu=home");
		}

		?>
     <!DOCTYPE html>
     <html lang="id">

     <head>
     	<meta charset="UTF-8">
     	<title>Login Agen | Listrikin</title>
     	<link rel="stylesheet" href="../css/bootstrap.css">
     	<style>
     		body {
     			margin: 0;
     			padding: 0;
     			background: #f3f4f6;
     			height: 100vh;
     			display: flex;
     			align-items: center;
     			justify-content: center;
     			font-family: 'Segoe UI', sans-serif;
     		}

     		.login-panel {
     			width: 100%;
     			max-width: 450px;
     			background: white;
     			border-radius: 12px;
     			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
     			overflow: hidden;
     		}

     		.panel-heading {
     			background: #facc15;
     			padding: 20px;
     			text-align: center;
     		}

     		.panel-heading .logo {
     			width: 60px;
     			margin-bottom: 10px;
     		}

     		.panel-heading .title-text {
     			font-size: 22px;
     			font-weight: bold;
     			color: #1f2937;
     		}

     		.panel-body {
     			padding: 25px;
     		}

     		.form-group label {
     			font-weight: 600;
     		}

     		.form-control {
     			border-radius: 6px;
     			padding: 12px;
     		}

     		.btn {
     			background: #6366f1;
     			color: white;
     			border: none;
     			border-radius: 6px;
     			padding: 12px;
     			font-weight: bold;
     			transition: background 0.3s;
     		}

     		.btn:hover {
     			background: #4f46e5;
     		}

     		.panel-footer {
     			padding: 15px;
     			text-align: center;
     			background: #f1f5f9;
     			font-weight: bold;
     		}
     	</style>
     </head>

     <body>

     	<div class="login-panel panel panel-default">
     		<!-- Judul -->
     		<div class="panel-heading">
     			<img src="../images/webpln.png" alt="logo" class="logo">
     			<div class="title-text">FORM LOGIN TO PETUGAS</div>
     		</div>

     		<!-- Form Login -->
     		<div class="panel-body">
     			<form method="post">
     				<div class="form-group">
     					<label>USERNAME</label>
     					<input type="text" name="username" class="form-control" placeholder="Masukan username Anda..." required maxlength="30" autocomplete="off">
     				</div>
     				<div class="form-group">
     					<label>PASSWORD</label>
     					<input type="password" name="password" class="form-control" placeholder="Masukan password Anda..." required maxlength="30" autocomplete="off">
     				</div>
     				<div class="form-group">
     					<input type="submit" name="login" class="btn btn-block" value="LOGIN">
     				</div>
     			</form>
     		</div>

     		<div class="panel-footer">
     			© 2025 Listrik - Agen Panel
     		</div>
     	</div>

     </body>

     </html>

     </html>
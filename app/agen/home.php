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
	body{
		position:relative;
	}
.index {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    height: 100vh;
    background:
        radial-gradient(black 1px, transparent 1px),
        linear-gradient(90deg, rgba(51, 42, 42, 1) 0%, rgba(36, 27, 27, 1) 100%);
    background-size: 20px 20px, cover;
    background-position: 100% auto, center;
}

		.image{object-cover:cover;width: 30%; height:30%;user-select:none;pointer-events: none;position:absolute;left:0;bottom:0;}
		.title{font-weight:300;font-size:2rem; color:red;margin:0 auto; width: fit-content;display:flex;flex-direction:column;text-align:center;}
		.title span{
			color:white;
		}
    </style>
</head>
<body>
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				<marquee><h3>Selamat Datang , di Aplikasi Pembayaran Listrik Pasca Bayar v.1.0</h3></marquee>
				<center><img src="../images/logo_pln2.png" width="90%"></center>
			</div>
		</div>
	</div> -->
	<div class="index">
		<h1 class="title">Welcome to Dashboard, <span id='demo'></span></h1>
	</div>
	<script>
		var i = 0;
var txt = "<?php echo $_SESSION['nama_agen']; ?>...";
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
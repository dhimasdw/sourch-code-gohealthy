<!doctype html>
<?php
if(isset($_COOKIE['userlogin']) && $_COOKIE['userlogin'] == 'login'){
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="Dhimas">
	<link rel="icon" href="favicon.ico">

	<title>Beli Obat</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style>
		html{
			position: relative;
			min-height: 100%
		}
		body{
			margin-bottom: 60px;
		}
		.footer{
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			background-color: #f5f5f5;
		}
		body > .container{
			padding: 60px 15px 0;
		}
		.container .text-muted{
			margin: 20px 0;
		}
		.footer > .container{
			padding-right: 15px;
			padding-left: 15px;
		}
		code{
			font-size: 80%;
		}
		.pull-right {
		     float: right;
  		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">

			<div class="navbar-header">
				<!--Membuat menu responsive -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="menu.php">GO HEALTH</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">

					<li class="active" ><a href="menu.php">Home</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Penyakit <span class="caret"></span></a>

						<ul class="dropdown-menu">
							<li><a href="penyakitkepala.php">Penyakit Kepala</a></li>
							<li><a href="penyakitbadan.php">Penyakit Badan</a></li>
							<li><a href="penyakitumum.php">Penyakit Umum</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Obat <span class="caret"></span></a>

						<ul class="dropdown-menu">
							<li><a href="obatkepala.php">Obat Kepala</a></li>
							<li><a href="obatbadan.php">Obat Badan</a></li>
							<li><a href="obatumum.php">Obat Umum</a></li>
						</ul>
					</li>

					<li class="nav navbar-nav"><a href="penjualobat.php">Beli Obat</a>
						
					</li>

				</ul>

				<ul class="nav navbar-nav pull-right">
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="login.php">Login</a></li>
 				</ul>

			</div><!--nav-collapse -->

		</div>
	</nav>

	<div class="container">
		<form action="" method="POST">
		<div>
			<label>Pilih Obat </label>
			<select name="obat">
				<?php 
					include "koneksi.php";
					$result = $db->query('select * from tabel_obat');
					while ($row = $result->fetch()) {
						?><option value="
						<?php echo "$row[1]"; ?>">
						<?php echo "$row[1] </option>";
					}
				?>
			</select>
			<input type="submit" name="enter" value="Enter">
		</div>
	</form>

	<div>
			<label>Nama Obat : </label>
			<input type="text" placeholder="nama obat" id="naobat" name="namaobat" disabled="true">
		</div>
		<div>
			<label>Harga Obat : </label>
			<input type="text" placeholder="harga obat" name="hargaobat" disabled="true">
		</div>
		<div>
			<label>Jenis Obat : </label>
			<input type="text" placeholder="jenis obat" name="jenisobat" disabled="true">
		</div>
	</div>
	
		
		<?php   
			if(isset($_POST['enter'])) {   
				if(empty($_POST['obat'])) {  
		 			echo "Anda belum memilih!";  
		  		}  else {
		  			$stmt = $db->prepare("select * from tabel_obat where nama_obat = '".$_POST['obat']."'");
					$stmt->execute();
					while ($cow = $stmt->fetch(PDO::FETCH_ASSOC)) {
						echo $cow['jenis_obat'];
					}
		  		}  
	  		}   
		?>
</body>
</html>
<?php 
} else {
	header("location:login.php");
}
?>
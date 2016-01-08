<?php
if(isset($_COOKIE['userloginmember']) && $_COOKIE['userloginmember'] == 'loginmember'){
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

	<title>Obat Badan</title>

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
				<a class="navbar-brand" href="index.php">GO HEALTH</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">

							<li ><a href="obatkepala.php">Obat Kepala</a></li>
							<li ><a href="obatbadan.php">Obat Badan</a></li>
							<li ><a href="obatumum.php">Obat Umum</li>
							
			

				</ul>

				<ul class="nav navbar-nav pull-right">
					
					<li><a href="logout.php">Logout</a></li>
 				</ul>

			</div><!--nav-collapse -->

		</div>
	</nav>

	<!-- Content -->
	<div class="container">
		<div class="page-header">
			<h1>Obat Untuk Badan
			</h1>
		</div>
		<table class="table table-bordered striped">
			<?php 
			include "koneksi.php";
			$res = $db->query("select * from tabel_obat");
			echo '
			 	<tr class="info">
			 		<td>Kode Obat</td>
			 		<td>Nama Obat</td>
			 		<td>Jenis Obat</td>
			 		<td>Pilih Obat</td>
			 	</tr>';
			while ($data = $res->fetch()) {
				echo '<tr>
					<td>'.$data['id_obat'].'</td>
					<td>'.$data['nama_obat'].'</td>
					<td>'.$data['jenis_obat'].'</td>
					<td>'.$data['pilih_obat'].'</td>
				</tr>';	
			}
		?>
			
		
			</table>
	</div>
		
	<footer class="footer">
		<div class="container">
			<p class="text-muted">GO HEALTH </p>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
} else {
    header("location:loginmember.php");
}
?>
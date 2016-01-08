
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

	<title>Menu</title>

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

	<!-- Content -->
	<div class="container">
		<div class="page-header">
			<h1>Hidup Sehat dengan Go-Healthy
				<a href="registrasi.php" class="btn btn-lg btn-danger  pull-right">Registrasi</a>
			</h1>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-primary">
		    		<div class="panel-heading">
		    			<h3 class="panel-title">Judul berita 1</h3>
		    		</div>
		    		<div class="panel-body">
		    			berita terbaru 1
		    		</div>
		  		</div>
		  		<div class="panel panel-primary">
		  			<div class="panel-heading">
		  				<h3 class="panel-title">Judul berita 2</h3>
		  			</div>
		  			<div class="panel-body">
		  				berita terbaru 2
		  			</div>
		  		</div>
		  	</div>
		  	<div class="col-sm-6">
				<div class="panel panel-primary">
		    		<div class="panel-heading">
		    			<h3 class="panel-title">Judul berita 3</h3>
		    		</div>
		    		<div class="panel-body">
		    			berita terbaru 3
		    		</div>
		  		</div>
		  		<div class="panel panel-primary">
		  			<div class="panel-heading">
		  				<h3 class="panel-title">Judul berita 4</h3>
		  			</div>
		  			<div class="panel-body">
		  				berita terbaru 4
		  			</div>
		  		</div>
		  	</div>
		  		
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
    header("location:login.php");
}
?>
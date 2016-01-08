<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="kuncoro">
  <link rel="icon" href="favicon.ico">
  <title>Admin | Dashboard</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="css/_all-skins.min.css">
  
  <link rel="stylesheet" href="css/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
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
				<a class="navbar-brand" >GO HEALTH</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">

				<ul class="nav navbar-nav pull-right">
					<li><a href="logout.php">Logout</a></li>
 				</ul>

			</div><!--nav-collapse -->

		</div>
	</nav>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><h4>UPDATE</h4></li>
        <li class=" active treeview">
          <a href="halamanadmin.php">
            <i class="fa fa-dashboard"></i> <span>Informasi</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Update</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="adminpenyakit.php"><i class="fa fa-circle-o"></i> Penyakit</a></li>
            <li><a href="adminobat.php"><i class="fa fa-circle-o"></i> Obat</a></li>
          </ul>
        </li>
        </li>
        <li class="treeview">
          <a href="adminpenjualan.php">
            <i class="fa fa-table"></i> <span>Penjualan</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li class="treeview">
          <a href="adminmember.php">
            <i class="fa fa-laptop"></i>
            <span>Member</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>informasi</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Laporan Bulanan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Penjualan: 1 Jan, 2015 - 30 Jul, 2015</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">Rp. 35,210.43</h5>
                    <span class="description-text">Jumlah Pendapatan</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">Rp. 10,390.90</h5>
                    <span class="description-text">Jumlah Pengeluaran</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">Rp. 24,813.53</h5>
                    <span class="description-text">Jumlah Keuntungan</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>ADMIN</b>
    </div>
    <strong>GO HEALTH</a>.</strong>
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/informasi.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery-2.1.4.min.js"></script>
  <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/app.min.js"></script>
  <script src="js/demo.js"></script>
</body>
</html>
<?php
} else {
    header("location:loginadmin.php");
}
?>
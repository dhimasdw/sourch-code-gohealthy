<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<!DOCTYPE html>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="kuncoro">
  <link rel="icon" href="favicon.ico">
  <title>Adminpenyakit | Dashboard</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="css/_all-skins.min.css">
  
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
        <li class="treeview">
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
            <li class=" active treeview"><a href="adminpenyakit.php"><i class="fa fa-circle-o"></i> Penyakit</a></li>
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
        PENYAKIT
        <small>Daftar</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
         <div class="col-xs-12">
              <?php include "updatepenyakit.php";?>
        </div>
      </section>
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery-2.1.4.min.js"></script>
  <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="js/app.min.js"></script>
  <script src="js/demo.js"></script>
</body>
</html>
<?php
} else {
    header("location:loginadmin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekomendasi Pemilihan Jurusan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('template/lte/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('template/lte/dist/css/skins/_all-skins.min.css')?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/morris.js/morris.css')?>">
  <!-- jvectormap -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('template/lte/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('template/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">


<script src="<?= base_url('template/lte/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('template/lte/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <link rel="shortcut icon" href="<?= base_url('assets/img/smk.png') ?>">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Rekomendasi</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('assets/img/smk.png')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ucwords($admin->nama_admin) ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('assets/img/smk.png')?>" class="img-circle" alt="User Image">

                <p>
                  <?= ucwords($admin->nama_admin) ?> - Admin
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
  <!--               <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('admin/pengaturan') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('admin/keluar') ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/img/smk.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($admin->nama_admin) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- ######################################################### -->
        <li>
          <a href="<?= base_url('admin/datajurusan')?>">
            <i class="fa fa-users"></i> <span>Data Jurusan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Kriteria </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/datakriteria') ?>"><i class="fa fa-circle-o"></i>Kriteria</a></li>
            <li><a href="<?= base_url('admin/datasubkriteria') ?>"><i class="fa fa-circle-o"></i>Sub Kriteria</a></li>
            <li><a href="<?= base_url('admin/databobotkriteria') ?>"><i class="fa fa-circle-o"></i>Bobot Kriteria Per Jurusan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Perhitungan </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/perhitungan') ?>"><i class="fa fa-circle-o"></i>Perhitungan</a></li>
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i>Perhitungan WP</a></li> -->
            <li><a href="<?= base_url('admin/rekomendasi') ?>"><i class="fa fa-circle-o"></i>Rekomendasi</a></li>
          </ul>
        </li>

        <!-- ######################################################### -->
        <li class="header">PENGATURAN</li>
          <!-- <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Ganti Password</span></a></li> -->
          <li><a href="<?= base_url('admin/logout') ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Keluar</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
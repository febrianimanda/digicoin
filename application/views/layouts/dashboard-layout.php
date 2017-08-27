<?php
  if($this->session->userdata('loggedIn') === false) {
    $this->session->set_flashdata('status', 'danger');
    $this->session->set_flashdata('message', 'Session anda sudah habis, harap login kembali');
    redirect('auth');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?= $title ?> | Digicoin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= css_url('bootstrap.min') ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= css_url('font-awesome.min') ?>" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= css_url('ionicons.min') ?>" />
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= libraries_url('jvectormap/jquery-jvectormap-1.2.2.css') ?>" />
  <!-- Datetimepicker -->
  <link rel="stylesheet" href="<?= css_url('bootstrap-datetimepicker.min') ?>" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= css_url('AdminLTE') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= css_url('skins/_all-skins.min') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 2.2.3 -->
  <script src="<?= libraries_url('jQuery/jquery-2.2.3.min.js') ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?= site_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>coin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Digicoin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= img_url('user2-160x160.jpg') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('customerName') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= img_url('user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                <p>
                  Febrian Imanda - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
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
          <img src="<?= img_url('user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('customerName') ?></p>
          <p>
            <strong>Saldo</strong> Rp.
            <?php if(isset($balance)): ?>
              <?= $balance ?>
            <?php else: ?>
              0
            <?php endif; ?>
          </p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?= site_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('checkup') ?>">
            <i class="fa fa-stethoscope"></i> <span>Financial Checkups</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('planning') ?>">
            <i class="fa fa-calculator"></i> <span>Financial Planning</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Purchase</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('transaction/income') ?>"><i class="fa fa-circle-o"></i><span>Income</span></a></li>
            <li><a href="<?= site_url('transaction/expense') ?>"><i class="fa fa-circle-o"></i><span>Expense</span></a></li>
            <li><a href="<?= site_url('transaction/transfer') ?>"><i class="fa fa-circle-o"></i><span>Transfer</span></a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-line-chart"></i><span>Statistic</span></a></li>
        <li><a href="<?= site_url('topup') ?>"><i class="fa fa-get-pocket"></i><span>Top Up</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <?php if(isset($subtitle)): ?>
          <small><?= $subtitle ?></small>
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <?php if($title != 'Dashboard'): ?>
          <li class="active"><?= $title ?></li>
        <?php endif; ?>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?= $content ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Finhacks</b> 2017
    </div>
    <strong>Digicoin.</strong> <strong>Febrian</strong> Imanda - <strong>Kukuh</strong> Budi - <strong>Fahmi</strong> Alfiansyah
  </footer>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?= js_url('bootstrap.min') ?>"></script>
<!-- FastClick -->
<script src="<?= libraries_url('fastclick/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= js_url('app') ?>"></script>
<!-- Sparkline -->
<script src="<?= libraries_url('sparkline/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?= libraries_url('jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?= libraries_url('jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= libraries_url('slimScroll/jquery.slimscroll.min.js') ?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?= libraries_url('chartjs/Chart.min.js') ?>"></script>
<!-- MomentJs -->
<script src="<?= js_url('moment') ?>"></script>
<!-- Datetimepicker -->
<script src="<?= js_url('bootstrap-datetimepicker') ?>"></script>
</body>
</html>
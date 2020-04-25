<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMK WIKRAMA EKIENERJA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=$this->Url->build('/');?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=$this->Url->build('/');?>" class="brand-link">
      <span class="brand-text font-weight-light">EKINERJA</span> PESERTA DIDIK
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$this->Url->build('/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=$this->Url->build('/');?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Administrator
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Students','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Peserta Didik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'GuruPembimbing','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Guru Pembimbing
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'GuruPenanggungJawab','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Guru Penanggung <br> Jawab
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Parents','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Orang Tua
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Subjects','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Pelajaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'SubjectsDetails','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Uraian Tugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Schedules','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Schedule
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'SchedulesDetails','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Schedule details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$this->Url->build(['controller'=>'Activities','action'=>'index']);?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Activity
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=$this->Url->build('/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=$this->Url->build('/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=$this->Url->build('/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=$this->Url->build('/');?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=$this->Url->build('/');?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=$this->Url->build('/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=$this->Url->build('/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=$this->Url->build('/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=$this->Url->build('/');?>plugins/moment/moment.min.js"></script>
<script src="<?=$this->Url->build('/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=$this->Url->build('/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=$this->Url->build('/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=$this->Url->build('/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$this->Url->build('/');?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=$this->Url->build('/');?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$this->Url->build('/');?>dist/js/demo.js"></script>
</body>
</html>

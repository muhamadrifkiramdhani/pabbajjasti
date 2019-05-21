<!DOCTYPE html> 
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Daftar</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet"href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>sweetalert2/package/dist/sweetalert2.css">
  <!-- data table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>DataTables2/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>DataTables2/datatables/css/select.dataTables.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
                          <body class="hold-transition skin-blue sidebar-mini">
                          <div class="wrapper">
                           <header class="main-header">
                              <a href="#" class="logo">
                                <span class="logo-mini"><b>E</b>DAF</span>
                                <span class="logo-lg"><b>E-</b>Daftar</span>
                              </a>
                              <nav class="navbar navbar-static-top">
                                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                  <span class="sr-only">Toggle navigation</span>
                                </a>
                                <div class="navbar-custom-menu">
                                  <ul class="nav navbar-nav">
                                    <li class="dropdown messages-menu">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="label label-success"><?php $query = $this->db->query('select email from tb_fomulir'); echo $query->num_rows();?></span>
                                      </a>
                                      <ul class="dropdown-menu">
                                      <li class="header">Kamu Memiliki pesan</li>
                                      <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                          <li>
                                          <!-- start message -->
                                            <a href="#">
                                              <div class="pull-left">
                                                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                              </div>
                                              <h4>
                                                Pedaftar Baru
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                              </h4>
                                              <p>Pesan masuk</p>
                                            </a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li class="footer"><a href="#">Lihat Semua Pesan</a></li>
                                        </ul>
                                      </li>
                                    <!-- Notifications: style can be found in dropdown.less -->
                                    <li class="dropdown notifications-menu">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="label label-warning"><?php $query = $this->db->query('select * from tb_fomulir'); echo $query->num_rows();?></span>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li class="header">You have notifications</li>
                                        <li>
                                          <!-- inner menu: contains the actual data -->
                                          <ul class="menu">
                                            <li>
                                              <a href="#">
                                                <i class="fa fa-users text-aqua"></i> <?php $query = $this->db->query('select * from tb_fomulir'); echo $query->num_rows();?> peserta yang mendaftar hari ini
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> 
                                                masalah pendaftaran 
                                              </a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class="footer"><a href="#">Lihat Semua</a></li>
                                          </ul>
                                          <li class="dropdown user user-menu">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                            <span class="hidden-xs">ADMIN</span>
                                          </a>
                                          <ul class="dropdown-menu">
                                            <li class="user-header">
                                              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                              <p>
                                                Admin
                                                <small>Admin PABBAJJASTI SAMANERA</small>
                                              </p>
                                            </li>
                                            <!-- Menu Footer-->
                                            <li class="user-footer">
                                              <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                              </div>
                                              <div class="pull-right">
                                                <a href="<?php echo base_url('stilogin/logout');?> " class="btn btn-default btn-flat"">Logout</a>
                                              </div>
                                            </li>
                                          </ul>
                                        </li>
                                    </ul>
                                  </div>
                                </nav>
                              </header>
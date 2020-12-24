<?php
$nama = $this->session->userdata("nama");
$tipe = $this->session->userdata("tipeuser");
// var_dump($this->session->userdata);exit;
if (is_null($nama))
{
	redirect(base_url('login/salah'));
}
else
{
  ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SPPD | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url().'plugins/fontawesome-free/css/all.min.css'?>">
  <!-- <link rel="stylesheet" href="<?php //'cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'?>"> -->
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url().'plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/adminlte.min.css'?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>

  <!-- Left navbar links -->
    <h2 >SISTEM INFORMASI SPPD </h2>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/sppd/main" class="brand-link">
      <img src="<?php echo base_url().'dist/img/hss.png'?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SPPD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
          <!-- profil -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-square text-warning"></i>
              <p>
                <?php echo $nama ?>
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?php echo base_url();?>login/logout" class="dropdown-item">
									<i class="fas fa-circle nav-icon text-danger"></i>Log Out
								</a>
              </li>
            </ul>
          </li>
        </ul>
          <!-- end profil -->





      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




          <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->

          <!-- start pegawai -->
          <?php if ($tipe==0){   //rule
                ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                Pegawai
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="/sppd/pgw_rincian/addpegawai" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input Pegawai</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/sppd/pgw_rincian/listpegawai" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List Pegawai</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
         <!-- end pegawai  -->
           <!-- start spt -->
           <?php if ($tipe!=1 || $tipe!=2){ //rule
                ?>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                USULAN
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($tipe==0 || $tipe==4){ //rule
                ?>
              <li class="nav-item">
                <a href="/sppd/usulan/addusul" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input Usulan</p>
                </a>
              </li>
            <?php } ?>
              <li class="nav-item">
                <a href="/sppd/usulan/listusul" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List Usulan</p>
                </a>
              </li>
							<?php if ($tipe==0 || $tipe==2 || $tipe==3){ //rule
                ?>
              <li class="nav-item">
                <a href="/sppd/usulan/listusulpending" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List Usulan PENDING!</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <?php }
                ?>
        <!-- end spt -->
          <!-- start spt -->
          <?php if ($tipe==0 || $tipe==2 || $tipe==3){ //rule
                ?>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                SPT
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($tipe==0 || $tipe==2 ){ //rule
                ?>
              <li class="nav-item">
                <a href="/sppd/spt_rincian/addspt" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input SPT</p>
                </a>
              </li>
            <?php } ?>

              <li class="nav-item">
                <a href="/sppd/spt_rincian/listspt" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List SPT</p>
                </a>
              </li>
							<!-- <li class="nav-item">
								<a href="/sppd/Spt_rincian/listsptpending" class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i>
									<p>List SPT PENDING!</p>
								</a>
							</li> -->
            </ul>
          </li>
          <?php } ?>
        <!-- end spt -->
         <!-- start sppd -->
         <?php if ($tipe==0 || $tipe==2 || $tipe==3){ //rule
                ?>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                SPPD
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($tipe==0 || $tipe==2){ //rule
                ?>

              <li class="nav-item">
                <a href="/sppd/sppd/inpsppd" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input  SPPD</p>
                </a>
              </li>
            <?php } ?>

              <li class="nav-item">
                <a href="/sppd/sppd/listsppd" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List SPPD</p>
                </a>
              </li>
            </ul>
          </li>
         <?php }
                ?>
        <!-- end sppd -->

        <!-- start rincian biaya -->
        <?php if ($tipe==0 || $tipe==1 || $tipe==3 ){ //rule
                ?>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                Rincian Biaya
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($tipe==0 || $tipe==1 ){ //rule
                ?>
              <li class="nav-item">
                <a href="/sppd/rincian/addrincian" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input Rincian Biaya</p>
                </a>
              </li>
            <?php } ?>

              <li class="nav-item">
                <a href="/sppd/rincian/listrinci" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List Rincian Biaya</p>
                </a>
              </li>
            </ul>
          </li>
        <?php }
                ?>
        <!-- end sppd -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h2 class="m-0 text-dark"></h2> -->
            <h3 class="m-0 text-dark">BADAN KEPEGAWAIAN DAERAH</h3>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2 - |</li>
						<ol class="breadcrumb">
					  <li><a href="#"><i class="fa fa-calendar"></i><?php include"application/jam/jam.php" ?></a> , </li>
					<li class="active"><?php include "application/jam/tanggal.php" ?></li>
				</ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php } ?>

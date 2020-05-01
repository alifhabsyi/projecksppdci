
<?php
$tipe = $this->session->userdata("tipeuser");
$nama = $this->session->userdata("nama");
if (is_null($nama))
{
	redirect(base_url('login/salah'));
}
?>
<div class=container align=center>
		<div class="card-body">
		<div class="table table-responsive">
			<table id="example1" class="table table-bordered table-striped">
<div id="wrapper">
	<div id="content-wrapper">
	<div class="container-fluid">

<!-- Icon Cards-->
		<div class="row">
			<div class="col-xl-12 col-sm-15 mb-15">

			<div class="card text-white bg-dark o-hidden h-100">
							<div class="mr-6">DATA USER </div>
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-user"></i>
				</div>
				<div class="mr-6">TOTAL <b><?php echo $total_pegawai ?></b>  Data Pegawai!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="Pgw_rincian/listpegawai">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">

			<div class="card text-white bg-primary o-hidden h-100">
				<div class="mr-6">DATA USULAN </div>
	<div class="card-body">
	<div class="card-body-icon">
		<i class="fas fa-fw fa-user"></i>
	</div>
	<div class="mr-6">TOTAL <b><?php echo $total_usul?></b> Data Usulan!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="Usulan/listusul">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="mr-6">DATA SPT </div>
			<div class="card-body">
			<div class="card-body-icon">
			<i class="fas fa-fw fa-user"></i>
			</div>
			<div class="mr-6">TOTAL <b><?php echo $total_spt?></b> Data SPT! </div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="Spt_rincian/listspt">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
				<div class="mr-6">DATA RINCIAN BIAYA </div>
			<div class="card-body">
			<div class="card-body-icon">
			<i class="fas fa-fw fa-user"></i>
			</div>
			<div class="mr-6">TOTAL <b><?php echo $total_kwitansi?></b> Data Kwintasi! </div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="Rincian/listrincian">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="mr-6">DATA SPPD </div>
			<div class="card-body">
			<div class="card-body-icon">
			<i class="fas fa-fw fa-user"></i>
			</div>
			<div class="mr-6">TOTAL <b><?php echo $total_sppd?></b> Data SPPD!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="Sppd/listsppd">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
		</div>

		</div>
	</table>
			</div>
					</div>
							</div>
									</div>
											</div>

		<!-- /.container-fluid -->

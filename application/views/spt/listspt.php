<?php
$nama = $this->session->userdata("nama");
$tipe = $this->session->userdata("tipeuser");
if (is_null($nama))
{
	redirect(base_url('login/salah'));
}
else
{
	?>
<!-- <link rel="stylesheet" href="<?php //echo '//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'?>"> -->
  
<div class="card-header" align="center">
		<b>
			<h2>List Pegawai Hulu Sungai Selatan</h2>
		</b>

	</div>
	<!-- /.card-header -->

	<div class=container align="center">
		<div class="card-body">
		<div class="table table-responsive">
		<table id="example1" class="table table-bordered table-striped">
					<a class='fa fa-print' href='exportspt' target='_blank' onClick='window.location.reload();' style='color:red'>Cetak Laporan</a>
				<thead>
					<tr>
						<th width='20%'>No. SPT</th>
                        <th width='20%'>NIP</th>
												<th width='10%'>Nama</th>
												<th width='5%'>Jabatan</th>
												<th width='10%'>dasar</th>
                       							<th width='40%'>tujuan</th>
												<th width='5%'>Tanggal</th>
												<th width='5%'>Tempat</th>
														
														
					</tr>
				</thead>
				<tbody>
					<?php
				foreach($spt as $a):
					$tgl=date("d M Y", strtotime($a->tanggal));
                echo "
                <tr>
					<td>
						<a class='fa fa-edit' href='";base_url();echo"addspt?n=$a->no_suratm' style='color:blue'>$a->no_spt</a>
					";
					if ($tipe==0 || $tipe==2 || $tipe==3 ){
						echo "<a class='fa fa-print' href='";base_url();echo"../spt_rincian/printsptstaf?n=$a->no_spt&ns=$a->nip' target='_blank' onClick='window.location.reload();' style='color:Green'>Print</a>";
						if ($tipe==0 || $tipe==3 ){
						echo "<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../spt_rincian/dlt_spt?n=$a->id_spt' style='color:red'></a>";
						}
					} 
					echo"
					</td>
                    <td>$a->nip </td>
										<td>$a->nama </td>
										<td>$a->jabatan </td>
										<td>$a->dasar </td>
                    <td>$a->tujuan_untuk </td>
                    <td>$tgl </td>
                    <td>$a->tempat </td>
										 
										
                   
                </tr>
                ";

            endforeach;
            ?>
                </tfoot>
        </table>
        </div>
</div>
<!-- /.card-body -->
<!-- Main Footer -->
</div>

<!-- // <script src="<?php //'//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'?>"> -->
<script>
	function checkDelete(){
		return confirm('Are you sure?');
	}
</script>
<?php }?>

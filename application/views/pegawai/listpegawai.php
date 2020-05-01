<?php
$nama = $this->session->userdata("nama");
if (is_null($nama))
{
	redirect(base_url('login/salah'));
}
else
{
?>
<div class="card-header" align=center>
		<b>
			<h2>List Pegawai Hulu Sungai Selatan</h2>
		</b>

	</div>
	<!-- /.card-header -->

	<div class=container align=center>
		<div class="card-body">
		<div class="table table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>NAMA PEJABAT</th>
						<th>NIP</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
												<th>JENIS KELAMIN</th>
												<th>PANGKAT</th>
												<th>GOL / RUANG</th>
												<th>TMT PANGKAT</th>
												<th>JABATAN</th>

												<th>TMT JABATAN</th>
													<th>ESELON</th>
												<th>MASA KERJA (TAHUN)</th>
												<th>MASA KERJA (BULAN)</th>
												<th>PENDIDIKAN</th>
														<th>DIKLAT</th>
																<th>SK CPNS</th>
													<th>TMT BERKALA</th>
														<th>TMT PENSIUN</th>
															<th>UNIT KERJA</th>
												<th>USERNAME</th>
												<th>PASSWORD</th>
															<th>TIPE USER</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
                foreach($pgw as $a):
                echo "
                <tr>
                    <td>
										$a->nama </td>
					<td>
						<a >$a->nip_admin
						</a>
					</td>
						<td>$a->tempat_lahir</td>
				 		<td>$a->tgl_lahir</td>
				 		<td>$a->kelamin</td>
					<td>$a->pangkat</td>
				 		<td>$a->golongan</td>
				 		<td>$a->tmt_pangkat</td>
				 		<td>$a->jabatan_admin</td>
				 		<td>$a->tmt_jabatan</td>
				 		<td>$a->eselon</td>
				 		<td>$a->masakerja_thn</td>
						<td>$a->masakerja_bln</td>
				 		<td>$a->pendidikan</td>
				 		<td>$a->diklat</td>
						<td>$a->sk_cpns</td>
						<td>$a->tmt_berkala</td>
						<td>$a->tmt_pensiun</td>
				 		<td>$a->unit_kerja</td>
                    <td>$a->username</td>
                    <td>$a->password</td>
										<td>$a->tipeuser</td>
                    <td align=left>";

                echo"<a class='fa fa-edit' href='";base_url();echo"addpegawai?n=$a->nip_admin' style='color:blue'></a>
						<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../Pgw_rincian/dlt_pgw?n=$a->nip_admin' style='color:red'></a>
						<a class='fa fa-print' href='";base_url();echo"cetakadm?ns=$a->nip_admin' target='_blank' onClick='window.location.reload();' style='color:red'>Finish</a>";
                    echo"</td>
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


<script>
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
		});
	});
	function checkDelete(){
		return confirm('Are you sure?');
	}

</script>
<?php  } ?>

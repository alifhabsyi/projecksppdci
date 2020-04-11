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
						<th>No. SPT</th>
                        <th>NIP</th>
												<th>Nama</th>
												<th>Jabatan</th>
												<th>pangkat</th>
												<th>dasar</th>
                        <th>tujuan</th>
												<th>Tanggal</th>
												<th>Tempat</th>
														<th>Di Buat Oleh</th>
														<th>NIP Admin</th>
														<th>Jabatan Admin</th>
																<th>Di Buat Tanggal</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
                foreach($spt as $a):
                echo "
                <tr>
					<td>
						<a >$a->no_spt
						</a>
					</td>
                    <td>$a->nip </td>
										<td>$a->nama </td>
										<td>$a->jabatan </td>
										<td>$a->pangkat </td>
										<td>$a->dasar </td>
                    <td>$a->tujuan_untuk </td>
                    <td>$a->tanggal </td>
                    <td>$a->tempat </td>
										  <td>$a->dibuat_oleh </td>
											<td>$a->jabatan_admin </td>
											<td>$a->nip_admin </td>
											  <td>$a->dibuat_tgl  </td>
                    <td align=left>";

                echo"
                        <a class='fa fa-edit' href='";base_url();echo"addspt?n=$a->id_spt' style='color:blue'></a>
						<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../spt_rincian/dlt_spt?n=$a->id_spt' style='color:red'></a>
						<a class='fa fa-print' href='";base_url();echo"../spt_rincian/cetakspt?n=$a->id_spt' target='_blank' onClick='window.location.reload();' style='color:red'>Finish</a>";
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
<?php } ?>
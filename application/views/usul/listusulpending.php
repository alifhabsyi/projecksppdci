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
<div class="card-header" align=center>
		<b>
			<h2>List USULAN Pending</h2>
		</b>

	</div>
	<!-- /.card-header -->

	<div class=container align=center>
		<div class="card-body">
		<div class="table table-responsive">
		<table id="example1" class="table table-bordered table-striped">
					<a class='fa fa-print' href='exportusulanpending' target='_blank' onClick='window.location.reload();' style='color:red'>Cetak Data Usulan Pending</a>
				<thead>
					<tr>
						<th>No Surat Masuk</th>
  					<th>Dasar</th>
            <th>Nama</th>
						<th>NIP</th>
						<th>Pangkat</th>
						<th>Jabatan</th>
						<th>Tanggal Pergi</th>
						<th>Tanggal Pulang</th>
						<th>Tempat Tujuan</th>
									<th>Tujuan Untuk</th>
											<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
                foreach($usul as $a):
                echo "
                <tr>

					<td>
						<a >$a->no_suratm
						</a>
					</td>
                    <td>$a->dasar</td>
                    <td>$a->nama</td>
										<td>$a->nip</td>
										<td>$a->pangkat</td>
										<td>$a->jabatan</td>
										<td>$a->tgl_pergi</td>
										<td>$a->tgl_pulang</td>
                    <td>$a->tempat_tujuan</td>
                    <td>$a->tujuan_untuk</td>
										  <td>$a->status_spt</td>
                    <td align=center>";

					echo"
					<a class='fa fa-edit' href='";base_url();echo"addusul?n=$a->id_usul' style='color:blue'></a>";
			if ($tipe==0 || $tipe==2 || $tipe==3 ){   //rule
				echo"<a class='fa fa-print' href='";base_url();echo"cetakadm?ns=$a->id_usul' target='_blank' onClick='window.location.reload();' style='color:red'></a>";
				if ($tipe==0 || $tipe==3 ){   //rule
			
					echo"
					<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../usulan/dlt_usul?n=$a->id_usul' style='color:red'></a>";
				}
				};
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

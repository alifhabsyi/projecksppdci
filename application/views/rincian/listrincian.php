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
			<h2>List Rincian Kwitansi SPD</h2>
		</b>
		
	</div>
	<!-- /.card-header -->
	
	<div class=container align=center>
		<div class="card-body">
		<div class="table table-responsive">	
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No KWT</th>
						<th>No SPPD</th>
                        <th>Kegiatan</th>
                        <th>Program</th>
						<th>NIP</th>
						<th>NAMA</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                foreach($kwt as $a):
                echo "
                <tr>
                    <td align=center>$a->no_kwt </td>
					<td>
						<a >$a->no_sppd
						</a>
					</td>
                    <td>$a->kegiatan</td>
                    <td>$a->program</td>
                    <td>$a->nip</td>
                    <td>$a->nama</td>
                    <td align=center>";
                    
                echo"
                        <a class='fa fa-edit' href='";base_url();echo"addrincian?n=$a->no_kwt' style='color:blue'></a>
						<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../rincian/dlt_rinci?n=$a->no_kwt' style='color:red'></a>
						<a class='fa fa-print' href='";base_url();echo"cetakadm?ns=$a->id_rinci' target='_blank' onClick='window.location.reload();' style='color:red'>Finish</a>";
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
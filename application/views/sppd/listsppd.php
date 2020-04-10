<div class="card-header" align=center>
		<b>
			<h2>List SPPD</h2>
		</b>
		
	</div>
	<!-- /.card-header -->
	
	<div class=container align=center>
		<div class="card-body">
		<div class="table table-responsive">	
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No SPT</th>
						<th>No SPPD</th>
                        <th>KEGIATAN/TUJUAN</th>
                        <th>NIP</th>
						<th>NAMA</th>
						<th>TANGGAL </th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                foreach($sppd as $a):
                echo "
                <tr>
                    <td align=center>$a->no_spt </td>
					<td>$a->no_sppd</td>
                    <td><a>$a->tujuan_untuk</a></td>
                    <td>$a->nip</td>
                    <td>$a->nama</td>
                    <td><input type=date class='form-control' value=$a->tgl_pergi readonly>  <input type=date class='form-control' readonly value=$a->tgl_pulang></td>
                    <td align=center>";
                    
                echo"
                        <a class='fa fa-edit' href='";base_url();echo"inpsppd?n=$a->no_sppd' style='color:blue'></a>
						<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../sppd/dlt_sppd?n=$a->no_sppd' style='color:red'></a>
						<a class='fa fa-print' href='";base_url();echo"cetakadm?ns=$a->no_sppd' target='_blank' onClick='window.location.reload();' style='color:red'>Finish</a>";
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

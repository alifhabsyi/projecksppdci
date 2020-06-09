<?php
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-Usulan.xls");
?>
		<b>
			<h2>List SPT BKN Hulu Sungai Selatan</h2>
		</b>
			<table border ="2">
				<thead>
					<tr>
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
	                </tr>
	                ";

	            endforeach;
	            ?>
                </tfoot>
        </table>

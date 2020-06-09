<?php
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-SPTPending.xls");
?>
		<b>
			<h2>List SPT BKN Hulu Sungai Selatan</h2>
		</b>
	<table border ="2">
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
																<th>Status</th>
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
										<td>$a->dibuat_tgl </td>
										<td>$a->status_disposisi</td>

                </tr>
                ";

            endforeach;
            ?>
                </tfoot>
        </table>

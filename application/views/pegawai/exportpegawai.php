<?php
header("Content-type: application/vnd-ms-word");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-Pegawai.xls");
?>
		<b>
			<h2>List Pegawai Hulu Sungai Selatan</h2>
		</b>
	<!-- /.card-header -->
	<table border ="2">
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

                </tr>
                ";

            endforeach;
            ?>
                </tfoot>
        </table>

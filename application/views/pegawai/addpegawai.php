
<?php
$nama1 = $this->session->userdata("nama");
if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
$nama ="";
$nip_admin ="";
$tempat_lahir ="";
$tgl_lahir ="";
$kelamin ="";
$pangkat ="";
$golongan ="";
$tmt_pangkat ="";
$jabatan_admin ="";
$tmt_jabatan="";
$eselon ="";
$masakerja_thn ="";
$masakerja_bln ="";
$pendidikan ="";
$diklat ="";
$sk_cpns ="";
$tmt_berkala ="";
$tmt_pensiun ="";
$unit_kerja ="";
$username ="";
$password ="";
$tipeuser="";
if($this->input->get('n')){
foreach($pgw as $a):

	  $nama=$a->nama;
		$nip_admin=$a->nip_admin;
		$tempat_lahir =$a->tempat_lahir;
		$tgl_lahir =$a->tgl_lahir;
		$kelamin =$a->kelamin;
		$pangkat =$a->pangkat;
		$golongan =$a->golongan;
		$tmt_pangkat =$a->tmt_pangkat;
		$jabatan_admin =$a->jabatan_admin;
		$tmt_jabatan=$a->tmt_jabatan;
		$eselon =$a->eselon;
		$masakerja_thn =$a->masakerja_thn;
		$masakerja_bln =$a->masakerja_bln;
		$pendidikan =$a->pendidikan;
		$diklat =$a->diklat;
		$sk_cpns =$a->sk_cpns;
		$tmt_berkala =$a->tmt_berkala;
		$tmt_pensiun =$a->tmt_pensiun;
		$unit_kerja =$a->unit_kerja;
		$username =$a->username;
		$password =$a->password;
	$tipeuser =$a->tipeuser;
	endforeach;
	// var_dump($surat);
}
?>
<br>
<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h3>INPUT DATA PEGAWAI</h3>
		</div>
		<div class="card-body ">
		<?php
			if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "Pgw_rincian/edit_pgw' method='post' enctype='multipart/form-data'>";
			}else{
				echo "<form class='form-horizontal' id='submit' action='";echo base_url();echo "Pgw_rincian/add_rincipgw' method='post' enctype='multipart/form-data'>";
			}
		?>
			<!-- start -->
	<div class="form-group">
		<div class=row>
			<div class="col-sm-2">
				<label for="">Nama</label>

			</div>
			<div class="col-sm-10">
			<textarea class="form-control" name="nama" id="nama" rows="1" required ><?php echo $nama; ?></textarea>
			</div>

		</div>

	</div>
		<!-- end -->
			<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="nip_admin" id="nip_admin" rows="1" required
						value=	"<?php echo $nip_admin; ?>" />
						</div>
					</div>
								</div>
									<!-- end -->
										<!-- start -->
					<div class="form-group">
						<div class=row>
							<div class="col-sm-2">
								<label for="">Tempat Lahir</label>
							</div>
							<div class="col-sm-10">
							<textarea class="form-control" name="tempat_lahir" id="tempat_lahir" rows="1" required ><?php echo $tempat_lahir; ?></textarea>
							</div>
						</div>
				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">tanggal Lahir</label>

						</div>
						<div class="col-sm-10">
						<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" rows="1" required
					value=	"<?php echo $tgl_lahir ?>" />
						</div>

					</div>

				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Kelamin</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="kelamin" id="kelamin" required />
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$kelamin'> $kelamin </option>";
							}
								?>
								<option>Pilih Jenis Kelamin Anda...</option>
								<option>Pria</option>
								<option>Wanita</option>

								</select>

						</div>
					</div>

				</div>
					<!-- end -->
					<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Pangkat</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="pangkat" id="pangkat" required/>
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$pangkat'> $pangkat </option>";
							}
								?>
								<option>Pilih Pangkat Anda...</option>
								<option>IA</option>
								<option>IB</option>
								<option>IC</option>
								<option>ID</option>
								<option>IIA</option>
								<option>IIB</option>
								<option>IIC</option>
								<option>IID</option>
								<option>IIIA</option>
								<option>IIIB</option>
								<option>IIIC</option>
								<option>IIID</option>
								<option>IVA</option>
								<option>IVB</option>
								<option>IVC</option>
								<option>IVD</option>
								<option>IVE</option>
								</select>
						</div>
					</div>
				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Gol /Ruang</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="golongan" id="golongan" required>
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$golongan'> $golongan </option>";
							}
								?>
								<option>Pilih Golongan Anda...</option>
								<option>Juru Muda</option>
								<option>Juru Muda Tingkat 1</option>
								<option>Juru</option>
								<option>Juru Tingkat 1</option>
								<option>Pengatur Muda</option>
								<option>Pengatur Muda Tingkat 1</option>
								<option>Pengatur</option>
								<option>Pengatur Tingkat 1</option>
								<option>Penata Muda</option>
								<option>Penata Muda Tingkat 1</option>
								<option>Penata</option>
								<option>Penata Tingkat 1</option>
								<option>Pembina</option>
								<option>Pembina Tingkat 1</option>
								<option>Pembina Utama Muda</option>
								<option>Pembina Utama Madya</option>
								<option>Pembina Utama</option>
								</select>
						</div>
					</div>
				</div>
					<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">TMT Pangkat</label>

						</div>
						<div class="col-sm-10">
						<input type="date" class="form-control" name="tmt_pangkat" id="tmt_pangkat" rows="1" required value=	"<?php echo $tmt_pangkat; ?>" />
						</div>

					</div>

				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Jabatan Admin</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="jabatan_admin" id="jabatan_admin" required>
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$jabatan_admin'> $$jabatan_admin </option>";
							}
								?>
								<option>Pilih Jabatan Anda...</option>
								<option>KEPALA BADAN</option>
								<option>SEKRETARIS</option>
								<option>BENDAHARA</option>
								<option>KABID KEPEGAWAIAN</option>
								<option>KABID PENGEMBANGAN KOMPETENSI APARATUR</option>
								<option>KASUBAG UMUM DAN KEPEGAWAIAN</option>
								<option>KASUBID PENILAIAN KINERJA APARATUR</option>
								<option>KASUBAG PERENCANAAN DAN KEUANGAN</option>
								<option>KASUBID DIKLAT PENJENJANGAN DAN SERTIFIKASI</option>
								<option>PENGELOLA FORMASI DAN PENGADAAN PEGAWAI</option>
								<option>PENGELOLA KEUANGAN</option>
								<option>PENGELOLA PENILAIAN KINERJA PEGAWAI</option>
								<option>PENGELOLA DATABASE</option>
								<option>PENGELOLA PENGEMBANGAN KARIR</option>
								<option>PENGELOLA KEPEGAWAIAN</option>
								<option>PENGELOLA PENYELENGGARAAN DIKLAT</option>
								<option>PRAMU KEBERSIHAN</option>
								<option>PRAMU BAKTI</option>
								<option>PENGELOLA SARANA DAN PRASARANA KANTOR</option>
								<option>PENGELOLA PERIZINAN</option>
								<option>PRANATA KOMPUTER TERAMPIL</option>
								<option>PANALIS KEPEGAWAIAN AHLI PERTAMA</option>
								<option>PRANATA KOMPUTER AHLI PERTAMA</option>
								<option>PENGELOLA SISTEM INFORMASI MANAJEMEN KEPEGAWAIAN</option>
								</select>
						</div>

					</div>

				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">TMT jabatan</label>

						</div>
						<div class="col-sm-10">
						<input type="date" class="form-control" name="tmt_jabatan" id="tmt_jabatan" rows="1" required 	value= "<?php echo $tmt_jabatan; ?>" />
						</div>

					</div>
				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Eselon</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="eselon" id="eselon" required>
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$eselon'> $eselon </option>";
							}
								?>
								<option>Pilih Eselon Anda...</option>
								<option>JFU</option>
								<option>IA</option>
								<option>IB</option>
								<option>IIA</option>
								<option>IIB</option>
								<option>IIIA</option>
								<option>IIIB</option>
								<option>IVA</option>
								<option>IVB</option>
								<option>VA</option>
								</select>

						</div>
					</div>
	</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">masa kerja (TAHUN)</label>

						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="masakerja_thn" id="masakerja_thn" rows="1"  value=	"<?php echo $masakerja_thn; ?>" />
						</div>
					</div>

				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">masa kerja (BULAN)</label>

						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="masakerja_bln" id="masakerja_bln" rows="1" value="<?php echo $masakerja_bln; ?>" />

							</div>
					</div>

				</div>
					<!-- end -->
					<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Pendidikan</label>
						</div>
						<div class="col-sm-10">
							<select class="form-control" name="pendidikan" id="pendidikan" required />
								<?php
									if($this->input->get('n')){
										echo "<option selected value='$pendidikan'>$pendidikan</option>";
							}
								?>
								<option>Pilih Pendidikan Anda...</option>
								<option>SLTA</option>
								<option>DIII</option>
								<option>DIV</option>
								<option>S1</option>
								<option>S2</option>
								<option>S3</option>
								<option>S4</option>
								</select>
						</div>
					</div>

				</div>
					<!-- end -->
						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Diklat</label>
						</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="diklat" id="diklat" rows="1" value="<?php echo $diklat; ?>" />
						</div>
					</div>
				</div>
					<!-- End -->

						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">SK CPNS</label>
						</div>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="sk_cpns" id="sk_cpns" rows="1" value="<?php echo $sk_cpns; ?>"/>
						</div>
					</div>
				</div>
					<!-- end -->

						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">TMT berkala</label>

						</div>
						<div class="col-sm-10">
						<input type="date" class="form-control" name="tmt_berkala" id="tmt_berkala" rows="1" value=	"<?php echo $tmt_berkala; ?>" />
						</div>
					</div>
				</div>
						<!-- end -->

						<!-- start -->
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">TMT Pensiun</label>

						</div>
						<div class="col-sm-10">
						<input type="date" class="form-control" name="tmt_pensiun" id="tmt_pensiun" rows="1" required value=	"<?php echo $tmt_pensiun; ?>" />
						</div>
					</div>
				</div>
				<!-- start -->
		<div class="form-group">
			<div class=row>
				<div class="col-sm-2">
					<label for="">Unit Kerja</label>
				</div>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="unit_kerja" id="unit_kerja" rows="1" value="<?php echo $unit_kerja; ?>" />
				</div>
			</div>
		</div>
			<!-- End -->

				<!-- start -->
		<div class="form-group">
			<div class=row>
				<div class="col-sm-2">
					<label for="">USERNAME</label>
				</div>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="username" id="username" rows="1" value="<?php echo $username; ?>"/>
				</div>
			</div>
		</div>
			<!-- end -->

			<!-- start -->
	<div class="form-group">
		<div class=row>
			<div class="col-sm-2">
				<label for="">PASSWORD</label>
			</div>
			<div class="col-sm-10">
			<input type="password" class="form-control" name="password" id="password" rows="1" value="<?php echo $password; ?>"/>
			</div>
		</div>
	</div>
		<!-- end -->
		<!-- start -->
	<div class="form-group">
		<div class=row>
			<div class="col-sm-2">
				<label for="">Pangkat</label>

			</div>
			<div class="col-sm-10">
				<select class="form-control" name="tipeuser" id="tipeuser" required/>
					<?php
						if($this->input->get('n')){
							echo "<option selected value='$tipeuser'> $tipeuser </option>";
				}
					?>
					<option>Pilih Pangkat Anda...</option>
					<option>0 (ADMIN)</option>
					<option>1 (BENDAHARA)</option>
					<option>2 (KASUBAG UMPEG)</option>
					<option>3 (KEPALA BADAN)</option>
					<option>4 (PEGAWAI)</option>

					</select>
			</div>
		</div>
	</div>
		<!-- end -->

				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>

                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>

	</div>
</div>
<?php
}
?>

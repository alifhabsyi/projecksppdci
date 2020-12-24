
<?php
// var_dump($no_suratm);exit;
$nama1 = $this->session->userdata("nama");
$tipe = $this->session->userdata("tipeuser");
if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
$id_spt="";
$no_spt="";
$no_suratmm="";
$nip="";
$nip_admin="";
$tujuan_untuk="";
$tanggal="";
$tempat="";
$dibuat_oleh="";
$dibuat_tgl="";
$nama="";
$dasar="";
$pangkat="";
$jabatan="";
$jabatan_admin="";
$eselon="";
$status_disposisi="";
if($this->input->get('n')){
foreach($spt as $a):

		$id_spt=$a->id_spt;
		$no_suratmm=$a->no_suratm;
		$no_spt=$a->no_spt;
		$jabatan=$a->jabatan;
			$nip=$a->nip;
		$pangkat=$a->pangkat;
		$dasar=$a->dasar;
		$nama=$a->nama;
		$tanggal=$a->tanggal;
		$nip_admin=$a->nip_admin;
			$jabatan_admin=$a->jabatan_admin;
		$tujuan_untuk=$a->tujuan_untuk;
		// var_dump($asal_surat);
		$tempat=$a->tempat;
		$dibuat_oleh=$a->dibuat_oleh;
		$dibuat_tgl=$a->dibuat_tgl;
		$status_disposisi=$a->status_disposisi;

	endforeach;
	// var_dump($print);exit;
}
?>
<br>
<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h3>INPUT DATA SURAT PERINTAH TUGAS</h3>
		</div>
		<div class="card-body ">
		<?php
  	if($this->input->get('n')) {
		foreach ($print as $p) :
			$pnama=$p->nama;
			$pusul=$p->id_usul;
			$psurat=$p->no_suratm;
			$pnip=$p->nip;
			// echo "<a class='fa fa-print' href='sptstaf?u=$p->id_usul&s=$p->no_suratm&n=$p->nip' target='_blank' onClick='window.location.reload();' style='color:red'>$p->nama $p->nip</a>
			// ";
		endforeach;
	}

			if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "spt_rincian/edit_spt' method='post' enctype='multipart/form-data' >";
			}else{
				echo "<form class='form-horizontal' id='submit' action='";echo base_url();echo "spt_rincian/add_rinci' method='post' enctype='multipart/form-data'>";
			}
		?>
		<br>
				<div class="form-group">
					<div class=row>
					
				<div class="col-sm-2">
				</div>
				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">No. Spt</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="no_spt" id="no_spt" rows="1" required value='<?php echo $no_spt ; ?>'><?php echo $no_spt ; ?></textarea>
						<!-- ini s-->
						<input type="hidden" required class="form-control" id="id_spt" name="id_spt"  value=<?php echo $id_spt; ?>>
						<!-- ini e-->
						</div>

					</div>
				</div>

				<div class="form-group">
				<div class=row>
				<div class="col-sm-1">
				</div>
					<div class="col-sm-2">
						<label for="">No Surat</label>

					</div>
					<div class="col-sm-8">
					<?php
					//ini s
					if($this->input->get('n')){
						?>
						<input type="text" readonly  class="form-control" id="no_suratm" name="no_suratm"  value=<?php echo $no_suratmm; ?>>
							<?php
					}else{
					?>
						<select class="form-control" name="no_suratm" id="no_suratm" required>
							<option>-- SILAHKAN PILIH NO SURAT MASUK --</option>
							<?php

							foreach ($no_suratm as $pgw):
								echo "<option value='$pgw->no_suratm'> $pgw->no_suratm</option>";
							endforeach;
							?>
								</select>
							<?php
					}//ini e
							?>
							</div>
						</div>

					</div>
					<!-- end -->
					<!-- start -->
					<div class="form-group">
						<div class=row>
						<div class="col-sm-1">
				</div>
							<div class="col-sm-2">
								<label for="">NIP</label>

							</div>
							<div class="col-sm-8">
							<textarea class="form-control" name="nip" id="nip" rows="1" readonly=true required ><?php echo $nip; ?></textarea>
							</div>
						</div>
					</div>
					<!-- end -->
					<!-- start -->
						<div class="form-group">
							<div class=row>
							<div class="col-sm-1">
				</div>
								<div class="col-sm-2">
									<label for="">Nama</label>

								</div>
								<div class="col-sm-8">
								<textarea class="form-control" name="nama" id="nama" rows="1" readonly=true required ><?php echo $nama; ?></textarea>
								</div>

							</div>

						</div>
						<!-- end -->
						<!-- start -->
						<div class="form-group">
							<div class=row>
							<div class="col-sm-1">
				</div>
								<div class="col-sm-2">
									<label for="">Jabatan</label>

								</div>
								<div class="col-sm-8">
								<textarea class="form-control" name="jabatan" id="jabatan" rows="1" readonly=true required ><?php echo $jabatan; ?></textarea>
								</div>

							</div>

						</div>
						<!-- end -->
						<!-- start -->
						<div class="form-group">
							<div class=row>
							<div class="col-sm-1">
				</div>
								<div class="col-sm-2">
									<label for="">Pangkat</label>

								</div>
								<div class="col-sm-8">
								<textarea class="form-control" name="pangkat" id="pangkat" rows="1" readonly=true required ><?php echo $pangkat; ?></textarea>
								</div>

							</div>

						</div>
						<!-- end -->
						<!-- start -->
						<div class="form-group">
							<div class=row>
							<div class="col-sm-1">
				</div>
								<div class="col-sm-2">
								<label for="">dasar</label>

								</div>
								<div class="col-sm-8">
								<textarea class="form-control" name="dasar" id="dasar" rows="1" readonly=true required ><?php echo $dasar; ?></textarea>
								</div>

							</div>


				</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tujuan </label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="tujuan_untuk" id="tujuan_untuk" rows="1" readonly=true required ><?php echo $tujuan_untuk; ?></textarea>
						</div>

					</div>

				</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tanggal</label>

						</div>
						<div class="col-sm-8">
						<input type="date" class="form-control"  name="tanggal" id="tanggal" rows="1" required value="<?php echo $tanggal; ?>" >
						</div>

					</div>

				</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tempat </label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="tempat" id="tempat" rows="1" required ><?php echo $tempat; ?></textarea>
						</div>

					</div>

				</div>
				<!-- end -->
				<!-- start -->
			<div class="form-group">
				<div class=row>
				<div class="col-sm-1">
				</div>
					<div class="col-sm-2">
						<label for="">Di buat Oleh</label>

					</div>
					<div class="col-sm-8">
					<textarea class="form-control" name="dibuat_oleh" id="dibuat_oleh" rows="1"  required > <?php echo $this->session->userdata("nama"); ?></textarea>
					</div>
				</div>

				</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">NIP Admin</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="nip_admin" id="nip_admin" rows="1" required > <?php echo $this->session->userdata("nip_admin"); ?></textarea>
						</div>
					</div>
				</div>
				<!-- end -->
				<!-- start -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Jabatan Admin</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="jabatan_admin" id="jabatan_admin" rows="1" required > <?php echo $this->session->userdata("jabatan_admin"); ?></textarea>
						</div>
					</div>
		</div>
		<!-- end -->
		<!-- start -->
		<div class="form-group">
			<div class=row>
			<div class="col-sm-1">
				</div>
				<div class="col-sm-2">
					<label for="">Di Buat Tanggal</label>
				</div>
				<div class="col-sm-8">
					<input type="date" class="form-control"  name="dibuat_tgl" id="dibuat_tgl" rows="1" required  value="<?php $d= date('Y-m-d');  echo "$d"; ?>"/>
			</div>
		</div>
	</div>
	<!-- end -->
	<!-- start -->
	<?php if ($tipe==0 || $tipe==3){   //rule
                ?>
	<div class="form-group">
		<div class=row>
		<div class="col-sm-1">
				</div>
			<div class="col-sm-2">
				<label for="">status</label>

			</div>
			<div class="col-sm-8">
				<select class="form-control" name="status_disposisi" id="status_disposisi" required value=<?php echo $status_disposisi ?>>
				<?php if ($status_disposisi=="DIVERIFIKASI"){
									echo "<option selected>$status_disposisi</option>";
								} else{ ?>
								
								<option>DIVERIFIKASI</option>
							
								<?php } ?>
					</select>
			</div>
		</div>

	</div>
	<?php }
	else{
		echo "<input type='hidden' name='status_disposisi' value='PENDING'>";
	}
	?>

	<!-- end -->
	<!-- start -->

				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>

                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>

								   
				</div>
			</form>
		</div>

	</div>
</div>
</div>
<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>

<script type="text/javascript">
var path = window.location.pathname.split('/');
var http = window.location.origin + '/' + path[1];
$('#no_suratm').on('change', function() {
  alert( this.value );
  //$("#nama").val('tres');
  loadnip();
});
$('#tgl_pulang').on('change', function() {
  if($('#tgl_pulang').val()<$('#tgl_pergi').val()){
	alert("isi yg benar");
  }
});

function loadnip() {
		var urls = http + "/spt_rincian/loadnama";
		var no_suratm = $("#no_suratm option:selected").val();
		var datax = {
        "no_suratm": no_suratm
    };

		$.ajax({
        type: 'GET',
        url: urls,
        data: datax,
        typeData: 'JSON',
        success: function(result) {
//	alert(result);
			var d=$.parseJSON(result);
			// alert(d[0]);
		 $("#nip").val(d[0].nip);
			$("#nama").val(d[0].nama);
			$("#tanggal").val(d[0].tgl_pergi);
		 	$("#jabatan").val(d[0].jabatan);
		 $("#pangkat").val(d[0].pangkat);
		 $("#tujuan_untuk").val(d[0].tujuan_untuk);
		 $("#tempat").val(d[0].tempat_tujuan);
$("#dasar").val(d[0].dasar);

        }
    });
}
</script>
<?php } ?>

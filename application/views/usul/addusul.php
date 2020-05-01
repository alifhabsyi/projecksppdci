
<?php //include "v_header.php";
?>
<?php
//  var_dump($nip);
$nama1 = $this->session->userdata("nama");
$tipe = $this->session->userdata("tipeuser");

if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
$id_usul="";
$no_suratm="";
$dasar="";
$nama="";
$nip="";
$nip_admin="";
$pangkat="";
$jabatan="";
$jabatan_admin="";
$tgl_pergi="";
$tgl_pulang="";
$tempat_tujuan="";
$tujuan_untuk="";
$status_spt="";


if($this->input->get('n')){
foreach($usul as $a):

		$id_usul=$a->id_usul;
		$dasar=$a->dasar;
		$nip=$a->nip;
		$jabatan_admin=$a->jabatan;
		$pangkat=$a->pangkat;
		$nama=$a->nama;
		$no_suratm=$a->no_suratm;
		$tgl_pergi=$a->tgl_pergi;
		$tgl_pulang=$a->tgl_pulang;
			$tempat_tujuan=$a->tempat_tujuan;
				$tujuan_untuk=$a->tujuan_untuk;
					$status_spt=$a->status_spt;
	endforeach;
	// var_dump($surat);
}
?>
<br>
<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h3>Tambah Usulan SPPD</h3>
		</div>
		<div class="card-body ">
		<?php
			if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "usulan/edit_usul' method='post' enctype='multipart/form-data' >";
			}else{
				echo "<form class='form-horizontal' id='submit' action='";echo base_url();echo "usulan/add_usul' method='post' enctype='multipart/form-data'>";
			}
		?>

			<div class="form-group">
					<div class="row">
						<div class="col-sm-2">
							<label for="">ID Usul</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="id_usul" name="id_usul"
								placeholder='Auto Generate' readonly=true value=<?php echo $id_usul; ?>>
						</div>

		</div>
					</div>

					<div class="form-group">
						<div class=row>
							<div class="col-sm-2">
								<label for="">Nomor Surat Masuk</label>

							</div>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="no_suratm" id="no_suratm" rows="1"  required value="<?php echo $no_suratm; ?>"/>
							</div>

						</div>

	</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Dasar Tugas</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="dasar" id="dasar" rows="1"  required ><?php echo $dasar; ?></textarea>
						</div>

					</div>

</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Nama</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="nama" id="nama" rows="1" readonly=true required ><?php echo $nama; ?></textarea>
						</div>

					</div>

</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-10">
						<?php
						if($this->input->get('n')){
							?>
							<input type="text" readonly  class="form-control" id="nip_admin" name="nip_admin"  value=<?php echo $nip; ?>>	
								<?php
						}else{
						?>
							<select class="form-control" name="nip_admin" id="nip_admin" required>
								<option>-- SILAHKAN PILIH NIP --</option>
								<?php echo $nip_admin; ?>
								<?php

								foreach ($nipp as $pgw):
									echo "<option value='$pgw->nip_admin'>$pgw->nip_admin</option>";
								endforeach;
								?>

							</select>
							<?php }
							?>
						</div>
					</div>



				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Jabatan</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="jabatan_admin" id="jabatan_admin" rows="1" readonly=true required ><?php echo $jabatan_admin; ?></textarea>
						</div>

					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Pangkat</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="pangkat" id="pangkat" rows="1" readonly=true required ><?php echo $pangkat; ?></textarea>
						</div>

					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tujuan Untuk</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" 
						<?php if($tgl_pergi!="" && $tipe==3){ ?> readonly <?php } ?>
						name="tujuan_untuk" id="tujuan_untuk" rows="1" required ><?php echo $tujuan_untuk; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tempat Tujuan</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" 
						<?php if($tgl_pergi!="" && $tipe==3){ ?> readonly <?php } ?>
						name="tempat_tujuan" id="tempat_tujuan" rows="1" required ><?php echo $tempat_tujuan; ?></textarea>
						</div>
					</div>

				</div>


				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tanggal Pergi</label>

						</div>
						<div class="col-sm-4">
							<div class="form-group">
							
								<input type="date" 
								<?php if($tgl_pergi!="" && $tipe==3){ ?> readonly <?php } ?>
							class="form-control" name="tgl_pergi" id="tgl_pergi" required aria-describedby="helpId" value=<?php echo $tgl_pergi ?>>
						</div>
						</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pulang</label>
</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="date" 
								<?php if($tgl_pergi!="" && $tipe==3){ ?> readonly <?php } ?>
						class="form-control" name="tgl_pulang"
									aria-describedby="helpId" id="tgl_pulang" required value=<?php echo $tgl_pulang ?>>
							</div>
						</div>
					</div>

				</div>
				<?php if ($tipe==0 || $tipe==3){   //rule
                ?>
				<b><h4 align=center>VERIFIKASI USULAN</h4></b>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tanggal Pergi</label>

						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="date" class="form-control" name="tgl_pergi1" id="tgl_pergi1" required aria-describedby="helpId" value=<?php echo $tgl_pergi ?>>
						</div>
						</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pulang</label>
</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="date" class="form-control" name="tgl_pulang1"
									aria-describedby="helpId" id="tgl_pulang1" required value=<?php echo $tgl_pulang ?>>
							</div>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Status</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="status_spt" id="status_spt" required value=<?php echo $status_spt ?>>
								<?php if ($status_spt=="DIVERIFIKASI"){
									echo "<option selected>$status_spt</option>";
								} else{ ?>
								<option>PENDING</option>
								<option>DIVERIFIKASI</option>
								<option>DIBATALKAN</option>
								<?php } ?>
							  </select>
						</div>
					</div>

				</div>
				<?php }
				else{
					echo "<input type='hidden' name='status_spt' value='PENDING'>";
				} 
				?>




				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>

                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>
				</div>
			</form>
			<br>
			<?php if ($tipe==0 || $tipe==3){   //rule
                ?>
				
			<?php
		
	if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "usulan/dtl_insert' method='post' enctype='multipart/form-data' >";
				if ($status_spt!="DIVERIFIKASI"){  //jika diverif
	
		?>
		<input type="hidden" required class="form-control" id="id_usul" name="id_usul"  value=<?php echo $id_usul; ?>>

				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-4">
							<select class="form-control" name="nip2" id="nip2" required>
								<option value="pilih">-- SILAHKAN PILIH NIP --</option>
								<?php

								foreach ($nippgw as $pgw):
									echo "<option value='$pgw->nip_admin'>$pgw->nip_admin</option>";
								endforeach;
								?>

							</select>
						</div>


						<div class="col-sm-1">
							<label for="">Nama</label>

						</div>
						<div class="col-sm-5">
						<textarea class="form-control" name="nama2" id="nama2" rows="1" readonly=true required ></textarea>
						</div>

					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tanggal Lahir</label>

						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="date" class="form-control" name="tgl_lahir" required aria-describedby="helpId"
									placeholder="" required id="tgl_lahir">
							</div>
						</div>
						<div class="col-sm-1">
							<label for="">Keterangan</label>

						</div>
						<div class="col-sm-4">
						<textarea class="form-control" name="keterangan" id="keterangan" rows="1"  required ></textarea>
						</div>
						<div class="col-sm-1">
						<button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Tambah</button>
						</div>
					</div>

				</div>
				</form>
							<?php } ?>


<div class=container align=center>
		<div class="card-body">
		<b><h4>DATA PENGIKUT SPPD</h4></b>
		<div class="table table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>NAMA</th>
						<th>NIP</th>
                        <th>TANGGAL LAHIR</th>
                        <th>KETERANGAN</th>
						<?php if ($status_spt!="DIVERIFIKASI"){ 
							echo "<th>ACTION</th>"; 
						}
						?>

					</tr>
				</thead>
				<tbody>
					<?php
                foreach($sppd_dtl as $a):
                echo "
                <tr>
                    <td align=center>$a->nama </td>
					<td>
						<a >$a->nip
						</a>
					</td>
                    <td>$a->tgl_lahir</td>
                    <td>$a->keterangan</td>

					";
					if ($status_spt!="DIVERIFIKASI"){
					echo"<td>
					<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../usulan/dlt_dtl_usul?n=$a->dtl_usul&r=$id_usul' style='color:red'></a>";
					echo"</td>";
					}

               echo"
                </tr>
                ";

            endforeach;
            ?>
                </tfoot>
        </table>

        </div>
</div>
<?php
	}
			} //rule
?>

		</div>

	</div>
</div>
<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.inputpicker.js'?>"></script>

<script type="text/javascript">


var path = window.location.pathname.split('/');
var http = window.location.origin + '/' + path[1];
$('#nip2').on('change', function() {
  alert( this.value );
  //$("#nama").val('tres');
  loadnip2();
});
$('#nip_admin').on('change', function() {
  alert( this.value );
  //$("#nama").val('tres');
  loadnip();
});
$('#tgl_pulang').on('change', function() {
  if($('#tgl_pulang').val()<$('#tgl_pergi').val()){
	alert("isi yg benar");
  }
});
function loadnip2() {
		var urls = http + "/sppd/loadnama";
		var nip = $("#nip2 option:selected").text();
		var datax = {
        "nip": nip
    };

		$.ajax({
        type: 'GET',
        url: urls,
        data: datax,
        typeData: 'JSON',
        success: function(result) {
			//  alert(result);
			var d=$.parseJSON(result);
			// alert(d[0]);
			$("#nama2").val(d[0].nama);


        }
    });
}

function loadnip() {
		var urls = http + "/Usulan/loadnama";
		var nip_admin = $("#nip_admin option:selected").text();
		var datax = {
        "nip_admin": nip_admin
    };

		$.ajax({
        type: 'GET',
        url: urls,
        data: datax,
        typeData: 'JSON',
        success: function(result) {
			// alert(result);
			var d=$.parseJSON(result);
			// alert(d[0]);
			$("#nama").val(d[0].nama);
			$("#jabatan_admin").val(d[0].jabatan_admin);
			$("#pangkat").val(d[0].pangkat);

        }
    });
}
</script>
<?php } ?>

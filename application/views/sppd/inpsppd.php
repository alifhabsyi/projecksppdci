<?php
$nama1 = $this->session->userdata("nama");
if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
//  var_dump($nip);
$no_spt="";$no_sppd="";$pejabat_perintah="";$nip2="";$nosppd="";
$nama="";$nip="";$pangkat="";$jabatan="";$jenis_angkutan="";
$dari="";$tempat_tujuan="";$lama_pd="";$tgl_pergi="";$tgl_pulang="";$dibuat_tgl="";$id_usul="";
$instansi="";$mata_anggaran="";$nospt="";$tujuan_untuk="";$no_suratm="";$tgl=date('d/m/Y');$tglbuat=date('Y/m/d');
$detail="";
// var_dump($sppd);
if($this->input->get('n')){
foreach($sppd as $a):

	$no_spt=$a->no_spt;
	$nospt=$a->no_spt;
		$no_sppd=$a->no_sppd;
		$nosppd=$a->no_sppd;
		$pejabat_perintah=$a->pejabat_perintah;
		$nama=$a->nama;
		$nip=$a->nip;
		$pangkat=$a->pangkat;
		$jabatan=$a->jabatan;
		$tujuan_untuk=$a->tujuan_untuk;
		$jenis_angkutan=$a->jenis_angkutan;
		$dari=$a->dari;
		$tempat_tujuan=$a->tempat_tujuan;
		$lama_pd=$a->lama_pd;
		$tgl_pergi=$a->tgl_pergi;
		$tgl_pulang=$a->tgl_pulang;
		$instansi=$a->instansi;
		$mata_anggaran=$a->mata_anggaran;
		$dibuat_tgl=$a->dibuat_tgl;
		$tglbuat=$a->dibuat_tgl;
		$no_suratm=$a->no_suratm;
		

	endforeach;
	// var_dump($surat);
}
?>
<br>
<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h3>Input SPPD</h3>
		</div>
		<div class="card-body ">
		<?php
			if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "sppd/edit_sppd' method='post' enctype='multipart/form-data' >";
			}else{
				echo "<form class='form-horizontal' id='submit' action='";echo base_url();echo "sppd/add_sppd' method='post' enctype='multipart/form-data'>";
			}
		?>
		<input type="hidden" name="detail" id="detail">
        <!-- <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
					<th>Keterangan</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table> -->


				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">NO SPT</label>

						</div>
						<div class="col-sm-8">
						<?php
						if($this->input->get('n')){
						?>
						<input type="text" readonly  class="form-control" id="nospt" name="nospt"  value="<?php echo $no_spt; ?>">
							<?php
						}else{
							?>
						<input type="hidden" required class="form-control" id="nospt" name="nospt"  value=<?php echo $nospt; ?>>

							<select class="form-control" name="no_spt" id="no_spt" required>
								<option>-- SILAHKAN PILIH NO SPT --</option>
								<?php

								foreach ($spt as $nospt):
									echo "<option value='$nospt->id_spt'>$nospt->no_spt || $nospt->nip || $nospt->tujuan_untuk  </option>";
									
								
								endforeach;
								?>

							</select>

							<?php
						}
						?>

						</div>
					</div>

				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">No Surat Masuk</label>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly required class="form-control" id="no_suratm" name="no_suratm"
								placeholder='Auto Load Data'  value=<?php echo $no_suratm; ?>>
						</div>


					</div>
				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">No SPPD</label>
						</div>
						<div class="col-sm-8">
						
						<input type="text" required class="form-control" id="no_sppd" name="no_sppd"
								placeholder='No SPPD'  value='<?php echo $no_sppd; ?>'>
						</div>


					</div>
				</div>
				<input type="hidden"  id="nosppd" name="nosppd"
								 value='<?php echo $nosppd; ?>'>
						</div>


				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Pejabat Pemberi Perintah</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="pejabat_perintah" id="pejabat_perintah" rows="1" readonly=true required ><?php echo $pejabat_perintah; ?></textarea>
						</div>

					</div>

				</div>

				<!-- <div class="form-group">
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

				</div> -->
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-8">
						<?php
						if($this->input->get('n')){
						?>
						<input type="text" readonly  class="form-control" id="nip" name="nip"  value=<?php echo $nip; ?>>	
							<?php
						}else{
							?>
							<select class="form-control" id="nip" name="nip">
								<option>-- SILAHKAN PILIH NIP --</option>
							</select>
						<?php } ?>
						</div>
					</div>

				</div>
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

				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tujuan Untuk</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" readonly name="tujuan_untuk" id="tujuan_untuk" rows="1" required ><?php echo $tujuan_untuk; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Jenis Angkutan</label>

						</div>
						<div class="col-sm-8">
							<select class="form-control" name="jenis_angkutan" id="jenis_angkutan" required>
								<option>Darat</option>
								<option>Air</option>
								<option>Udara</option>
							  </select>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Dari</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="dari" id="dari" rows="1" required ><?php echo $dari; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tempat Tujuan</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" readonly name="tempat_tujuan" id="tempat_tujuan" rows="1" required ><?php echo $tempat_tujuan; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Lama PD</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" readonly name="lama_pd" id="lama_pd" rows="1" required ><?php echo $lama_pd; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pergi</label>

						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<input type="date" readonly class="form-control" name="tgl_pergi" required aria-describedby="helpId" value=<?php echo $tgl_pergi ?>
									placeholder="" id="tgl_pergi">
							</div>
						</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pulang</label>

						</div>
						<div class="col-sm-"3>
							<div class="form-group">
								<input type="date" readonly class="form-control" name="tgl_pulang"
									aria-describedby="helpId" placeholder="" id="tgl_pulang" required value=<?php echo $tgl_pulang ?>>
							</div>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Instansi</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="instansi" id="instansi" rows="1" required ><?php echo $instansi; ?></textarea>
						</div>
					</div>

				</div><div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Mata Anggaran</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="mata_anggaran" id="mata_anggaran" rows="1" required ><?php echo $mata_anggaran; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Dibuat Tanggal</label>

						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<input type="text" readonly class="form-control" name="dibuat_tgl" required aria-describedby="helpId"
								 value=<?php if($dibuat_tgl!=""){ echo $dibuat_tgl;} else { echo $tgl;} ?>
									placeholder="" id="dibuat_tgl">
								
							</div>
							<input type =hidden name='tglbuat' id='tglbuat' value='<?php echo $tglbuat; ?>'>
							<input type =hidden name='id_usul' id='id_usul' value='<?php echo $id_usul; ?>'>
						</div>
					</div>

				</div>
				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>

                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>

								   
				</div>
		
			</form>
			<br>



	
	
		<div class="row">
		
    </div>
</div>

</div>
</div>





<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.inputpicker.js'?>"></script>

<script type="text/javascript">

window.onbeforeunload = function() {
 		  	localStorage.setItem(no_sppd, $('#no_sppd').val());
   			localStorage.setItem(nama, $('#nama').val());
   			localStorage.setItem(jabatan, $('#jabatan').val());
}
window.onload = function() {
   var no_sppd = localStorage.getItem(no_sppd);
   var nama = localStorage.getItem(nama);
   if (no_sppd !== null) $('#no_sppd').val(nip); if (nama !== null) $('#nama').val(nama);
  
}
var path = window.location.pathname.split('/');
var http = window.location.origin + '/' + path[1];
$( document ).ready(function() {
    console.log( "ready!" );
	loadsptada();
});
$('#nip').on('change', function() {
//   alert( this.value );
  //$("#nama").val('tres');
  loadnip();
});

	$(function () {
		//  $('#mydata').dataTable();
		// $('#example2').DataTable({
		// 	"paging": true,
		// 	"lengthChange": false,
		// 	"searching": false,
		// 	"ordering": true,
		// 	"info": true,
		// 	"autoWidth": false,
		// });
	});
	function checkDelete(){
		return confirm('Are you sure?');
	}

$('#no_spt').on('change', function() {
  //alert( this.value );
  //$("#nama").val('tres');
  loadspt();
//   loaddetail();
});
$('#tgl_pulang').on('change', function() {
  if($('#tgl_pulang').val()<$('#tgl_pergi').val()){
	alert("isi yg benar");
  }
});

function loadspt() {
		var urls = http + "/sppd/loadspt";
		var no_spt = $("#no_spt option:selected").val();
		var datax = {
        "no_spt": no_spt
    };

		$.ajax({
        type: 'GET',
        url: urls,
        data: datax,
        typeData: 'JSON',
        success: function(result) {
			//  alert(result);
			var d=$.parseJSON(result);
			// console.log(result);
			// console.log(d);
			// alert(d[0].id_usul);
			$("#nip").val(d[0].nip);
			 $("#nospt").val(d[0].no_spt);
			 $("#no_suratm").val(d[0].no_suratm);
			// $("#nama").val(d[0].nama);
			// $("#jabatan").val(d[0].jabatan);
			if(d[0].jabatan=="KEPALA BADAN"){
				$("#pejabat_perintah").val("Sekretaris Daerah Kabupaten Hulu Sungai Selatan");
			}else{
				$("#pejabat_perintah").val("Kepala BKD, Diklat Kab. HSS");
			}
			// $("#pangkat").val(d[0].pangkat);
			$("#tujuan_untuk").val(d[0].tujuan_untuk);
			$("#tempat_tujuan").val(d[0].tempat_tujuan);
			tp=Date.parse(d[0].tgl_pergi);
			td=Date.parse(d[0].tgl_pulang);
			pd=(((td-tp)/1000)/86400)+1;
			$("#lama_pd").val(pd);
			$("#id_usul").val(d[0].id_usul);
			$("#tgl_pergi").val(d[0].tgl_pergi);
			$("#tgl_pulang").val(d[0].tgl_pulang);
			window.location.load = "?t="+d[0].id_usul+"";
			
			  

						var urls = http + "/sppd/loaddetail";
						var id_usul = d[0].id_usul
						var datax = {
						"id_usul": id_usul
					};

						
						$.ajax({
						type: 'GET',
						url: urls,
						data: datax,
						typeData: 'json',
						success: function(result) {
							// console.log(result);
							// var cc = $.parseJSON(result);
							// console.log(cc);
							// console.log(cc.detailusul);
							// console.log(cc.detailusul[0]);
							// console.log(cc.detailusul[0].keterangan);
							// alert(result);
							  var k = $.parseJSON(result);
							  console.log(k);
								// alert(k.detailusul.length);
							//   alert(k.nama[0]);
							//   var d=$.parseJSON(result);
							// alert(d[0].nip);
							$("#detail").val(k.detailusul.length);
							
							var html = '';
									var i;
									var nipp = $('#nip');
									nipp.empty();
									//$('#city').empty();
									nipp.append('<option>-- SILAHKAN PILIH NIP --</option>');
									for (var i = 0; i < k.detailusul.length; i++) {
										// alert( k.detailusul[i].nip);
										nipp.append('<option id=' + i + ' value=' + k.detailusul[i].nip + '>' + k.detailusul[i].nip +' || ' + k.detailusul[i].nama + '</option>');
									}
									// for(i=0; i < parseInt(k.detailusul.length); i++){
									// 	 "<input type='hidden' name='dnip"+i+"' id='dnip"+i+"' value='"+k.detailusul[i].nip+"'>";
									// 	 "<input type='hidden' name='dnama"+i+"' id='dnama"+i+"'  value='"+k.detailusul[i].nama+"'>";
									// 	 "<input type='hidden' name='dtgl_lahir"+i+"' id='dtgl_lahir"+i+"'  value='"+k.detailusul[i].tgl_lahir+"'>";
									// 	 "<input type='hidden' name='dketerangan"+i+"' id='dketerangan"+i+"'  value='"+k.detailusul[i].keterangan+"'>";
									// 	 alert($("#dnip0"));
									
									// }
									for(i=0; i < parseInt(k.detailusul.length); i++){
										html += "<tr>"+
												"<td>"+k.detailusul[i].nip+"</td>"+
												"<td>"+k.detailusul[i].nama+"</td>"+
												"<td>"+k.detailusul[i].tgl_lahir+"</td>"+
												"<td>"+k.detailusul[i].keterangan+"</td>"+
												"</tr>";
									}
									
									$('#show_data').html(html);


						}
						
					});
							
			
        }
    });
	
}
function loadsptada() {
		var urls = http + "/sppd/loadsptada";
		var no_spt = $("#nospt").val();
		// alert($("#nospt").val());
		var datax = {
        "no_spt": no_spt
    };

		$.ajax({
        type: 'GET',
        url: urls,
        data: datax,
        typeData: 'JSON',
        success: function(result) {
			//   alert(result);
			var d=$.parseJSON(result);
			// console.log(result);
			// console.log(d);
			// alert(d[0].id_usul);			  

						var urls = http + "/sppd/loaddetail";
						var id_usul = d[0].id_usul
						var datax = {
						"id_usul": id_usul
					};

						
						$.ajax({
						type: 'GET',
						url: urls,
						data: datax,
						typeData: 'json',
						success: function(result) {
							// console.log(result);
							// var cc = $.parseJSON(result);
							// console.log(cc);
							// console.log(cc.detailusul);
							// console.log(cc.detailusul[0]);
							// console.log(cc.detailusul[0].keterangan);
							// alert(result);
							  var k = $.parseJSON(result);
							  console.log(k);
							//   console.log(k.detailusul.length);
							//   alert(k.nama[0]);
							//   var d=$.parseJSON(result);
							// alert(d[0].nip);
							// $("#nip").val("asu");
							var nosppd= $('#no_sppd').val();
							// var html = '';
							// 		var i;
							// 		for(i=0; i < parseInt(k.detailusul.length); i++){
							// 			html += "<tr>"+
							// 					"<td><a href='sppdkabad?ns="+k.detailusul[i].nip+"&n="+nosppd+"' target='_blank' >"+k.detailusul[i].nip+"</a></td>"+
							// 					"<td>"+k.detailusul[i].nama+"</td>"+
							// 					"<td>"+k.detailusul[i].tgl_lahir+"</td>"+
							// 					"<td>"+k.detailusul[i].keterangan+"</td>"+
							// 					"</tr>";
							// 		}
							// 		$('#show_data').html(html);


						}
						
					});
							
			
        }
    });
	
}
function loadnip() {
		var urls = http + "/sppd/loadnama";
		var nip = $("#nip option:selected").text();
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
			$("#nama").val(d[0].nama);
			$("#jabatan").val(d[0].jabatan_admin);
			$("#pangkat").val(d[0].pangkat);


        }
    });
}

</script>
<?php } ?>

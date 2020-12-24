
<?php
$nama1 = $this->session->userdata("nama");
if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
$no_kwt="";$no_sppd="";$nip="";$nama="";$jabatan="";$program="";$kegiatan="";$kode_rek="";$nama_rek="";$nosppd="";
$tgl_pergi="";$tgl_pulang="";$biaya_harian="";$biaya_riil="";$tiket_pergi="";$tiket_pulang="";$biaya_inap="";$nosppd="";
// var_dump($rinci);
if($this->input->get('n')){
foreach($rinci as $a):
		
		$no_kwt=$a->no_kwt;
		
		$no_sppd=$a->no_sppd;
		$nosppd=$a->no_sppd;
		$nip=$a->nip;
		// var_dump($nip);
		$nama=$a->nama;
		$jabatan=$a->jabatan;
		$program=$a->program;
		$kegiatan=$a->kegiatan;
		$kode_rek=$a->kode_rek;
		$nama_rek=$a->nama_rek;
		$tgl_pergi=$a->tgl_pergi;
		$tgl_pulang=$a->tgl_pulang;
		$biaya_harian=$a->biaya_harian;
		$biaya_riil=$a->biaya_riil;
		$tiket_pergi=$a->tiket_pergi;
		$tiket_pulang=$a->tiket_pulang;
		$biaya_inap=$a->biaya_inap;
	endforeach;
	// var_dump($rinci);exit;
}
?>
<br>
<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white">
			<h3>Kwitansi Rincian SPD</h3>
		</div>
		<div class="card-body ">
		<?php
			if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "rincian/edit_rinci' method='post' enctype='multipart/form-data' >";
			}else{
				echo "<form class='form-horizontal' id='submit' action='";echo base_url();echo "rincian/add_rinci' method='post' enctype='multipart/form-data'>";
			}
		?>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">NO SPPD</label>

						</div>
						<div class="col-sm-8">
						
						<?php
						if($this->input->get('n')){
						?>
						<input type="text" readonly  class="form-control" id="nosppd" name="nosppd"  value=<?php echo $no_sppd; ?>>	
							<?php
						}else{
							?>
						<input type="hidden" required class="form-control" id="nosppd" name="nosppd"  value=<?php echo $no_sppd; ?>>
							
							<select class="form-control" name="no_sppd" id="no_sppd" required>
								<option>-- SILAHKAN PILIH NIP SPPD --</option>
								<?php 
								
								foreach ($rinci as $nospd):
									echo "<option value='$nospd->no_sppd'>$nospd->no_sppd || $nospd->nip || $nospd->no_spt</option>";
								endforeach;
								?>
								
							</select>
						
							<?php
						}
						?>

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

				</div> -->
				<div class="form-group">
					<div class="row">
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">No Kwitansi</label>
						</div>
						<div class="col-sm-8">
							<input type="text" <?php if($this->input->get('n')){
							 echo "readonly";} ?> class="form-control" id="no_kwt" name="no_kwt"
								placeholder='Nomor Kwitansi'  value='<?php echo $no_kwt; ?>'>
						</div>


					</div>
				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" readonly name="nip" id="nip" rows="1" required ><?php echo $nip; ?></textarea>
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
						<textarea class="form-control" readonly name="nama" id="nama" rows="1" required ><?php echo $nama; ?></textarea>
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
						<textarea class="form-control" readonly name="jabatan" id="jabatan" rows="1" required ><?php echo $jabatan; ?></textarea>
						</div>
						
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Program</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="program" id="program" rows="1" required ><?php echo $program; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Kegiatan</label>

						</div>
						<div class="col-sm-8">
						<textarea class="form-control" name="kegiatan" id="kegiatan" rows="1" required ><?php echo $kegiatan; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Kode Rekening</label>

						</div>
						<div class="col-sm-3">
						<textarea class="form-control" name="kode_rek" id="kode_rek" rows="1" required ><?php echo $kode_rek; ?></textarea>
						</div>
						<div class="col-sm-2">
							<label for="">Nama Rekening</label>

						</div>
						<div class="col-sm-3">
						<textarea class="form-control" name="nama_rek" id="nama_rek" rows="1" required ><?php echo $nama_rek; ?></textarea>
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
								<input type="date" class="form-control" name="tgl_pergi" required readonly aria-describedby="helpId" value=<?php echo $tgl_pergi ?>
									placeholder="" id="tgl_pergi">
							</div>
						</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pulang</label>

						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<input type="date" class="form-control" name="tgl_pulang" 
									aria-describedby="helpId" placeholder="" readonly id="tgl_pulang" required value=<?php echo $tgl_pergi ?>>
							</div>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Biaya Harian</label>

						</div>
						<div class="col-sm-3">
						<input type=number class="form-control" name="biaya_harian" id="biaya_harian" rows="1" required value="<?php echo $biaya_harian; ?>">
						</div>
						<div class="col-sm-2">
							<label for="">Biaya Riil</label>

						</div>
						<div class="col-sm-3">
						<input type=number class="form-control" name="biaya_riil" id="biaya_riil" rows="1" required value="<?php echo $biaya_riil; ?>">
						</div>
					</div>


				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Biaya Tiket Pergi</label>

						</div>
						<div class="col-sm-3">
						<input type=number class="form-control" name="tiket_pergi" id="tiket_pergi" rows="1" required value="<?php echo $tiket_pergi; ?>">
						</div>
						<div class="col-sm-2">
							<label for="">Biaya Tiket Pulang</label>

						</div>
						<div class="col-sm-3">
						<input type=number class="form-control" name="tiket_pulang" id="tiket_pulang" rows="1" required value="<?php echo $tiket_pulang; ?>">
						</div>
					</div>


				</div>
				<div class="form-group">
					<div class=row>
					<div class="col-sm-1">
				</div>
						<div class="col-sm-2">
							<label for="">Biaya Penginapan</label>

						</div>
						<div class="col-sm-8">
						<input type=number class="form-control" name="biaya_inap" id="biaya_inap" rows="1" required value="<?php echo $biaya_inap; ?>">
						</div>
						
					</div>


				</div>

				
				

				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>
				    
                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>

	</div>
</div>


<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.inputpicker.js'?>"></script>

<script type="text/javascript">


var path = window.location.pathname.split('/');
var http = window.location.origin + '/' + path[1];


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

$('#no_sppd').on('change', function() {
//   alert( this.value );
//   $("#nosppd").val($('#no_sppd').);      

//   loadsppd();
  loadsptada();
  loadsppd();
});
$('#nip').on('change', function() {
	loadnip();
});


function loadsppd() {
		var urls = http + "/rincian/loadsppd";
		// var no_sppd = $("#no_sppd option:selected").val();
		 var no_sppd = $("#no_sppd").val();
		
		alert(no_sppd);
		var datax = {
        "no_sppd": no_sppd
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
			$("#nip").val(d[0].nip);
			$("#nama").val(d[0].nama);
			$("#jabatan").val(d[0].jabatan);
			$("#nosppd").val(d[0].no_sppd);      
			$("#tgl_pergi").val(d[0].tgl_pergi);
			$("#tgl_pulang").val(d[0].tgl_pulang);             
			
        } 
    });
}
function loadnip() {
		var urls = http + "/sppd/loadnama";
		var nip = $("#nip").val();
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


        }
    });
}
function loadsptada() {
		var urls = http + "/sppd/loadsptada";
		var no_spt = $("#no_sppd").val();
		//  alert($("#no_sppd").val());
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

						var urls = http + "/SPPD/loaddetail";
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
								// alert(k.detailusul.length);
								var nipp = $('#nip');
								nipp.empty();
								//$('#city').empty();
								// nipp.append('<option>-- SILAHKAN PILIH NIP --</option>');
								// for (var i = 0; i < k.detailusul.length; i++) {
								// 	// alert( k.detailusul[i].nip);
								// 	nipp.append('<option id=' + i + ' value=' + k.detailusul[i].nip + '>' + k.detailusul[i].nip +' || ' + k.detailusul[i].nama + '</option>');
								// }
							//   console.log(k.detailusul.length);
							//   alert(k.nama[0]);
							//   var d=$.parseJSON(result);
							// alert(d[0].nip);
							// $("#nip").val("asu");
			
							// var html = '';
							// 		var i;
							// 		for(i=0; i < parseInt(k.detailusul.length); i++){
							// 			html += '<tr>'+
							// 					'<td>'+k.detailusul[i].nip+'</td>'+
							// 					'<td>'+k.detailusul[i].nama+'</td>'+
							// 					'<td>'+k.detailusul[i].tgl_lahir+'</td>'+
							// 					'<td>'+k.detailusul[i].keterangan+'</td>'+
							// 					'</tr>';
							// 		}
									
							// 		$('#show_data').html(html);


						}
						
					});
							
			
        }
    });
	
}

</script>
<?php } ?>
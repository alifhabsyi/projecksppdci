
<?php //include "v_header.php";
?>
<?php
//  var_dump($nip);
$no_spt="";$no_sppd="";$pejabat_perintah="";
$nama="";$nip="";$pangkat="";$jabatan="";$jenis_angkutan="";
$dari="";$tempat_tujuan="";$lama_pd="";$tgl_pergi="";$tgl_pulang="";
$instansi="";$mata_anggaran="";$nospt="";$tujuan_untuk="";
if($this->input->get('n')){
foreach($sppd as $a):
		
	$no_spt=$a->no_spt;
	$nospt=$a->no_spt;
		$no_sppd=$a->no_sppd;
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
        
				
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NO SPT</label>

						</div>
						<div class="col-sm-10">
						<?php
						if($this->input->get('n')){
						?>
						<input type="text" readonly  class="form-control" id="nospt" name="nospt"  value=<?php echo $no_spt; ?>>	
							<?php
						}else{
							?>
						<input type="hidden" required class="form-control" id="nospt" name="nospt"  value=<?php echo $nospt; ?>>
							
							<select class="form-control" name="no_spt" id="no_spt" required>
								<option>-- SILAHKAN PILIH NO SPT --</option>
								<?php 
								
								foreach ($spt as $nospt):
									echo "<option value='$nospt->id_spt'>$nospt->no_spt || $nospt->tujuan_untuk</option>";
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
						<div class="col-sm-2">
							<label for="">No SPPD</label>
						</div>
						<div class="col-sm-10">
							<input type="text" required class="form-control" id="no_sppd" name="no_sppd"
								placeholder='No SPPD'  value=<?php echo $no_sppd; ?>>
						</div>


					</div>
				</div>
				
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Pejabat Pemberi Perintah</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="pejabat_perintah" id="pejabat_perintah" rows="1" readonly=true required ><?php echo $pejabat_perintah; ?></textarea>
						</div>
						
					</div>

				</div>
				
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="nip" id="nip" rows="1" readonly=true required ><?php echo $nip; ?></textarea>
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
							<label for="">Jabatan</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="jabatan" id="jabatan" rows="1" readonly=true required ><?php echo $jabatan; ?></textarea>
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
						<textarea class="form-control" readonly name="tujuan_untuk" id="tujuan_untuk" rows="1" required ><?php echo $tujuan_untuk; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Jenis Angkutan</label>

						</div>
						<div class="col-sm-10">
							<select class="form-control" name="jenis_angkutan" id="jenis_angkutan" required>
								<option>DARAT</option>
								<option>AIR</option>
								<option>UDARA</option>
							  </select>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Dari</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="dari" id="dari" rows="1" required ><?php echo $dari; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Tempat Tujuan</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" readonly name="tempat_tujuan" id="tempat_tujuan" rows="1" required ><?php echo $tempat_tujuan; ?></textarea>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Lama PD</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" readonly name="lama_pd" id="lama_pd" rows="1" required ><?php echo $lama_pd; ?></textarea>
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
								<input type="date" readonly class="form-control" name="tgl_pergi" required aria-describedby="helpId" value=<?php echo $tgl_pergi ?>
									placeholder="" id="tgl_pergi">
							</div>
						</div>
						<div class="col-sm-2">
							<label for="">Tanggal Pulang</label>

						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="date" readonly class="form-control" name="tgl_pulang" 
									aria-describedby="helpId" placeholder="" id="tgl_pulang" required value=<?php echo $tgl_pergi ?>>
							</div>
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Instansi</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="instansi" id="instansi" rows="1" required ><?php echo $instansi; ?></textarea>
						</div>
					</div>

				</div><div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">Mata Anggaran</label>

						</div>
						<div class="col-sm-10">
						<textarea class="form-control" name="mata_anggaran" id="mata_anggaran" rows="1" required ><?php echo $mata_anggaran; ?></textarea>
						</div>
					</div>

				</div>
				<div class "form-group" align=center>
                <button type="reset" name='batals' id='batals' class="btn btn-danger">Batal</button>
				    
                <button type="submit" name='btn_simpan' id=btn_simpan class="btn btn-primary">Simpan</button>
				</div>
			</form>
			<br>
		
<?php 
	if($this->input->get('n')){
				echo"<form class='form-horizontal' id='editsub' action='";echo base_url();echo "sppd/dtl_insert' method='post' enctype='multipart/form-data' >";			
		?>
		<input type="hidden" required class="form-control" id="nosppd" name="nosppd"  value=<?php echo $no_sppd; ?>>
								
				<div class="form-group">
					<div class=row>
						<div class="col-sm-2">
							<label for="">NIP</label>

						</div>
						<div class="col-sm-4">
							<select class="form-control" name="nip2" id="nip2" required>
								<option value="pilih">-- SILAHKAN PILIH NIP --</option>
								<?php 
								
								foreach ($nipp as $pgw):
									echo "<option value='$pgw->nip'>$pgw->nip</option>";
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
						<th>ACTION</th>
						
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
					echo"<td>
					<a class='fa fa-trash' onclick='return checkDelete()' href='";base_url();echo"../sppd/dlt_dtl_sppd?n=$a->dtl_sppd&r=$no_sppd' style='color:red'></a>";
					echo"</td>";
                    
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
  loadnip();
});

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

$('#no_spt').on('change', function() {
  alert( this.value );
  //$("#nama").val('tres');      
  loadspt();
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
			// alert(result);
			var d=$.parseJSON(result);
			// alert(d[0]);
			$("#nip").val(d[0].nip);
			$("#nospt").val(d[0].no_spt);
			$("#nama").val(d[0].nama);
			$("#jabatan").val(d[0].jabatan);
			if(d[0].jabatan=="KEPALA BADAN"){
				$("#pejabat_perintah").val("Sekretaris Daerah Kabupaten Hulu Sungai Selatan");
			}else{
				$("#pejabat_perintah").val("Kepala BKD, Diklat Kab. HSS");
			}
			$("#pangkat").val(d[0].pangkat);
			$("#tujuan_untuk").val(d[0].tujuan_untuk);
			$("#tempat_tujuan").val(d[0].tempat_tujuan);
			tp=Date.parse(d[0].tgl_pergi);
			td=Date.parse(d[0].tgl_pulang);
			pd=td+1-tp;
			$("#lama_pd").val(pd);
			$("#tgl_pergi").val(d[0].tgl_pergi);
			$("#tgl_pulang").val(d[0].tgl_pulang);             
			
        } 
    });
}
function loadnip() {
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
</script>
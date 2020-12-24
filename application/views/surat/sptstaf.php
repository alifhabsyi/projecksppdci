<?php
$nama1 = $this->session->userdata("nama");
if (is_null($nama1))
{
	redirect(base_url('login/salah'));
}
else
{
 // var_dump($nip);var_dump($spt);exit;
foreach($nip as $a):

	$nama=$a->nama;
	$nip_admin=$a->nip_admin;
	$pangkat=$a->pangkat;
	$jabatan_admin=$a->jabatan_admin;
	endforeach;
	if ($jabatan_admin=="KEPALA BKD"){
		foreach($namasekda as $a):

			$namakep=$a->nama;
			$nipkep=$a->nip_admin;
			$pangkatkep=$a->pangkat;
			$jabatankep=$a->jabatan_admin;
			$golongankep=$a->golongan;
			endforeach;
	}
	else{
		foreach($namakepala as $a):

			$namakep=$a->nama;
			$nipkep=$a->nip_admin;
			$pangkatkep=$a->pangkat;
			$jabatankep=$a->jabatan_admin;
			$golongankep=$a->golongan;
			endforeach;
	}
	foreach($spt as $s):
		$nospt=$s->no_spt;
		$dasar=$s->dasar;
		$tanggal=date("d M Y", strtotime($s->tanggal));
		$tujuan_untuk=$s->tujuan_untuk;
		$tempat=$s->tempat;
		$dibuat_tgl=date("d M Y", strtotime($s->dibuat_tgl));
		$dibuat_oleh=$s->dibuat_oleh;
		endforeach;
	// var_dump($surat);

?>
<html>
<head>
<title>D:\uploadedFiles\e5fa72ba27f53ad27bdb7bbfca9a5a3-7547a613bb63baf\p1e77a4fnpllm8pf1mr61ud215to4.pdf</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 22.6px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
-->
</style>
</head>
<body>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="<?php echo base_url().'plugins/surat/sptstaf/page_001.jpg'?>" height="1100" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_254:72" style="top:72;left:254">
<span id="_18.8" style="font-weight:bold; font-family:Times New Roman; font-size:18.8px; color:#000000">
PEMERINTAH KABUPATEN HULU SUNGAI SELATAN</span>
</div>
<div class="pos" id="_246:95" style="top:95;left:246">
<span id="_24.1" style="font-weight:bold; font-family:Times New Roman; font-size:24.1px; color:#000000">
BADAN KEPEGAWAIAN DAERAH, DIKLAT</span>
</div>
<div class="pos" id="_322:122" style="top:122;left:322">
<span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
Jalan Panglima Batur No.33 KANDANGAN 71211</span>
</div>
<div class="pos" id="_320:141" style="top:141;left:320">
<span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
E-mail : kantor@bkddiklat.hulusungaiselatan.go.id</span>
</div>
<div class="pos" id="_325:160" style="top:160;left:325">
<span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
Website : http://bkddiklat.hulusungaiselatan.go.id<span style="font-style:italic; color:#ff0000"><a href="http://bkddiklat.hulusungaiselatan.go.id/"> </span></span>
</div>
<div class="pos" id="_373:180" style="top:180;left:373">
<span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
</a>Telp. (0517) 21146 Fax. (0517) 22650</span>
</div>
<div class="pos" id="_296:237" style="top:237;left:296">
<span id="_20.5" style="font-weight:bold; font-family:Times New Roman; font-size:20.5px; color:#000000">
<U>S</U><U>U</U><U>R</U><U>A</U><U>T</U><U> </U><U>P</U><U>E</U><U>R</U><U>I</U><U>N</U><U>T</U><U>A</U><U>H</U><U> </U><U>T</U><U>U</U><U>G</U><U>A</U><U>S</U></span>
</div>
<div class="pos" id="_345:269" style="top:269;left:345">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
Nomor : <?php echo $nospt; ?></span>
</div>
<div class="pos" id="_100:308" style="top:308;left:100">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
Dasar</span>
</div>
<div class="pos" id="_175:308" style="top:308;left:155">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
:</span>
</div>
<div class="pos" id="_229:308" style="top:308;left:229">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
<?php echo $dasar ?> </span>
</div>
<div class="pos" id="_349:387" style="top:387;left:349">
<span id="_15.2" style="font-weight:bold; font-family:Times New Roman; font-size:15.2px; color:#000000">
MEMERINTAHKAN :</span>
</div>
<div class="pos" id="_100:426" style="top:426;left:100">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
Kepada   :</span>
</div>
<div class="pos" id="_229:426" style="top:426;left:229">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
Nama </span>
</div>
<div class="pos" id="_359:426" style="top:426;left:359">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
:</span>
</div>
<div class="pos" id="_385:426" style="top:426;left:385">
<span id="_15.4" style=" font-family:Times New Roman; font-size:15.4px; color:#000000">
<?php echo $nama ?></span>
</div>
<div class="pos" id="_229:445" style="top:445;left:229">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
N I P</span>
</div>
<div class="pos" id="_359:445" style="top:445;left:359">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
:</span>
</div>
<div class="pos" id="_385:445" style="top:445;left:385">
<span id="_17.1" style=" font-family:Times New Roman; font-size:17.1px; color:#000000">
<?php echo $nip_admin ?></span>
</div>
<div class="pos" id="_229:465" style="top:465;left:229">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
Pangkat/Gol. R</span>
</div>
<div class="pos" id="_359:465" style="top:465;left:359">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
:</span>
</div>
<div class="pos" id="_385:465" style="top:465;left:385">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
<?php echo $pangkat ?></span>
</div>
<div class="pos" id="_229:484" style="top:484;left:229">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
Jabatan</span>
</div>
<div class="pos" id="_359:484" style="top:484;left:359">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
:</span>
</div>
<div class="pos" id="_385:484" style="top:484;left:385">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
<?php echo $jabatan_admin ?></span></span>
</div>
<div class="pos" id="_100:523" style="top:523;left:100">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
Untuk  : <?php echo $tujuan_untuk ?> </span>
</div>
<div class="pos" id="_114:611" style="top:611;left:114">
<span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
Akan dilaksanakan pada</span>
</div>
<div class="pos" id="_114:650" style="top:650;left:114">
<span id="_17.3" style=" font-family:Times New Roman; font-size:17.3px; color:#000000">
Hari/Tanggal</span>
</div>
<div class="pos" id="_239:650" style="top:650;left:239">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
: <?php echo $tanggal ?> </span>
</div>
<div class="pos" id="_114:686" style="top:686;left:114">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
Tempat</span>
</div>
<div class="pos" id="_239:686" style="top:686;left:239">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
: <?php echo $tempat ?> </span>
</div>
<div class="pos" id="_114:729" style="top:729;left:114">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
Demikian Surat Tugas ini diberikan untuk dipergunakan sebagaimana mestinya.</span>
</div>
<div class="pos" id="_534:795" style="top:795;left:534">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
  Ditetapkan di Kandangan</span>
</div>
<div class="pos" id="_534:814" style="top:814;left:534">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
  Pada tanggal  <?php echo $dibuat_tgl ?></span>
</div>
<div class="pos" id="_570:850" style="top:835;left:542">

<span id="_15.1" style=" font-family:Times New Roman; font-size:15.1px; color:#000000"><?php if($jabatan_admin=="KEPALA BKD"){echo "SEKRETARIS DAERAH
</br>KABUPATEN HULU SUNGAI SELATAN,";}else{echo "KEPALA BADAN";}?>,
</span>

</div>
<div class="pos" id="_542:931" style="top:931;left:542">
<span id="_15.1" style="font-weight:bold; font-family:Times New Roman; font-size:15.1px; color:#000000"><?php echo $namakep ?></span>
</div>
<div class="pos" id="_556:950" style="top:950;left:542">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000"><?php echo $golongankep ?></span>
</div>
<div class="pos" id="_529:970" style="top:970;left:542">
<span id="_16.7" style=" font-family:Times New Roman; font-size:16.7px; color:#000000">
NIP. <?php echo $nipkep ?></span>
</div>
</nowrap></nobr>
</body>
</html>

<?php
} ?>

<?php
 header("Content-type: application/vnd.ms-word");
 header("Content-Disposition: attachment; Filename=yourcoolwordfile.doc");
$nama="";
foreach($nipp as $a):
		
	$nama=$a->nama;
	endforeach;
	// var_dump($surat);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url().'plugins/surat/base.min.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url().'plugins/surat/fancy.min.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url().'plugins/surat/main.css'?>"/>
<script src="<?php echo base_url().'plugins/surat/compatibility.min.js'?>"></script>
<script src="<?php echo base_url().'plugins/surat/theViewer.min.js'?>"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url().'plugins/surat/bg1.png'?>"/><div class="t m0 x0 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">SURAT PERNYATAAN BELUM PERNAH MENIKAH</div><div class="t m0 x1 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Yang bertanda tangan dibawah ini :</div><div class="t m0 x2 h3 y3 ff2 fs0 fc0 sc0 ls0 ws0">Nama<span class="_ _0"> </span>:<span class="_ _1"> </span><?php echo $nama ?></div><div class="t m0 x2 h3 y4 ff2 fs0 fc0 sc0 ls0 ws0">Tempat/tgl lahir<span class="_ _2"> </span>:<span class="_ _1"> </span>KANDANGAN, 26 NOVEMBER 1997</div><div class="t m0 x2 h3 y5 ff2 fs0 fc0 sc0 ls0 ws0">Suku<span class="_ _3"> </span>:<span class="_ _1"> </span>BANJAR</div><div class="t m0 x2 h3 y6 ff2 fs0 fc0 sc0 ls0 ws0">Agama<span class="_ _4"> </span>:<span class="_ _1"> </span>ISLAM</div><div class="t m0 x2 h3 y7 ff2 fs0 fc0 sc0 ls0 ws0">Alamat<span class="_ _5"> </span>:<span class="_ _1"> </span>JL. H. M. YUSI GG.TANDUI RT. 03 RW. 02, GAMBAH </div><div class="t m0 x3 h3 y8 ff2 fs0 fc0 sc0 ls0 ws0">LUAR MUKA, KANDANGAN</div><div class="t m0 x2 h3 y9 ff2 fs0 fc0 sc0 ls0 ws0">Dengan <span class="_ _6"> </span>ini <span class="_ _6"> </span>menyatakan, <span class="_ _6"> </span>bahwa <span class="_ _6"> </span>saya <span class="_ _6"> </span>belum <span class="_ _6"> </span>pernah <span class="_ _6"> </span>menikah <span class="_ _6"> </span>dan <span class="_ _6"> </span>tidak <span class="_ _6"> </span>akan <span class="_ _6"> </span>menikah </div><div class="t m0 x1 h3 ya ff2 fs0 fc0 sc0 ls0 ws0">selama dalam <span class="_ _7"></span>pendidikan pembentukan <span class="_ _7"></span>Polri sampai <span class="_ _7"></span>dengan waktu <span class="_ _7"></span>yang dipersyaratkan <span class="_ _7"></span>menurut </div><div class="t m0 x1 h3 yb ff2 fs0 fc0 sc0 ls0 ws0">ketentuan.</div><div class="t m0 x2 h3 yc ff2 fs0 fc0 sc0 ls0 ws0">Surat pernyataan <span class="_ _7"></span>ini saya <span class="_ _7"></span>buat dengan <span class="_ _7"></span>sebenarnya dan <span class="_ _7"></span>penuh kesadaran, <span class="_ _7"></span>untuk memenuhi </div><div class="t m0 x1 h3 yd ff2 fs0 fc0 sc0 ls0 ws0">persyaratan menjadi Anggota Polri.</div><div class="t m0 x1 h3 ye ff2 fs0 fc0 sc0 ls0 ws0">           Mengetahui<span class="_ _8"> </span>KANDANGAN, 1 APRIL 2020</div><div class="t m0 x1 h3 yf ff2 fs0 fc0 sc0 ls0 ws0">        Orang tua / wali<span class="_ _9"> </span>yang menyatakan,</div><div class="t m0 x1 h3 y10 ff2 fs0 fc0 sc0 ls0 ws0">             ARBAIN<span class="_ _a"> </span>      MUHAMMAD ALIEF HABSYI</div><div class="t m0 x4 h3 y11 ff2 fs0 fc0 sc0 ls0 ws0">Mengetahui</div><div class="t m0 x5 h3 y12 ff2 fs0 fc0 sc0 ls0 ws0">Kepala Desa</div><div class="t m0 x6 h3 y13 ff2 fs0 fc0 sc0 ls0 ws0">HJ. NURIA FARIDA</div><div class="c x7 y14 w2 h4"><div class="t m0 x8 h5 y15 ff3 fs1 fc0 sc0 ls0 ws0">MATERAI</div><div class="t m0 x9 h5 y16 ff3 fs1 fc0 sc0 ls0 ws0">6.000,-</div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
<script>
		// window.print();
	</script>
</html>

<?php
$nama1 = $this->session->userdata("nama");
if (is_null($nama1)) {
	redirect(base_url('login/salah'));
} else {
	$nama = "";
	//var_dump($sppd);exit;
	//foreach($sppd as $a):

	//$nama=$a->nama;
	//endforeach;
	// var_dump($surat);

	$nama = "";
	$nipp = "";
	$pangkat = "";
	$no_sppd = "";
	$pejabat_perintah = "";
	$pangkat = "";
	$jabatan = "";
	$tujuan_untuk = "";
	$jenis_angkutan = "";
	$dari = "";
	$tempat_tujuan = "";
	$lama_pd = "";
	$tgl_pergi = "";
	$tgl_pulang = "";
	$instansi = "";
	$mata_anggaran = "";
	$dibuat_tgl = "";
	$tglbuat = "";
	foreach ($nip as $a) :

		$nama = $a->nama;
		$nipp = $a->nip_admin;
		$pangkat = $a->pangkat;

	endforeach;
	foreach ($sppd as $b) :

		$no_sppd = $b->no_sppd;
		$pejabat_perintah = $b->pejabat_perintah;
		$pangkat = $b->pangkat;
		$jabatan = $b->jabatan;
		$tujuan_untuk = $b->tujuan_untuk;
		$jenis_angkutan = $b->jenis_angkutan;
		$dari = $b->dari;
		$tempat_tujuan = $b->tempat_tujuan;
		$lama_pd = $b->lama_pd;
		$tgl_pergi = $b->tgl_pergi;
		$tgl_pulang = $b->tgl_pulang;
		$instansi = $b->instansi;
		$mata_anggaran = $b->mata_anggaran;
		$dibuat_tgl = $b->dibuat_tgl;
		$tglbuat = $b->dibuat_tgl;
	endforeach;
?>
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta charset="utf-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="<?php echo base_url() . 'plugins/surat/sppdkabad/base.min.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url() . 'plugins/surat/sppdkabad/fancy.min.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url() . 'plugins/surat/sppdkabad/main.css' ?>" />
		<script src="<?php echo base_url() . 'plugins/surat/sppdkabad/compatibility.min.js' ?>"></script>
		<script src="<?php echo base_url() . 'plugins/surat/sppdkabad/theViewer.min.js' ?>"></script>
		<script>
			try {
				theViewer.defaultViewer = new theViewer.Viewer({});
			} catch (e) {}
		</script>
		<title></title>
	</head>

	<body>
		<div id="sidebar">
			<div id="outline">
			</div>
		</div>
		<div id="page-container">
			<div id="pf1" class="pf w0 h0" data-page-no="1">
				<div class="pc pc1 w0 h0">
					<img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url() . 'plugins/surat/sppdkabad/bg1.png' ?>" />
					<div class="c x1 y1 w2 h2">
						<div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN HULU SUNGAI SELATAN</div>
					</div>
					<div class="c x3 y1 w3 h2">
						<div class="t m0 x4 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">I</div>
					</div>
					<div class="c x5 y1 w4 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SPD Nomor</div>
					</div>
					<div class="c x7 y1 w5 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: 090/ 521 / BKD, Diklat</div>
					</div>
					<div class="c x1 y3 w2 h4">
						<div class="t m0 x8 h5 y4 ff2 fs0 fc0 sc0 ls0 ws0">SEKRETARIAT DAERAH </div>
					</div>
					<div class="c x5 y3 w4 h4">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Berangkat dari</div>
					</div>
					<div class="c x7 y3 w6 h4">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">: Kandangan</div>
					</div>
					<div class="c x1 y5 w2 h6">
						<div class="t m0 x9 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Jl. Pangeran Antasari no. 1 Telp. (0517)21076 Kandangan 71211</div>
					</div>
					<div class="c x5 y5 w5 h6">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">(Tempat Kedudukan)</div>
					</div>
					<div class="c x5 y6 w4 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x7 y6 w6 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">: 17 Oktober 2019</div>
					</div>
					<div class="c xa y7 w7 h8">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Lembar ke</div>
					</div>
					<div class="c xb y7 w8 h8">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x5 y7 w9 h8">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Ke</div>
					</div>
					<div class="c x7 y7 wa h8">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: Jakarta</div>
					</div>
					<div class="c xa y8 w7 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Kode Nomor</div>
					</div>
					<div class="c xb y8 w8 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c xa y9 w7 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Nomor</div>
					</div>
					<div class="c xb y9 w8 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c xc y9 wb h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">090 / 521 / BKD, Diklat</div>
					</div>
					<div class="c x3 y9 wc h7">
						<div class="t m0 xd h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Pejabat Pelaksana Teknis Kegiatan,</div>
					</div>
					<div class="c x1 ya w2 h9">
						<div class="t m0 xe h5 y2 ff2 fs0 fc0 sc0 ls0 ws0">SURAT PERINTAH PERJALANAN DINAS</div>
					</div>
					<div class="c x1 yb wd ha">
						<div class="t m0 xf h3 yc ff1 fs0 fc0 sc0 ls0 ws0">1.</div>
					</div>
					<div class="c x10 yb we ha">
						<div class="t m0 x6 h3 yc ff1 fs0 fc0 sc0 ls0 ws0">Pejabat yang memberi perintah</div>
					</div>
					<div class="c x11 yb wf ha">
						<div class="t m0 x6 h3 yc ff1 fs0 fc0 sc0 ls0 ws0">Sekretaris Daerah Kabupaten Hulu Sungai Selatan</div>
					</div>
					<div class="c x3 yd wc h9">
						<div class="t m0 x12 h3 ye ff1 fs0 fc0 sc0 ls0 ws0">SITI MAHMUDAH, SE</div>
					</div>
					<div class="c x3 yb wc h2">
						<div class="t m0 x13 h3 yf ff1 fs0 fc0 sc0 ls0 ws0">NIP. 19770526 200701 2 013</div>
					</div>
					<div class="c x1 y10 wd hb">
						<div class="t m0 xf h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">2.</div>
					</div>
					<div class="c x10 y10 we hb">
						<div class="t m0 x6 h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">Nama / NIP Pegawai yang diperintah</div>
					</div>
					<div class="c x11 y10 wf hb">
						<div class="t m0 x6 h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">H. ZULKIPLI, S. Sos, M.AP / 19710711 199101 1 002</div>
					</div>
					<div class="c x14 y10 w3 h2">
						<div class="t m0 x15 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">II</div>
					</div>
					<div class="c x16 y10 w9 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tiba di</div>
					</div>
					<div class="c x17 y10 w10 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: Jakarta</div>
					</div>
					<div class="c x5 y10 w4 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Berangkat dari</div>
					</div>
					<div class="c x7 y10 wa h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: Jakarta</div>
					</div>
					<div class="c x16 y12 w11 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x17 y12 w12 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: 17 Oktober 2019</div>
					</div>
					<div class="c x5 y12 w9 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Ke</div>
					</div>
					<div class="c x7 y12 w6 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: Kandangan</div>
					</div>
					<div class="c x1 y13 wd h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">3.</div>
					</div>
					<div class="c x10 y13 w13 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x18 y13 w14 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pangkat dan Gol. Ruang Gaji menurut</div>
					</div>
					<div class="c x11 y13 w15 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x19 y13 w16 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pembina Utama Muda, IV/c</div>
					</div>
					<div class="c x5 y13 w4 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x7 y13 w6 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: 18 Oktober 2019</div>
					</div>
					<div class="c x18 y14 w14 h4">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">PP No. 6 Tahun 1997</div>
					</div>
					<div class="c x10 y15 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x18 y15 w9 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Jabatan</div>
					</div>
					<div class="c x11 y15 w15 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x19 y15 w17 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Kepala BKD, Diklat Kab. HSS</div>
					</div>
					<div class="c x14 y15 w18 h9">
						<div class="t m0 x1a h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . .</div>
					</div>
					<div class="c x3 y15 wc h9">
						<div class="t m0 x1b h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . .</div>
					</div>
					<div class="c x10 y16 w13 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">c.</div>
					</div>
					<div class="c x18 y16 w14 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tingkat Biaya Perjalanan Dinas</div>
					</div>
					<div class="c x11 y16 w15 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">c</div>
					</div>
					<div class="c x19 y16 w19 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tingkat D</div>
					</div>
					<div class="c x1 y17 wd h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">4.</div>
					</div>
					<div class="c x10 y17 we h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Maksud perjalanan dinas</div>
					</div>
					<div class="c x11 y18 wf hc">
						<div class="t m0 x6 h3 y19 ff1 fs0 fc0 sc0 ls0 ws0">Menghadiri Rapat Koordinasi Persiapan Pengadaan CPNS Tahun</div>
						<div class="t m0 x6 h3 y1a ff1 fs0 fc0 sc0 ls0 ws0">2019</div>
					</div>
					<div class="c x14 y18 w18 hd">
						<div class="t m0 x1c h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . . . . . .</div>
					</div>
					<div class="c x3 y18 wc hd">
						<div class="t m0 x1d h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . . . . . .</div>
					</div>
					<div class="c x1 y1b wd hb">
						<div class="t m0 x6 h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">5. </div>
					</div>
					<div class="c x10 y1b we hb">
						<div class="t m0 x6 h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">Alat Angkutan Yang digunakan</div>
					</div>
					<div class="c x11 y1b wf hb">
						<div class="t m0 x6 h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">Angkutan Darat dan Angkutan Udara</div>
					</div>
					<div class="c x1 y1d wd h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">6.</div>
					</div>
					<div class="c x10 y1d w13 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x18 y1d w14 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tempat Berangkat</div>
					</div>
					<div class="c x11 y1d w15 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x19 y1d w19 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Kandangan</div>
					</div>
					<div class="c x14 y1d w3 h2">
						<div class="t m0 xf h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">III</div>
					</div>
					<div class="c x16 y1d w9 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tiba di</div>
					</div>
					<div class="c x17 y1d w10 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x1e y1d w9 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
					</div>
					<div class="c x5 y1d w4 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Berangkat dari</div>
					</div>
					<div class="c x7 y1d wa h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x10 y1e w13 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x18 y1e w4 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Tempat Tujuan</div>
					</div>
					<div class="c x11 y1e w15 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x19 y1e w1a h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Jakarta</div>
					</div>
					<div class="c x16 y1e w11 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x17 y1e w10 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x5 y1e w9 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Ke</div>
					</div>
					<div class="c x7 y1e wa h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x5 y1f w4 he">
						<div class="t m0 x6 h3 y20 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x7 y21 wa hf">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x7 y1f wa h2">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c x1 y22 wd h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">7.</div>
					</div>
					<div class="c x10 y22 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x18 y22 w14 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Lamanya Perjalanan Dinas</div>
					</div>
					<div class="c x11 y22 w15 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x19 y22 w19 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">2 (dua) hari</div>
					</div>
					<div class="c x10 y23 w13 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x18 y23 w14 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tanggal Berangkat</div>
					</div>
					<div class="c x11 y23 w15 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x19 y23 w1b h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">17 Oktober 2019</div>
					</div>
					<div class="c x10 y24 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">c.</div>
					</div>
					<div class="c x18 y24 w14 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tanggal harus kembali/tiba ditempat baru*)</div>
					</div>
					<div class="c x11 y24 w15 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">c.</div>
					</div>
					<div class="c x19 y24 w1b h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">18 Oktober 2019</div>
					</div>
					<div class="c x14 y24 w18 h9">
						<div class="t m0 x1a h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . .</div>
					</div>
					<div class="c x3 y24 wc h9">
						<div class="t m0 x1b h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . .</div>
					</div>
					<div class="c x1 y25 wd h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">8.</div>
					</div>
					<div class="c x10 y25 w1c h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pengikut :</div>
					</div>
					<div class="c x1f y25 w1d h2">
						<div class="t m0 x13 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Nama</div>
					</div>
					<div class="c x20 y25 w1e h2">
						<div class="t m0 x21 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tanggal Lahir</div>
					</div>
					<div class="c xc y25 w1f h2">
						<div class="t m0 x22 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Keterangan</div>
					</div>
					<div class="c x10 y26 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">1.</div>
					</div>
					<div class="c x10 y27 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">2.</div>
					</div>
					<div class="c x10 y28 w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">3.</div>
					</div>
					<div class="c x1 y29 wd h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">9.</div>
					</div>
					<div class="c x10 y29 we h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Pembebanan Anggaran :</div>
					</div>
					<div class="c x10 y2a w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x18 y2a w9 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Instansi</div>
					</div>
					<div class="c x11 y2a w15 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">a.</div>
					</div>
					<div class="c x19 y2a w17 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">BKD, Diklat Kab. HSS</div>
					</div>
					<div class="c x14 y2a w18 h9">
						<div class="t m0 x1c h5 y4 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . . . . . .</div>
					</div>
					<div class="c x3 y2a wc h9">
						<div class="t m0 x1d h5 y4 ff2 fs0 fc0 sc0 ls0 ws0"> . . . . . . . . .</div>
					</div>
					<div class="c x10 y2b w13 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x18 y2b w4 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Mata Anggaran</div>
					</div>
					<div class="c x11 y2b w15 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">b.</div>
					</div>
					<div class="c x19 y2b w19 h9">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">5.2.2.15.02</div>
					</div>
					<div class="c x1 y2c w20 h10">
						<div class="t m0 x6 h3 y2d ff1 fs0 fc0 sc0 ls0 ws0">10. Keterangan Lain-lain</div>
					</div>
					<div class="c x14 y2e w3 h2">
						<div class="t m0 xf h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">IV</div>
					</div>
					<div class="c x16 y2e w11 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tiba Kembali di</div>
					</div>
					<div class="c x17 y2e w12 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">: Kandangan</div>
					</div>
					<div class="c x19 y2f w21 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Dikeluarkan di</div>
					</div>
					<div class="c xb y2f w8 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c xc y2f w22 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Kandangan</div>
					</div>
					<div class="c x16 y2f w11 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Pada tanggal</div>
					</div>
					<div class="c x17 y2f w12 h7">
						<div class="t m0 x6 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">: 18 Oktober 2019</div>
					</div>
					<div class="c x19 y30 w1a h11">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Tanggal</div>
					</div>
					<div class="c xb y30 w8 h11">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">:</div>
					</div>
					<div class="c xc y30 w22 h11">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">14 Oktober 2019</div>
					</div>
					<div class="c x16 y31 w23 h12">
						<div class="t m0 x6 h3 y32 ff1 fs0 fc0 sc0 ls0 ws0">Telah<span class="_ _0"></span> <span class="_ _0"></span>diperiksa<span class="_ _0"></span> <span class="_ _0"></span>dgn<span class="_ _0"></span> <span class="_ _0"></span>keterangan<span class="_ _0"></span> <span class="_ _0"></span>bhw<span class="_ _0"></span> <span class="_ _0"></span>perjalanan<span class="_ _0"></span> <span class="_ _0"></span>tersebut<span class="_ _0"></span> <span class="_ _0"></span>diatas<span class="_ _0"></span> <span class="_ _0"></span>benar-benar<span class="_ _0"></span> <span class="_ _0"></span>dilakukan<span class="_ _0"></span> <span class="_ _0"></span>atas<span class="_ _0"></span> <span class="_ _0"></span>perintahnya<span class="_ _0"></span> <span class="_ _0"></span>&amp;</div>
						<div class="t m0 x6 h3 y33 ff1 fs0 fc0 sc0 ls0 ws0">semata-mata utk kepentingan jabatan dlm waktu yang sesingkat - singkatnya.</div>
					</div>
					<div class="c x19 y34 w24 h9">
						<div class="t m0 x23 h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> Sekretaris Daerah Kab. HSS</div>
					</div>
					<div class="c x14 y34 w25 h9">
						<div class="t m0 x24 h5 y2 ff2 fs0 fc0 sc0 ls0 ws0">Kepala BKD, Diklat</div>
					</div>
					<div class="c x19 y35 w24 h9">
						<div class="t m0 x25 h5 y2 ff2 fs0 fc0 sc0 ls0 ws0"> </div>
					</div>
					<div class="c x19 y36 w24 h9">
						<div class="t m0 x0 h5 y4 ff2 fs0 fc0 sc0 ls0 ws0">Drs. H. MUHAMMAD NOOR, M.AP</div>
					</div>
					<div class="c x14 y36 w25 h9">
						<div class="t m0 x26 h5 y4 ff2 fs0 fc0 sc0 ls0 ws0">H. ZULKIPLI, S.Sos, M.AP</div>
					</div>
					<div class="c x19 y37 w24 h2">
						<div class="t m0 x27 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Pembina Utama Madya</div>
					</div>
					<div class="c x14 y37 w25 h2">
						<div class="t m0 x28 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">NIP. 19710711 199101 1 002</div>
					</div>
					<div class="c x19 y38 w24 h9">
						<div class="t m0 x29 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">NIP. 19660919 198602 1 004</div>
					</div>
					<div class="c x14 y38 w3 h9">
						<div class="t m0 x6 h3 y39 ff1 fs0 fc0 sc0 ls0 ws0">V</div>
					</div>
					<div class="c x16 y38 w26 h9">
						<div class="t m0 x6 h3 y39 ff1 fs0 fc0 sc0 ls0 ws0">CATATAN LAIN-LAIN</div>
					</div>
					<div class="c x14 y3a w27 h2">
						<div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">VI PERHATIAN :</div>
					</div>
					<div class="c x16 y3b w23 h13">
						<div class="t m0 x6 h3 y3c ff1 fs0 fc0 sc0 ls0 ws0">Pejabat <span class="_ _0"></span>yang <span class="_ _0"></span>berwenang<span class="_ _0"></span> menerbitkan<span class="_ _0"></span> SPD<span class="_ _0"></span> Pegawai<span class="_ _0"></span> <span class="_ _0"></span>yang <span class="_ _0"></span>melakukan <span class="_ _0"></span>Perjalanan<span class="_ _0"></span> Dinas<span class="_ _0"></span> para<span class="_ _0"></span> Pejabat<span class="_ _0"></span> <span class="_ _0"></span>yang</div>
						<div class="t m0 x6 h3 y3d ff1 fs0 fc0 sc0 ls0 ws0">mengesahkan<span class="_ _1"> </span> <span class="_ _1"> </span>tanggal<span class="_ _1"> </span> <span class="_ _1"> </span>berangkat\tiba<span class="_ _1"> </span> <span class="_ _1"> </span>serta<span class="_ _1"> </span> <span class="_ _1"> </span>Bendaharawan<span class="_ _1"> </span> <span class="_ _1"> </span>bertanggung<span class="_ _1"> </span> <span class="_ _1"> </span>jawab<span class="_ _1"> </span> <span class="_ _1"> </span>berdasarkan<span class="_ _1"> </span> <span class="_ _1"> </span>Peraturan-</div>
						<div class="t m0 x6 h3 y3e ff1 fs0 fc0 sc0 ls0 ws0">Peraturan Keuangan Negara apabila Negara menderita rugi akibat kesalahan dan kealpaan.</div>
					</div>
				</div>
				<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
			</div>
		</div>
		<div class="loading-indicator">

		</div>
	</body>

	</html>
<?php } ?>
<?php

$no_spt = $_POST['no_spt'];
$nip = $_POST['nip'];
 $tujuan = $_POST['tujuan'];
 $tanggal = $_POST['tanggal'];
 $tempat = $_POST['tempat'];
 $dibuat_oleh =$_POST['dibuat_oleh'];
 $dibuat_tgl =$_POST['dibuat_tgl'];
 $document = file_get_contents("SPTpgw.rtf");
 $document = str_replace("#no_spt", $no_spt, $document);
 $document = str_replace("#nip", $nip, $document);
 $document = str_replace("#tujuan", $tujuan, $document);
 $document = str_replace("#tanggal", $tanggal, $document);
 $document = str_replace("#tempat", $tempat, $document);
 $document = str_replace("#dibuat_oleh", $dibuat_oleh, $document);
 $document = str_replace("#dibuat_tgl", $dibuat_tgl, $document);
header("Content-type: application/msword");
header("Content-disposition: inline; filename=sptpegawai.doc");
header("Content-length: ".strlen($document));
echo $document;
?>

<?php
$nospt="";
$dasar="";
$untuk="";
$tanggal="";
$hari="";
$tgl="";
$namakep="";
$nipkep="";
$golongankep="";
$nipkep="";
$i="";
$tempat_tujuan="";

foreach($spt as $t):
    // var_dump($terus);
    $nospt=$t->no_spt;
    $dasar=$t->dasar;
    $untuk=$t->tujuan_untuk;
    $tempat_tujuan=$t->tempat_tujuan;
    
    $tanggal=date("d M Y", strtotime($t->tgl_pergi));
    $hari=date("D", strtotime($t->tgl_pergi));
endforeach;
foreach($namakepala as $k):
    // var_dump($terus);
    $namakep=$k->nama;
    $golongankep=$k->golongan;
    $nipkep=$k->nip_admin;
endforeach;

    
?>

<table  width=100% style='border-collapse: collapse;' >
    <tr>
        <td>
            <img src="/sppd/assets/logohss.png" height="150px" >
        </td>
        <td colspan=2  align=center style="line-height;0pt">
        <b style="font-size:28px">PEMERINTAH KABUPATEN HULU SUNGAI SELATAN </br>
        BADAN KEPEGAWAIAN DAERAH,</b><br>
    
        <a style="font-size:22px">Jalan Panglima Batur No.33 KANDANGAN 71211 <br>
        E-mail : <b style="color:blue;">kantor@bkddiklat.hulusungaiselatan.go.id</b> </br>
        Website : <b style="color:blue;"">http://bkddiklat.hulusungaiselatan.go.id</b> </br>
        Telp. (0517) 21146 Fax. (0517) 22650</a>
        
        </td>
    </tr>
    
</table>
<hr>
</br>
<a style="font-size:18px">
<u><h2 align='center'><b>SURAT PERINTAH TUGAS</b></h2></u>
<br>
<p align Center>
    Nomor&nbsp; &nbsp;: <?php echo $nospt; ?>
</p>
<br>
Dasar &nbsp; &nbsp; : <?php echo $dasar ?>
<br>
<h3 align='center'>
    MEMERINTAHKAN :
</h3>
<br>
Kepada &nbsp; &nbsp; :
<br>
</a>
<table border=1  width=100% style='border-collapse: collapse;' border='1'>
    <tr>
        <th width=5%>
            NO
        </th>
        <th width=40%>
            NAMA / NIP
        </th>
        <th width=20%>
            PANGKAT / GOL
        </th>
        <th width=35%>
            JABATAN
        </th>
    </tr>
    <?php
    $i=0;
    foreach($dataspt as $a):
            $i++;    
    ?>
    <tr>
        
        <td style=""><?php echo $i; ?></td>
        <td style=""><?php echo $a->nama; ?></td>
        <td style=""><?php echo "$a->golongan / $a->pangkat"; ?></td>
        <td style=""><?php echo $a->jabatan_admin; ?></td>
        
       
    <?php              
    endforeach;

    ?>
</table>
<a style="font-size:18px">
<br>
Untuk &nbsp; &nbsp; : <?php echo $untuk ?>
<br><br>
Akan dilaksanakan pada
<br>
Hari / Tanggal &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo "$hari / $tanggal"; ?>
<br>
Tempat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo "$tempat_tujuan"; ?>
<br>
Demikian Surat Tugas ini diberikan untuk dipergunakan sebagaimana mestinya.
<br><br><br>
</a>
<table   width=100% style='border-collapse: collapse;' >
    <tr>
        <th width=30%>
            
        </th>
        <th width=30%>
            
        </th>
        <td width=35% style="font-size:18px">
            Ditetapkan di Kandangan,
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="font-size:18px">Pada tanggal <?php   echo date("d M Y"); ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="font-size:18px">KEPALA BADAN,</td>
    </tr>
   
</table>

<br><br><br><br>
<table   width=100% style='border-collapse: collapse;' >
    <tr>
        <th width=30%>
            
        </th>
        <th width=30%>
            
        </th>
        <td width=35% style="font-size:18px">
            <?php echo $namakep; ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="font-size:18px">
            <?php echo $golongankep; ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="font-size:18px">
            <?php echo $nipkep; ?>
        </td>
    </tr>
   
</table>

<script>
        window.print();
</script>
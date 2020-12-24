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
$nama1="";
$jabatan1="";
$gol1="";
$nip1="";

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
       SEKRETARIAT DAERAH,</b><br>
    
        <a style="font-size:22px">Jalan Pangeran Antasari  No.1  KANDANGAN  71211  <br>
        Telp. (0517) 21076</a>
        
        </td>
    </tr>
    
</table>
<hr >
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
<br>
</a>
<table  width=100% style='border-collapse: collapse;'>
    <tr>
        <td width=15%>
           
        </th>
        <td width=25%>
            
        </td>
        <td width=1%>
           
        </td>
        <td width=59%>
           
        </td>
        
    </tr>
    <?php
    $i=0;
    foreach($dataspt as $a):
        $nama1=$a->nama;   
        $nip1=$a->nip;   
        $gol1="$a->golongan / $a->pangkat"; 
        $jabatan1=$a->jabatan_admin;
               
    endforeach;
    ?>
    <tr>
        <td style="font-size:18px">Kepada &nbsp;&nbsp; :</td>
        <td style="font-size:18px">Nama </td>
        <td style="font-size:18px">:</td>
        <td style="font-size:18px"><?php echo $nama1 ?></td>
    </tr>
    
    <tr>
        <td></td>
        <td style="font-size:18px">NIP </td>
        <td style="font-size:18px">:</td>
        <td style="font-size:18px"><?php echo $nip1 ?></td>
    </tr>
    
    <tr>
        <td> </td>
        <td style="font-size:18px">Pangkat/Gol. R </td>
        <td style="font-size:18px">:</td>
        <td style="font-size:18px"><?php echo $gol1 ?></td>
    </tr>
    
    <tr>
        <td> </td>
        <td style="font-size:18px">Jabatan </td>
        <td style="font-size:18px">:</td>
        <td style="font-size:18px"><?php echo $jabatan1 ?></td>
    </tr>
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
        <td style="font-size:18px">SEKRETARIS DAERAH</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="font-size:18px">KABUPATEN HULU SUNGAI SELATAN,</td>
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
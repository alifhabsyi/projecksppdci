<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title ?></title>
<style type="text/css" media="screen">
body {
background-color: #EEE;
font-family: Arial;
}
.container {
width: 80%;
padding: 20px;
background-color: #fff;
min-height: 300px;
margin: 40px auto;
border-radius: 10px;
}
table {
border: solid thin #000;
border-collapse: collapse;
width: 100%;
}
tr {
border-collapse: collapse;
}
td,th {
padding: 6px 12px;
border-bottom: solid thin #EEE;
text-align: left;
}
</style>
</head>
<body>
<div class="container">
<p><a href="<?php echo base_url() ?>laporanexc/export">Export ke Excel</a></p>
<table>
<thead>
<tr>
<th width="5%">No</th>
<th>NIP</th>
<th>Nama</th>
<th>Jabatan</th>
<th>Jumlah</th>

</tr>
</thead>
<tbody>
<?php $i=1; foreach($nipp as $provinsi) { ?>
<tr>
<td><?php echo $i++ ?></td>
<td><?php echo $provinsi->nip_admin ?></td>
<td><?php echo $provinsi->nip_admin ?></td>
<td><?php echo $provinsi->nip_admin ?></td>
<td><?php echo $provinsi->nip_admin ?></td>

</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
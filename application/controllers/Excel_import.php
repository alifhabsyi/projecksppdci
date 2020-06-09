<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import  extends CI_Controller{

  public function __construct(){

    parent::__construct();

    $this->load->model('Excel_import_model');

    $this->load->library('Excel.php');

  }

  function index(){

    $this->load->view('pegawai/importpegawai');

  }

  function fetch(){

    $data = $this->Excel_import_model->select();

    $output = '

    <h3 align="center">Total Data - '.$data->num_rows().'</h3>

    <table class="table table-striped table-bordered">

     <tr>

     <th>NAMA PEJABAT</th>
                            <th>TIPE USER</th>
     <th>NIP</th>
                 <th>TEMPAT LAHIR</th>
                 <th>TANGGAL LAHIR</th>
                 <th>JENIS KELAMIN</th>
                 <th>PANGKAT</th>
                 <th>GOL / RUANG</th>
                 <th>TMT PANGKAT</th>
                 <th>JABATAN</th>
                 <th>TMT JABATAN</th>
                   <th>ESELON</th>
                 <th>MASA KERJA (TAHUN)</th>
                 <th>MASA KERJA (BULAN)</th>
                 <th>PENDIDIKAN</th>
                     <th>DIKLAT</th>
                         <th>SK CPNS</th>
                   <th>TMT BERKALA</th>
                     <th>TMT PENSIUN</th>
                       <th>UNIT KERJA</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>

     </tr>

    ';

    foreach($data->result() as $row){

      $output .= '

      <tr>
      <td>'.$row->nama.'</td>
      <td>'.$row->tipeuser.'</td>
      <td>'.$row->nip_admin.'</td>
      <td>'.$row->tempat_lahir.'</td>
      <td>'.$row->tgl_lahir.'</td>
      <td>'.$row->pangkat.'</td>
      <td>'.$row->golongan.'</td>
      <td>'.$row->tmt_pangkat.'</td>
      <td>'.$row->jabatan_admin.'</td>
      <td>'.$row->tmt_jabatan.'</td>
      <td>'.$row->masakerja_thn.'</td>
      <td>'.$row->masakerja_bln.'</td>
      <td>'.$row->pendidikan.'</td>
      <td>'.$row->diklat.'</td>
      <td>'.$row->sk_cpns.'</td>
      <td>'.$row->tmt_berkala.'</td>
      <td>'.$row->tmt_pensiun.'</td>
      <td>'.$row->unit_kerja.'</td>
      <td>'.$row->username.'</td>
      <td>'.$row->password.'</td>

      </tr>

      ';

    }

    $output .= '</table>';

    echo $output;

  }



  function import(){

    if(isset($_FILES["file"]["name"])){

      $path = $_FILES["file"]["tmp_name"];

      $object = PHPExcel_IOFactory::load($path);

      foreach($object->getWorksheetIterator() as $worksheet){

        $highestRow = $worksheet->getHighestRow();

        $highestColumn = $worksheet->getHighestColumn();

        for($row=2; $row<=$highestRow; $row++){

           $nama = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
           $tipeuser = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
           $nip_admin = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
           $tempat_lahir = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
           $tgl_lahir = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
           $kelamin = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
           $pangkat = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
           $golongan = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
           $tmt_pangkat = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
           $jabatan_admin = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
           $tmt_jabatan = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
           $eselon = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
           $masakerja_thn = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
           $masakerja_bln = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
           $pendidikan = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
           $diklat = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
            $sk_cpns= $worksheet->getCellByColumnAndRow(20, $row)->getValue();
            $tmt_berkala  = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
           $tmt_pensiun  = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
           $unit_kerja = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
           $username = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
           $password = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
           $data[] = array(

            'nama'  => $nama,
            'tipeuser'   => $tipeuser
            'nip_admin'  => $nip_admin,
            'tempat_lahir'   => $tempat_lahir
            'tgl_lahir'  => $tgl_lahir,
            'kelamin'   => $kelamin
            'pangkat'  => $pangkat,
            'golongan'   => $golongan
            'tmt_pangkat'  => $tmt_pangkat,
            'jabatan_admin'   => $jabatan_admin,
            'tmt_jabatan'  => $tmt_jabatan,
            'eselon'   => $eselon
            'masakerja_thn'  => $masakerja_thn,
            'masakerja_bln'   => $masakerja_bln,
            'pendidikan'  => $pendidikan,
            'diklat'   => $diklat,
              'sk_cpns'   => $sk_cpns,
            'tmt_berkala'  => $tmt_berkala,
            'tmt_pensiun'   => $tmt_pensiun
            'unit_kerja'  => $unit_kerja,
            'username'   => $username
            'password'  => $password,
           );

        }

      }

      $this->Excel_import_model->insert($data);

      echo 'Data Imported successfully';

    }

  }

}

?>

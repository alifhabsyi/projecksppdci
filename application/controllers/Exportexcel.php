<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet

class Exportexcel extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');
        
        $this->load->model('m_rinci');
        $this->load->model('m_main');
        $this->load->model('m_sppd');
        
        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');
		
    }

// Main page
public function index()
{
    $data=array();
    $data['nipp'] = $this->m_main->gettable('tbl_user');
    
    $this->load->view('exprincian', $data);
}

// Export ke excel
public function export(){
    if ($this->input->get('ns')==""){
        var_dump("Gagal");exit;
    }else{
    $data=array();
    $id=$this->input->get('ns');
    $table="tbl_rinci";
            $where=array(
                'no_sppd'=> $id,
            );
    $data['sppd']=$this->m_main->get1data($table,$where);
    $where3=array(
        'no_sppd'=> $id,
        );//jika staff Kepala BKD
        $data['datasppd']=$this->m_rinci->get1data("tbl_sppd",$where3);
        
    $where2=array(
        'jabatan_admin'=> 'BENDAHARA',
        );//jika staff Kepala BKD
        $data['bendahara']=$this->m_rinci->get1data("tbl_user",$where2);
    // var_dump($data['bendahara']);exit;
    // var_dump($data['datasppd']);exit;
    foreach ($data['bendahara'] as $a) :

		$namaben = $a->nama;
		$nipben = $a->nip_admin;
		$pangkatben = $a->pangkat;

		$golonganben = $a->golongan;

    endforeach;
    foreach ($data['datasppd'] as $b) :

        $namasppd = $b->nama;
        $nipsppd = $b->nip;
        $pangkatsppd = $b->pangkat;
        $jabatansppd = $b->jabatan;

        $golongansppd = $b->golongan;

    endforeach;
// 
    // var_dump($data['sppd']);exit;
                
// Create new Spreadsheet object
foreach($data['sppd'] as $a) {
    $nama=$a->nama;
    $nip=$a->nip;
    $jabatan=$a->jabatan;
    $program=$a->program;
    $kegiatan=$a->kegiatan;
    $kode_rek=$a->kode_rek;
    $nama_rek=$a->nama_rek;
    $no_sppd=$a->no_sppd;
    $tgl_pergi=date("d M Y", strtotime($a->tgl_pergi));
    $tgl_pulang=date("d M Y", strtotime($a->tgl_pulang));
    
}
$spreadsheet = new Spreadsheet();

// Set document properties
$spreadsheet->getProperties()->setCreator('SPPD BKD KANDANGAN')
->setLastModifiedBy('SPPD BKD KANDANGANG')
->setTitle('Office 2007 XLSX Test Document')
->setSubject('Office 2007 XLSX Test Document')
->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
->setKeywords('office 2007 openxml php')
->setCategory('Test result file');

// Add some data
$spreadsheet->getActiveSheet()->mergeCells('A1:J1');
$spreadsheet->getActiveSheet()->mergeCells('B2:J2');


$spreadsheet->getActiveSheet()->mergeCells('A13:A14');
$spreadsheet->getActiveSheet()->mergeCells('B13:B14');
$spreadsheet->getActiveSheet()->mergeCells('C13:C14');
$spreadsheet->getActiveSheet()->mergeCells('D13:D14');
$spreadsheet->getActiveSheet()->mergeCells('E13:E14');
$spreadsheet->getActiveSheet()->mergeCells('F13:F14');
$spreadsheet->getActiveSheet()->mergeCells('G13:G14');
$spreadsheet->getActiveSheet()->mergeCells('H13:H14');
$spreadsheet->getActiveSheet()->mergeCells('I13:I14');
$spreadsheet->getActiveSheet()->mergeCells('J13:J14');
$spreadsheet->getActiveSheet()->mergeCells('K13:K14');

$spreadsheet->getActiveSheet()->getStyle('A1')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('B1')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    $sheet = $spreadsheet->getActiveSheet();

    $styleArray = array(
        'borders' => array(
            'allBorders' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => array('argb' => '00000000'),
            ),
        ),
    );

    $sheet ->getStyle('A14:K14')->applyFromArray($styleArray);
    $sheet ->getStyle('A13:K13')->applyFromArray($styleArray);
    $sheet ->getStyle('A15:K15')->applyFromArray($styleArray);


$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A1', 'DAFTAR TERIMA BELANJA PERJALANAN DINAS LUAR DAERAH')
->setCellValue('B1', 'BAGI PNS BADAN KEPEGAWAIAN DAERAH PENDIDIKAN DAN PELATIHAN KABUPATEN HULU SUNGAI SELATAN T.A 2020')

->setCellValue('A4', 'Program')
->setCellValue('B4', $program)

->setCellValue('A5', 'Kegiatan')
->setCellValue('B5', $kegiatan)

->setCellValue('A7', 'Kode Rekening')
->setCellValue('B7', $kode_rek)

->setCellValue('A8', 'Nama Rekening')
->setCellValue('B8', $nama_rek)

->setCellValue('A9', 'Nomor SPD')
->setCellValue('B9', $no_sppd)

->setCellValue('A10', 'Tanggal')
->setCellValue('B10', $tgl_pergi.' s.d. '.$tgl_pulang)

->setCellValue('C28', 'Pejabat Pelaksana Teknis Kegiatan')
->setCellValue('C33', $namasppd)
->setCellValue('C34', $jabatansppd)
->setCellValue('C35', "NIP. ".$nipsppd)

->setCellValue('I28', 'Bendahara,')
->setCellValue('I34', $namaben)
->setCellValue('I35', "NIP. ".$nipben)

->setCellValue('A13', 'NOMOR')
->setCellValue('A15', '1')

->setCellValue('B13', 'NAMA')
->setCellValue('B15', '2')

->setCellValue('C13', 'NIP')
->setCellValue('C15', '3')

->setCellValue('D13', 'JABATAN')
->setCellValue('D15', '4')

->setCellValue('E13', 'BIAYA UANG HARIAN/TINGKAT H')
->setCellValue('E15', '5')

->setCellValue('F13', 'BIAYA RIIL')
->setCellValue('F15', '6')

->setCellValue('H13', 'TIKET PP')
->setCellValue('H15', '7')

->setCellValue('I13', 'BIAYA PENGINAPAN')
->setCellValue('I15', '8')

->setCellValue('J13', 'JUMLAH')
->setCellValue('J15', '9')

->setCellValue('K13', 'TANDA TANGAN')
->setCellValue('K15', '10')


;

// Miscellaneous glyphs, UTF-8
$i=16;$no=1; foreach($data['sppd'] as $a) {

$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i, $no)
->setCellValue('B'.$i, $a->nama)
->setCellValue('C'.$i, $a->nip)
->setCellValue('D'.$i, $a->jabatan)
->setCellValue('E'.$i, $a->biaya_harian)
->setCellValue('F'.$i, $a->biaya_riil)
->setCellValue('H'.$i, $a->tiket_pergi + $a->tiket_pulang)
->setCellValue('I'.$i, $a->biaya_inap)
->setCellValue('J'.$i, $a->tiket_pergi + $a->tiket_pulang + $a->biaya_inap +$a->biaya_riil +$a->biaya_harian );

$sheet ->getStyle("A".$i.":K".$i."")->applyFromArray($styleArray);
    
$i++;$no++;
}

// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Report Excel '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Rincian SPPD '.$no_sppd.'".xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0
ob_end_clean();

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
    }
}
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
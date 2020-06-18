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
public function export()
{
    $data=array();
    $data['nipp'] = $this->m_main->gettable('tbl_user');
                
// Create new Spreadsheet object
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
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A1', 'KODE PROVINSI')
->setCellValue('B1', 'NAMA PROVINSI')
;

// Miscellaneous glyphs, UTF-8
$i=2; foreach($data['nipp'] as $provinsi) {

$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i, $provinsi->nama)
->setCellValue('B'.$i, $provinsi->nip_admin);
$i++;
}

// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Report Excel '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Report Excel.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
}
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
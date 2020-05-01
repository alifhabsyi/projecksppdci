<?php
class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_main');
        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');

    }

    function index(){
    $data=array();
    $this->load->model('m_main');
       $this->data['total_pegawai'] =  $this->m_main->total_pegawai();
          $this->data['total_usul'] =  $this->m_main->total_usul();
             $this->data['total_spt'] =  $this->m_main->total_spt();
                $this->data['total_kwitansi'] =  $this->m_main->total_kwitansi();
                   $this->data['total_sppd'] =  $this->m_main->total_sppd();
    $this->template->halaman('dashboard',$this->data);


    }


}

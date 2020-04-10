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
    $this->template->halaman('dashboard');


    }
   
    
}
 
   

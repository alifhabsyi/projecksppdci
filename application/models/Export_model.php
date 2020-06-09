<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_model extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->model('Export_model');
    $this->load->library('session');
    return $this->db->get('tbl_user')->result();
  }
}

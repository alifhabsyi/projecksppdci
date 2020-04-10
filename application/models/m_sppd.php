<?php
class M_sppd extends CI_Model{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_main');
		$this->load->library('session');
	
	}
	
	function getspt($table,$where){		
		$this->db->where('no_spt not in (select no_spt from tbl_sppd)');
		return $query = $this->db->get($table)->result();
	}
	function getsppd($table,$where){		
		$this->db->where('no_sppd not in (select no_sppd from tbl_rinci)');
		return $query = $this->db->get($table)->result();
	}
	function sppdspt($table,$where){
		$this->db->select('*');
		$this->db->join('tbl_user as us', 'us.nip_admin = tbl_disposisi.nip');
		$this->db->join('tbl_spt as spt', 'spt.no_spt = tbl_disposisi.no_spt' , 'left');
		$this->db->where($where);
		return $query = $this->db->get($table)->result();		
		
	}
	
}
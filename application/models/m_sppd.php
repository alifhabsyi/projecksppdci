<?php
class M_sppd extends CI_Model{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_main');
		$this->load->library('session');
	
	}
	
	function getspt($table,$where){		 
		//$this->db->where('no_spt not in (select no_spt from tbl_sppd)');//jika sekaligus
		 $this->db->join('tbl_spt as spt', 'tbl_disposisi.no_suratm = spt.no_suratm', 'left');
		 $this->db->join('tbl_dtl_usul as dus', 'spt.id_usul = dus.id_usul', 'left');		
		$this->db->where('concat(spt.no_spt,dus.nip) not in (select concat(tbl_sppd.no_spt,tbl_sppd.nip) from tbl_sppd)');
		return $query = $this->db->get($table)->result();
	}
	function getsppd($table,$where){		
		$this->db->where('no_sppd not in (select no_sppd from tbl_rinci)');
		return $query = $this->db->get($table)->result();
	}

	function getrinci($table,$where){		
		$this->db->where('concat(no_sppd,nip) not in (select concat(no_sppd,nip) from tbl_rinci)');
		return $query = $this->db->get($table)->result();
	}

	function getrinci2($table,$where){		
		$this->db->select('*');
		$this->db->join('tbl_sppd as sppd', 'sppd.no_sppd = tbl_sppd_dtl.no_sppd', 'left');
		//$this->db->join('tbl_disposisi as dsp', 'sppd.no_suratm = dsp.no_suratm', 'left');
		// $this->db->join('tbl_spt as spt', 'sppd.no_suratm = spt.no_suratm', 'left');
		// $this->db->join('tbl_dtl_usul as dus', 'spt.id_usul = dus.id_usul', 'left');
		$this->db->where('concat(tbl_sppd_dtl.no_sppd,tbl_sppd_dtl.nip) not in (select concat(tbl_rinci.no_sppd,tbl_rinci.nip) from tbl_rinci)');
		return $query = $this->db->get($table)->result();
	}

	function getrinci3($table,$where){		
		$this->db->select('tbl_sppd_dtl.nip,tbl_sppd_dtl.nama');
		$this->db->join('tbl_sppd as sppd', 'sppd.no_sppd = tbl_sppd_dtl.no_sppd', 'left');
		$this->db->join('tbl_disposisi as dsp', 'sppd.no_suratm = dsp.no_suratm', 'left');
		$this->db->join('tbl_spt as spt', 'sppd.no_suratm = spt.no_suratm', 'left');
		// $this->db->join('tbl_dtl_usul as dus', 'spt.id_usul = dus.id_usul', 'left');
		$this->db->where('concat(tbl_sppd_dtl.no_sppd,tbl_sppd_dtl.nip) not in (select concat(tbl_rinci.no_sppd,tbl_rinci.nip) from tbl_rinci)');
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
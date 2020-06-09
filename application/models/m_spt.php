<?php
class m_spt extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('m_spt');
		$this->load->library('session');

	}
	function getusul($table,$where){
		$this->db->where("no_suratm not in (select no_suratm from tbl_disposisi) and status_spt='DIVERIFIKASI'");
		return $query = $this->db->get($table)->result();
	}
	function getwhere($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function gettable($table){
		return $query = $this->db->get($table)->result();
	}
	function joinsptdtl($table,$where){
		$this->db->select('tbl_disposisi.no_suratm,dtl.id_usul,dtl.nama,dtl.nip');
		$this->db->join('tbl_spt as spt', 'tbl_spt spt on tbl_disposisi.no_suratm=spt.no_suratm','left');
		$this->db->join('tbl_dtl_usul as dtl', 'tbl_dtl_usul dtl on spt.id_usul=dtl.id_usul','left');
		$this->db->where("tbl_disposisi.no_suratm ='$where'");
		return $query = $this->db->get($table)->result();

	}
	function get1data($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function update_spt($where,$dataup,$table){
		$this->db->where($where);
		$this->db->update($table,$dataup);
	}
	function insert_spt($table,$datain){
		$result= $this->db->insert($table,$datain);
	    return $result;
		}
		function edit_spt($table,$datain){
			$result= $this->db->insert($table,$datain);
				return $result;
	}
	function dlt_spt ($table,$where){
		$result= $this->db->delete($table,$where);
	    return $result;
	}
	function cekada($table,$where){
		return $this->db->get_where($table,$where);
	}
	function no_docno($where){
		$hsl=$this->db->query("SELECT * FROM tbl_sett WHERE kd_docno='$where'");
		// var_dump($hsl->result());

		return $hsl;
	}
	function tbh_nogen($nogen,$tahunn,$bulann){
		$hasil=$this->db->query("UPDATE tbl_sett set tahun='$tahunn',bulan='$bulann',docno='$nogen' where kd_docno='AG'");
		return $hasil;


	}


}

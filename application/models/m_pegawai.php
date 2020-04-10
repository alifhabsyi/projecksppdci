<?php
class m_pegawai extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->library('session');

	}

	function getwhere($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function gettable($table){
		return $query = $this->db->get($table)->result();
	}
	function get1data($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function update_pgw($where,$dataup,$table){
		$this->db->where($where);
		$this->db->update($dataup);
	}
	function insert_pgw($table,$datain){
		$result= $this->db->insert($table,$datain);
	    return $result;
		}
		function edit_pgw($table,$dataup){
			$result= $this->db->insert($table,$dataup);
				return $result;
			}
			function edit_rincipgw($table,$dataup){
				$result= $this->db->insert($table,$datain);
					return $result;
	}
	function dlt_pgw ($table,$where){
		$result= $this->db->delete($table,$where);
	    return $result;
	}
	function cekada($table,$where){
		return $this->db->get_where($table,$where);
}
}

<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('session');


	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$data             = array();
		$param            = array();
		$username         = $this->input->post('username');
		$password         = $this->input->post('password');
		$where            = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek              = $this->m_login->cek_login("tbl_user",$where)->num_rows();
		if($cek > 0){
			$this->db->select('nip_admin,pangkat,jabatan_admin,username,password,nama,');    //ngambil query
			$this->db->where('username=',$username);                     //ngambil query
			$data['user']    = $this->db->get('tbl_user');
			// var_dump($data['user']);exit;
			// $this->db->where('username',$username);
			foreach ($data['user']->result_array() as $row)
				{
					$username      = $row['username'];
					$nip_admin          = $row['nip_admin'];
					$nama          = $row['nama'];
					$jabatan_admin       = $row['jabatan_admin'];
					$pangkat       = $row['pangkat'];
					$password      = $row['password'];

				}
				// var_dump($data['user']);exit;
				$data_session   = array(
					'username' => $username,
					'nip_admin' => $nip_admin,
					'nama' => $nama,
					'jabatan_admin' => $jabatan_admin,
					'pangkat' => $pangkat,
					'password' => $password,


				);
			$this->session->set_userdata($data_session);
			// var_dump($this->session->userdata);exit;
			redirect(base_url("main"));

		}else{
			redirect(base_url('login/salah'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	function salah(){
		$this->load->view('v_access');
	}
}

<?php
class Pgw_rincian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');

        $this->load->model('m_pegawai');
        $this->load->model('m_main');
        $this->load->model('m_rinci');

        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');

    }

    function index(){
        $data=array();

        $this->template->halaman('pegawai/addpegawai',$data);
    }
    function dlt_pgw(){

        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_user";
            $where=array(
                'nip_admin_admin'=> $id,
            );
            $data['[pgw]']=$this->m_pegawai->dlt_pgw($table,$where);
        }

        redirect('Pgw_rincian/listpegawai', 'refresh');
    }
    function listpegawai(){
        $data=array();
        $data['pgw'] = $this->m_main->pagesur('tbl_user');
        // $kd_div=$this->session->userdata('kd_div');
        // $kd_jabatan_admin=$this->session->userdata('kd_jabatan_admin');
        // $nama_sub=$this->session->userdata('nama_sub');
        // $where=array(
        //     'kd_div'=> $kd_div,
        //     'kd_jabatan_admin'=> $kd_jabatan_admin,
        //     'nama_sub'=> $nama_sub,
        // );
        // $data['notif'] = $this->m_main->getwhere('tbl_disposisi',$where);
        // $data['surat'] = $this->m_main->pagesur('tbl_surat_masuk');
        $this->template->halaman('pegawai/listpegawai',$data); //menampilkan file -list_surat.php dimana file ini untuk menampilkan surat yang masuk

    }
    function exportpegawai(){
        $data=array();
        $data['pgw'] = $this->m_main->pagesur('tbl_user');
        $this->load->view('pegawai/exportpegawai',$data);
    }
    function importpegawai(){
        $data=array();
        $data['pgw'] = $this->m_main->pagesur('tbl_user');
        $this->template->halaman('pegawai/importpegawai',$data);
    }
    function addpegawai(){
        $data=array();
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_user";
            $where=array(
                'nip_admin'=> $id,
            );
            $data['pgw']=$this->m_pegawai->get1data($table,$where);
        }

        $this->template->halaman('pegawai/addpegawai',$data);
    }

    function add_rincipgw(){
                    //insert ke tabel surat masuk
                    $nama = $this->input->post('nama');
                    $nip_admin = $this->input->post('nip_admin');
                    $tempat_lahir = $this->input->post('tempat_lahir');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $kelamin = $this->input->post('kelamin');
                    $pangkat = $this->input->post('pangkat');
                    $golongan = $this->input->post('golongan');
                    $tmt_pangkat = $this->input->post('tmt_pangkat');
                    $jabatan_admin = $this->input->post('jabatan_admin');
                    $tmt_jabatan = $this->input->post('tmt_jabatan');
                    $eselon = $this->input->post('eselon');
                    $masakerja_thn = $this->input->post('masakerja_thn');
                    $masakerja_bln = $this->input->post('masakerja_bln');
                    $pendidikan = $this->input->post('pendidikan');
                    $diklat = $this->input->post('diklat');
                    $sk_cpns = $this->input->post('sk_cpns');
                    $tmt_berkala = $this->input->post('tmt_berkala');
                    $tmt_pensiun = $this->input->post('tmt_pensiun');
                    $unit_kerja = $this->input->post('unit_kerja');
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                              $tipeuser = $this->input->post('tipeuser');
                    $table="tbl_user";
                    $datain=array(
                      'nama' =>$nama,
                      'nip_admin' =>$nip_admin,
                      'tempat_lahir' =>  $tempat_lahir,
                      'tgl_lahir' =>$tgl_lahir,
                      'kelamin' =>  $kelamin,
                      'pangkat' =>$pangkat,
                      'golongan' =>  $golongan,
                      'tmt_pangkat' =>  $tmt_pangkat,
                      'jabatan_admin' =>  $jabatan_admin,
                      'tmt_jabatan' =>  $tmt_jabatan ,
                      'eselon' =>  $eselon ,
                      'masakerja_thn' =>  $masakerja_thn ,
                      'masakerja_bln' =>  $masakerja_bln ,
                      'pendidikan' =>  $pendidikan ,
                      'diklat' =>$diklat ,
                      'sk_cpns' =>  $sk_cpns ,
                      'tmt_berkala' =>  $tmt_berkala ,
                      'tmt_pensiun' =>  $tmt_pensiun ,
                      'unit_kerja' =>  $unit_kerja ,
                      'username' =>$username,
                      'password' =>md5($password),
                      'tipeuser' =>$tipeuser,

                        //'created_by'=>$created_by,
                        //'created_time'=>$created_time,
                    );

                      $this->m_pegawai->insert_pgw($table,$datain);
                    redirect('Pgw_rincian/addpegawai', 'refresh');
}
        function edit_pgw(){
          $nip_admin = $this->input->post('nip_admin');
          $nama = $this->input->post('nama');
          $tempat_lahir = $this->input->post('tempat_lahir');
          $tgl_lahir = $this->input->post('tgl_lahir');
          $kelamin = $this->input->post('kelamin');
          $pangkat = $this->input->post('pangkat');
          $golongan = $this->input->post('golongan');
          $tmt_pangkat = $this->input->post('tmt_pangkat');
          $jabatan_admin = $this->input->post('jabatan_admin');
          $tmt_jabatan = $this->input->post('tmt_jabatan');
          $eselon = $this->input->post('eselon');
          $masakerja_thn = $this->input->post('masakerja_thn');
          $masakerja_bln = $this->input->post('masakerja_bln');
          $pendidikan = $this->input->post('pendidikan');
          $diklat = $this->input->post('diklat');
          $sk_cpns = $this->input->post('sk_cpns');
          $tmt_berkala = $this->input->post('tmt_berkala');
          $tmt_pensiun = $this->input->post('tmt_pensiun');
          $unit_kerja = $this->input->post('unit_kerja');
          $username = $this->input->post('username');
          $password = $this->input->post('password');
  $tipeuser = $this->input->post('tipeuser');
            // $where=array(
            //     'nip_admin'=> $nip_admin,
            // );
            // $dataup=array(
            // 'nama' =>$nama,
            // 'nip_admin' =>$nip_admin,
            // 'tempat_lahir' =>  $tempat_lahir,
            // 'tgl_lahir' =>$tgl_lahir,
            // 'kelamin' =>  $kelamin,
            // 'pangkat' =>$pangkat,
            // 'golongan' =>  $golongan,
            // 'tmt_pangkat' =>  $tmt_pangkat,
            // 'jabatan_admin' =>  $jabatan_admin,
            // 'tmt_jabatan' =>  $tmt_jabatan ,
            // 'eselon' =>  $eselon ,
            // 'masakerja_thn' =>  $masakerja_thn ,
            // 'masakerja_bln' =>  $masakerja_bln ,
            // 'pendidikan' =>  $pendidikan ,
            // 'diklat' =>$diklat ,
            // 'sk_cpns' =>  $sk_cpns ,
            // 'tmt_berkala' =>  $tmt_berkala ,
            // 'tmt_pensiun' =>  $tmt_pensiun ,
            // 'unit_kerja' =>  $unit_kerja ,
            // 'username' =>$username,
            // 'password' =>$password,
            //     //'created_by'=>$created_by,
            //     //'created_time'=>$created_time,
            //
            // );

            $where=array(
                'nip_admin'=> $nip_admin,
            );
            $dataup=array(

              'nip_admin'=>$nip_admin,
              'nama'=>$nama,
              'tempat_lahir' =>  $tempat_lahir,
              'tgl_lahir' =>$tgl_lahir,
              'kelamin' =>  $kelamin,
              'pangkat' =>$pangkat,
              'golongan' =>  $golongan,
              'tmt_pangkat' =>  $tmt_pangkat,
              'jabatan_admin' =>  $jabatan_admin,
              'tmt_jabatan' =>  $tmt_jabatan ,
              'eselon' =>  $eselon ,
              'masakerja_thn' =>  $masakerja_thn ,
              'masakerja_bln' =>  $masakerja_bln ,
              'pendidikan' =>  $pendidikan ,
              'diklat' =>$diklat ,
              'sk_cpns' =>  $sk_cpns ,
              'tmt_berkala' =>  $tmt_berkala ,
              'tmt_pensiun' =>  $tmt_pensiun ,
              'unit_kerja' =>  $unit_kerja ,
              'username' =>$username,
              'password' =>$password,
              'tipeuser' =>$tipeuser,

            );
            // var_dump($dataup);
            // var_dump($this->m_rinci->update_rinci($where,$dataup,'tbl_user'));
            $this->m_rinci->update_rinci($where,$dataup,'tbl_user');
            // ($up);exit;
            redirect('Pgw_rincian/listpegawai', 'refresh');

        // }

      }

    }

<?php
class Spt_rincian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');

        $this->load->model('m_spt');
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

        $this->template->halaman('spt/addspt',$data);
    }
    function dlt_spt(){

        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_disposisi";
            $where=array(
                'id_spt'=> $id,
            );
            $data['spt']=$this->m_spt->dlt_spt($table,$where);
        }

        redirect('spt_rincian/listspt', 'refresh');
    }
    function listspt(){
        $data=array();
        $data['spt'] = $this->m_main->pagesur('tbl_disposisi');
        // $kd_div=$this->session->userdata('kd_div');
        // $kd_jabatan=$this->session->userdata('kd_jabatan');
        // $nama_sub=$this->session->userdata('nama_sub');
        // $where=array(
        //     'kd_div'=> $kd_div,
        //     'kd_jabatan'=> $kd_jabatan,
        //     'nama_sub'=> $nama_sub,
        // );
        // $data['notif'] = $this->m_main->getwhere('tbl_disposisi',$where);
        // $data['surat'] = $this->m_main->pagesur('tbl_surat_masuk');
        $this->template->halaman('spt/listspt',$data); //menampilkan file -list_surat.php dimana file ini untuk menampilkan surat yang masuk

    }
    function loadnama(){
        $no_suratm=$this->input->get("no_suratm");
        $table="tbl_spt";
            $where=array(
                'no_suratm'=> $no_suratm,
            );
            $data=$this->m_main->get1data($table,$where);
            echo json_encode($data);
    }
    function addspt(){
        $data=array();
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_disposisi";
            $where=array(
                'id_spt'=> $id,
            );
            $data['spt']=$this->m_spt->get1data($table,$where);
          }
          $data['no_suratm'] = $this->m_spt->getusul('tbl_spt','');
        $this->template->halaman('spt/addspt',$data);
    }
    function add_rinci(){
                    //insert ke tabel surat masuk
                    $no_spt = $this->input->post('no_spt');
                    $no_suratm = $this->input->post('no_suratm');
                    $nip = $this->input->post('nip');
                    $nama = $this->input->post('nama');
                    $jabatan = $this->input->post('jabatan');
                    $pangkat = $this->input->post('pangkat');
                    $dasar = $this->input->post('dasar');
                    $tujuan_untuk = $this->input->post('tujuan_untuk');
                    $tanggal = $this->input->post('tanggal');
                    $tempat = $this->input->post('tempat');
                    $dibuat_oleh = $this->input->post('dibuat_oleh');
                      $jabatan_admin = $this->input->post('jabatan_admin');
                      $nip_admin = $this->input->post('nip_admin');
                    $dibuat_tgl = $this->input->post('dibuat_tgl');

                    $table="tbl_disposisi";
                    $dataup=array(
                        'no_spt' =>$no_spt,
                        'no_suratm' =>$no_suratm,
                        'nip' =>$nip,
                        'tujuan_untuk' =>$tujuan_untuk,
                        'nama' =>$nama,
                        'jabatan' =>$jabatan,
                        'pangkat' =>$pangkat,
                        'dasar' =>$dasar,
                        'tujuan_untuk' =>$tujuan_untuk,
                        'tanggal' =>$tanggal,
                        'tempat' =>$tempat,
                        'dibuat_oleh' =>$dibuat_oleh,
                        'jabatan_admin' =>$jabatan_admin,
                            'nip_admin' =>$nip_admin,
                        'dibuat_tgl' =>$dibuat_tgl,
                        //'created_by'=>$created_by,
                        //'created_time'=>$created_time,

                    );


                    $where3=array(
                        'no_suratm'=> $no_suratm,
                    );
                    $dataup3=array(
                        'no_spt' =>$no_spt,
                        //'status_spt' =>'DIVERIFIKASI',

                        //'created_time'=>$created_time,


                    );
                    $this->m_rinci->update_rinci($where3,$dataup3,'tbl_spt');
                    $this->m_spt->insert_spt($table,$dataup);
                    redirect('spt_rincian/addspt', 'refresh');
                    // var_dump($dataup);exit;
                      }
            }
            function test(){
              echo "test";
            }
    function edit_spt(){
        $id_spt= $this->input->post('id_spt');
        $no_spt = $this->input->post('no_spt');
        $no_suratm = $this->input->post('no_suratm');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $pangkat = $this->input->post('pangkat');
        $dasar = $this->input->post('dasar');
        $tujuan_untuk = $this->input->post('tujuan_untuk');
        $tanggal = $this->input->post('tanggal');
        $tempat = $this->input->post('tempat');
        $jabatan_admin = $this->input->post('jabatan_admin');
        $nip_admin = $this->input->post('nip_admin');
        $dibuat_oleh = $this->input->post('dibuat_oleh');
        $dibuat_tgl = $this->input->post('dibuat_tgl');
        $where=array(
            'id_spt'=> $id_spt,
        );
        $dataup=array(
            'id_spt' =>$id_spt,
            'no_spt' =>$no_spt,
            'no_suratm' =>$no_suratm,
            'nip' =>$nip,
            'nama' =>$nama,
            'jabatan' =>$jabatan,
            'pangkat' =>$pangkat,
            'dasar' =>$dasar,
            'tujuan_untuk' =>$tujuan_untuk,
            'tanggal' =>$tanggal,
            'tempat' =>$tempat,
            'dibuat_oleh' =>$dibuat_oleh,
            'jabatan_admin' =>$jabatan_admin,
                'nip_admin' =>$nip_admin,
            'dibuat_tgl' =>$dibuat_tgl,

            //'created_time'=>$created_time,


        );
        $this->m_spt->update_spt($where,$dataup,'tbl_disposisi');
        // var_dump($data);exit;
        redirect('spt_rincian/listspt', 'refresh');

    // }

}
  function cetakspt(){
//     $id_spt= $this->input->post('id_spt');
//     $no_spt = $this->input->post('no_spt');
//     $nip = $this->input->post('nip');
//     $nama = $this->input->post('nama');
//       $jabatan = $this->input->post('jabatan');
//         $pangkat = $this->input->post('pangkat');
//           $dasar = $this->input->post('dasar');
//     $tujuan_untuk = $this->input->post('tujuan_untuk');
//     $tanggal = $this->input->post('tanggal');
//     $tempat = $this->input->post('tempat');
//     $dibuat_oleh = $this->input->post('dibuat_oleh');
//     $dibuat_tgl = $this->input->post('dibuat_tgl ');
//  $where=array(
//      'id_spt'=> $id_spt,
//  );
//  $document = file_get_contents("SPTpgw.rtf");
//  $document = str_replace("#no_spt", $no_spt, $document);
//  $document = str_replace("#nip", $nip, $document);
//  $document = str_replace("#tujuan_untuk", $tujuan_untuk, $document);
//  $document = str_replace("#tanggal", $tanggal, $document);
//  $document = str_replace("#tempat", $tempat, $document);
//  $document = str_replace("#dibuat_oleh", $dibuat_oleh, $document);
//  $document = str_replace("#dibuat_tgl", $dibuat_tgl, $document);
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=sptpegawai.doc");
// header("Content-length: ".strlen($document));
// echo $document;
}

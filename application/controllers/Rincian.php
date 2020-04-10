<?php
class Rincian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');
        
        $this->load->model('m_rinci');
        $this->load->model('m_main');
        $this->load->model('m_sppd');
        
        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');
		
    }
    
    function index(){
        $data=array();
        
        $this->template->halaman('rincian/addrincian',$data);
    }
    function dlt_rinci(){
        
        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_rinci";
            $where=array(
                'no_kwt'=> $id,
            );
            $data['kwt']=$this->m_rinci->delete_rinci($table,$where);
        }
        
        redirect('rincian/listrinci', 'refresh');
    }
    function listrinci(){
        $data=array();
        $data['kwt'] = $this->m_main->pagesur('tbl_rinci');
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
        $this->template->halaman('rincian/listrincian',$data); 
    }
    function addrincian(){
        $data=array();
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_rinci";
            $where=array(
                'no_kwt'=> $id,
            );
            $data['rinci']=$this->m_rinci->get1data($table,$where);
            
            
        }
        $data['sppd'] = $this->m_sppd->getsppd("tbl_sppd",""); //menampikan sppd yg blum diinput rincian
        
        $this->template->halaman('rincian/addrincian',$data);
    }
    function loadsppd(){
        $sppd=$this->input->get("no_sppd");
        $table="tbl_sppd";
            $where=array(
                'no_sppd'=> $sppd,
            );
            $data=$this->m_main->get1data($table,$where);
            echo json_encode($data);
            // var_dump($data);exit;
    }
    function add_rinci(){
        
        // $no_surat = $this->input->post('no_surat');
        // // var_dump($no_surat);
        // //Mulai inisiasi cek no agenda atau reset per tahun
        // $where            = array(
		// 	'no_surat' => $no_surat,
		// );
        // $cek              = $this->m_rinci->cekada("tbl_surat_masuk",$where)->num_rows();
        // // var_dump($cek);
        // if($cek==0){    
            
                    //Mulai inisiasi cek no agenda atau reset per tahun
                    $bulann = date('m');
                    $tahunn = date('Y');
                    $noagena= $this->m_rinci->no_docno('KWT');
                    if($noagena->num_rows()>0){
                        foreach ($noagena->result() as $data) {

                                $kd_docno = $data->kd_docno;
                                $docno = $data->docno;
                                $tahuna = $data->tahun;
                                $bulana = $data->bulan;
                                
                        }
                    }
                    //  var_dump($docno+1);exit;
                    if($tahuna<$tahunn){
                        $tbhno= $this->m_rinci->tbh_nogen('1',$tahunn,$bulann);
                    }else{
                        $tbhno= $this->m_rinci->tbh_nogen($docno+1,$tahunn,$bulann);
                    }
                    //selesai update docno
                    //insert ke tabel surat masuk
                    $no_kwt = $this->input->post('no_kwt');
                    $no_sppd = $this->input->post('no_sppd');
                    $nip = $this->input->post('nip');
                    $nama = $this->input->post('nama');
                    $jabatan = $this->input->post('jabatan');
                    $program = $this->input->post('program');
                    $kegiatan = $this->input->post('kegiatan');
                    $kode_rek = $this->input->post('kode_rek');
                    $nama_rek = $this->input->post('nama_rek');
                    $tgl_pergi = $this->input->post('tgl_pergi');
                    $tgl_pulang = $this->input->post('tgl_pulang');
                    $biaya_harian = $this->input->post('biaya_harian');
                    $biaya_riil = $this->input->post('biaya_riil');
                    $tiket_pergi = $this->input->post('tiket_pergi');
                    $tiket_pulang = $this->input->post('tiket_pulang');
                    $biaya_inap = $this->input->post('biaya_inap');
                    $created_by=$this->session->userdata('nama_sub');
                    $created_time = date('Y-m-d H:i:s');
                    
                    $table="tbl_rinci";
                    $dataup=array(
                        'no_kwt' =>$no_kwt,
                        'no_sppd' =>$no_sppd,
                        'nip' =>$nip,
                        'nama' =>$nama,
                        'jabatan' =>$jabatan,
                        'program' =>$program,
                        'kegiatan' =>$kegiatan,
                        'kode_rek' =>$kode_rek,
                        'nama_rek'=>$nama_rek,
                        'tgl_pergi'=>$tgl_pergi,
                        'tgl_pulang'=>$tgl_pulang,
                        'biaya_harian'=>$biaya_harian,
                        'biaya_riil'=>$biaya_riil,
                        'tiket_pergi'=>$tiket_pergi,
                        'tiket_pulang'=>$tiket_pulang,
                        'biaya_inap'=>$biaya_inap,
                        //'created_by'=>$created_by,
                        //'created_time'=>$created_time,

                    );
                    // var_dump($dataup);
                    $this->m_rinci->insert_kwt($table,$dataup);
                    redirect('rincian/listrinci', 'refresh');
                    // var_dump($dataup);exit;
            // }           
        // else{
        //     ?>
        //     <script languange='javascript'>
        //             window.alert('No surat sudah pernah ada');
        //             window.history.back();
        //     </script> 
        //     <?php
        // }
 
    }
    function edit_rinci(){
        $no_kwt = $this->input->post('no_kwt');
        $no_sppd = $this->input->post('nosppd');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $program = $this->input->post('program');
        $kegiatan = $this->input->post('kegiatan');
        $kode_rek = $this->input->post('kode_rek');
        $nama_rek = $this->input->post('nama_rek');
        $tgl_pergi = $this->input->post('tgl_pergi');
        $tgl_pulang = $this->input->post('tgl_pulang');
        $biaya_harian = $this->input->post('biaya_harian');
        $biaya_riil = $this->input->post('biaya_riil');
        $tiket_pergi = $this->input->post('tiket_pergi');
        $tiket_pulang = $this->input->post('tiket_pulang');
        $biaya_inap = $this->input->post('biaya_inap');
        $lastmodified_by=$this->session->userdata('nama_sub');
        $lastmodified_time = date('Y-m-d H:i:s');
        $where=array(
            'no_kwt'=> $no_kwt,
        );
        $dataup=array(
            'no_kwt' =>$no_kwt,
            'no_sppd' =>$no_sppd,
            'nip' =>$nip,
            'nama' =>$nama,
            'jabatan' =>$jabatan,
            'program' =>$program,
            'kegiatan' =>$kegiatan,
            'kode_rek' =>$kode_rek,
            'nama_rek'=>$nama_rek,
            'tgl_pergi'=>$tgl_pergi,
            'tgl_pulang'=>$tgl_pulang,
            'biaya_harian'=>$biaya_harian,
            'biaya_riil'=>$biaya_riil,
            'tiket_pergi'=>$tiket_pergi,
            'tiket_pulang'=>$tiket_pulang,
            'biaya_inap'=>$biaya_inap,
            //'created_by'=>$created_by,
            //'created_time'=>$created_time,


        );
        $this->m_rinci->update_rinci($where,$dataup,'tbl_rinci');
        // var_dump($data);exit;
        redirect('rincian/listrinci', 'refresh');

    // }

}
   
    
}
 
   

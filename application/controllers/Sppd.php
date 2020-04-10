<?php
class Sppd extends CI_Controller{
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
        
        $this->template->halaman('sppd/addsppd',$data);
    }
    function dlt_sppd(){
        
        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_sppd";
            $where=array(
                'no_sppd'=> $id,
            );
            $data['kwt']=$this->m_rinci->delete_rinci($table,$where);
        }
        
        redirect('sppd/listsppd', 'refresh');
    }
    function dlt_dtl_sppd(){
        
        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_sppd_dtl";
            $where=array(
                'dtl_sppd'=> $id,
            );
            $data['kwt']=$this->m_rinci->delete_rinci($table,$where);
        }
        $no_sppd=$this->input->get('r');
        redirect("sppd/inpsppd?n=$no_sppd", 'refresh');
        
    }
    function listsppd(){
        $data=array();
        $data['sppd'] = $this->m_main->pagesur('tbl_sppd');
        $this->template->halaman('sppd/listsppd',$data); 
    }
    function loadnama(){
        $nip=$this->input->get("nip");
        $table="tbl_user";
            $where=array(
                'nip'=> $nip,
            );
            $data=$this->m_main->get1data($table,$where);
            echo json_encode($data);
            // var_dump($data);exit;
    }
    function loadspt(){
        $spt=$this->input->get("no_spt");
        $table="tbl_disposisi";
            $where=array(
                'id_spt'=> $spt,
            );
            $data=$this->m_sppd->sppdspt($table,$where);
            echo json_encode($data);
            // var_dump($data);exit;
    }
    function surat(){
        $data=array();
        
        $data['nipp'] = $this->m_main->gettable('tbl_user');
        // var_dump($data['spt']);exit;
        $this->load->view('surat/surat',$data);
    }
    function doc(){
        $this->load->view('surat/doc');
    }
    function inpsppd(){
        $data=array();
        $id="";
        $where=array(
            'no_sppd'=> $id,
        );
        $data['sppd_dtl'] = $this->m_main->getwhere('tbl_sppd_dtl',$where);
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_sppd";
            $where=array(
                'no_sppd'=> $id,
            );
            $where=array(
                'no_sppd'=> $id,
            );
            $data['sppd']=$this->m_rinci->get1data($table,$where);
            $data['sppd_dtl'] = $this->m_main->getwhere('tbl_sppd_dtl',$where);
            
        }
        $data['nipp'] = $this->m_main->gettable('tbl_user');
        $data['spt'] = $this->m_sppd->getspt("tbl_disposisi",""); //menampikan spt yg blum diinput sppd
        // var_dump($data['spt']);exit;
        $this->template->halaman('sppd/inpsppd',$data);
    }
    function dtl_insert(){
        $nip = $this->input->post('nip2');
        // var_dump($no_surat);
        //Mulai inisiasi cek no agenda atau reset per tahun
        $where            = array(
			'nip' => $nip,
		);
        $cek              = $this->m_rinci->cekada("tbl_sppd_dtl",$where)->num_rows();
        // var_dump($cek);
        if($cek==0){    
            
                    
                    //insert ke tabel surat masuk
                    $no_sppd =  $this->input->post('nosppd');
                     $nip = $this->input->post('nip2');
                    $nama = $this->input->post('nama2');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $keterangan = $this->input->post('keterangan');
                    
                    $table="tbl_sppd_dtl";
                    $dataup=array(
                        'no_sppd' =>$no_sppd,
                        'nip' =>$nip,
                        'nama' =>$nama,
                        'tgl_lahir' =>$tgl_lahir,
                        'keterangan' =>$keterangan,
                        

                    );
                    // var_dump($dataup);
                    $this->m_rinci->insert_kwt($table,$dataup);
                    redirect("sppd/inpsppd?n=$no_sppd", 'refresh');
                    // var_dump($dataup);exit;
            }           
        else{
            ?>
            <script languange='javascript'>
                    window.alert('NIP Sudah ada');
                    window.history.back();
            </script> 
            <?php
        }
    }
    function add_sppd(){
        
        $no_sppd = $this->input->post('no_sppd');
        // var_dump($no_surat);
        //Mulai inisiasi cek no agenda atau reset per tahun
        $where            = array(
			'no_sppd' => $no_sppd,
		);
        $cek              = $this->m_rinci->cekada("tbl_sppd",$where)->num_rows();
        // var_dump($cek);
        if($cek==0){    
            
                    //Mulai inisiasi cek no agenda atau reset per tahun
                    // $bulann = date('m');
                    // $tahunn = date('Y');
                    // $noagena= $this->m_rinci->no_docno('sppd');
                    // if($noagena->num_rows()>0){
                    //     foreach ($noagena->result() as $data) {

                    //             $kd_docno = $data->kd_docno;
                    //             $docno = $data->docno;
                    //             $tahuna = $data->tahun;
                    //             $bulana = $data->bulan;
                                
                    //     }
                    // }
                    // // var_dump($docno+1);exit;
                    // if($tahuna<$tahunn){
                    //     $tbhno= $this->m_rinci->tbh_nogen('1',$tahunn,$bulann);
                    // }else{
                    //     // $tbhno= $this->m_rinci->tbh_nogen($docno+1,$tahunn,$bulann);
                    // }
                    //selesai update docno
                    //insert ke tabel surat masuk
                    $no_spt = $this->input->post('nospt');
                    $no_sppd = $this->input->post('no_sppd');
                    $pejabat = $this->input->post('pejabat_perintah');
                    $nip = $this->input->post('nip');
                    $nama = $this->input->post('nama');
                    $jabatan = $this->input->post('jabatan');
                    $pangkat = $this->input->post('pangkat');
                    $tujuan_untuk = $this->input->post('tujuan_untuk');
                    $jenis_angkutan = $this->input->post('jenis_angkutan');
                    $dari = $this->input->post('dari');
                    $tempat_tujuan = $this->input->post('tempat_tujuan');
                    $lama_pd = $this->input->post('lama_pd');
                    $tgl_pergi = $this->input->post('tgl_pergi');
                    $tgl_pulang = $this->input->post('tgl_pulang');
                    $instansi = $this->input->post('instansi');
                    $mata_anggaran = $this->input->post('mata_anggaran');
                    
                    
                    $table="tbl_sppd";
                    $dataup=array(
                        'no_spt' =>$no_spt,
                        'no_sppd' =>$no_sppd,
                        'pejabat_perintah' =>$pejabat,
                        'nip' =>$nip,
                        'nama' =>$nama,
                        'jabatan' =>$jabatan,
                        'pangkat' =>$pangkat,
                        'tujuan_untuk' =>$tujuan_untuk,
                        'jenis_angkutan'=>$jenis_angkutan,
                        'dari'=>$dari,
                        'tempat_tujuan'=>$tempat_tujuan,
                        'lama_pd'=>$lama_pd,
                        'tgl_pergi'=>$tgl_pergi,
                        'tgl_pulang'=>$tgl_pulang,
                        'instansi'=>$instansi,
                        'mata_anggaran'=>$mata_anggaran,
                        //'created_by'=>$created_by,
                        //'created_time'=>$created_time,

                    );
                    // var_dump($dataup);
                    $this->m_rinci->insert_kwt($table,$dataup);
                    redirect("sppd/inpsppd?n=$no_sppd", 'refresh');
                    // var_dump($dataup);exit;
            }           
        else{
            ?>
            <script languange='javascript'>
                    window.alert('No surat sudah pernah ada');
                    window.history.back();
            </script> 
            <?php
        }
 
    }
    function edit_rinci(){
        $id_rinci = $this->input->post('id_rinci');
        $no_spd = $this->input->post('no_spd');
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
            'id_rinci'=> $id_rinci,
        );
        $dataup=array(
            'id_rinci' =>$id_rinci,
            'no_spd' =>$no_spd,
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
 
   

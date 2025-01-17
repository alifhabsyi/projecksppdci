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
            $table="tbl_sppd_dtl";
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
                'nip_admin'=> $nip,
            );
            $data=$this->m_main->get1data($table,$where);
            echo json_encode($data);
            // var_dump($data);exit;
    }
    function loaddetail(){
        $id_usul=$this->input->get("id_usul");
        $table="tbl_dtl_usul";
            $where=array(
                'id_usul'=> $id_usul,
            );
            $data=array();
            $data["detailusul"]= $this->m_main->getwhere('tbl_dtl_usul',$where);
            echo json_encode($data);
            // $this->template->halaman('sppd/inpsppd',$data);
            //   var_dump($data["detailusul"]);exit;
    }
    function loadspt(){
        $spt=$this->input->get("no_spt");
        $table="tbl_disposisi";
            $where=array(
                'id_spt'=> $spt,
            );
            $data=$this->m_sppd->sppdspt($table,$where);
            echo json_encode($data);
            // var_dump($data->id_usul);exit;
    }
    function loadsppd(){
        $spt=$this->input->get("no_sppd");
        $table="tbl_sppd";
            $where=array(
                'no_sppd'=> $spt,
            );
            $data=$this->m_sppd->sppdspt($table,$where);
            echo json_encode($data);
            // var_dump($data->id_usul);exit;
    }
    function loadsptada(){
        $spt=$this->input->get("no_spt");
        $table="tbl_disposisi";
            $where=array(
                'tbl_disposisi.no_spt'=> $spt,
            );
            $data=$this->m_sppd->sppdspt($table,$where);
            echo json_encode($data);
            // var_dump($data->id_usul);exit;
    }
    function sppdkabad(){
        if($this->input->get('ns') !=""){
        $data=array();
        $nip=$this->input->get("ns");
        $table="tbl_user";
            $where=array(
                'nip_admin'=> $nip,
            );
            $cekjabatan=$this->m_main->get1data($table,$where);
            foreach($cekjabatan as $tes):
                $id_usul= $tes->jabatan_admin;    
            endforeach;
            // var_dump($cekjabatan);exit;
            // var_dump((strpos ($id_usul, "KEP"))=== false);var_dump($id_usul);exit;
            if((strpos ($id_usul, "KEPALA BKD"))=== false){
            // if( $id_usul == "KEPALA BADAN"){
                $id=$this->input->get('n');
                $where=array(
                'no_sppd'=> $id,
                );
                $data['sppd']=$this->m_rinci->get1data("tbl_sppd",$where);
                $id2=$this->input->get('ns');
                $where2=array(
                    'nip_admin'=> $id2,
                );
                $data['kepala']="FALSE";
                
                $data['nip']=$this->m_rinci->get1data("tbl_user",$where2);
                $where3=array(
                    'jabatan_admin'=> 'KEPALA BKD',
                    );//jika staff Kepala BKD
                    $data['namakepala']=$this->m_rinci->get1data("tbl_user",$where3);
                
            
            // var_dump($data['spt']);exit;
             
                $this->load->view('surat/sppdstaf',$data);
            }
       
            else{
                // var_dump($data['spt']);exit;
                $id=$this->input->get('n');
                $where=array(
                'no_sppd'=> $id,
                );
                $data['sppd']=$this->m_rinci->get1data("tbl_sppd",$where);
                // var_dump($data['sppd']);exit;
                $data['kepala']="TRUE";
                $id2=$this->input->get('ns');
                $where2=array(
                    'nip_admin'=> $id2,
                );
                $data['nip']=$this->m_rinci->get1data("tbl_user",$where2);
                
                $where3=array(
                    'jabatan_admin'=> 'SEKRETARIS DAERAH',
                    );//jika kepala BKD di surat sekda
                    $data['namasekda']=$this->m_rinci->get1data("tbl_user",$where3);
                $this->load->view('surat/sppdstaf',$data);
            }
       
    }
        
    }
    function sppdstaf(){
        $data=array();
        $data['nipp'] = $this->m_main->gettable('tbl_user');
            // var_dump($data['spt']);exit;
            $this->load->view('surat/sppdstaf',$data);
       
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
        
        $id_usul=$this->input->get("t");
        
            $wherere=array(
                'id_usul'=> $id_usul,
            );
            $data=array();
            $data['detailusul']= $this->m_main->getwhere('tbl_dtl_usul',$wherere);
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
        $data['nipp'] = $this->m_main->gettable('tbl_user'); //
        $data['spt'] = $this->m_sppd->getspt("tbl_disposisi",""); //menampikan spt yg blum diinput sppd
        // var_dump($data['nipp']);exit;
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
        $no_spt = $this->input->post('nospt'); //nomor spt
        
        $nip = $this->input->post('nip');
        
        // var_dump($no_surat);
        //Mulai inisiasi cek no agenda atau reset per tahun
        $where            = array(
            'no_spt' => $no_spt,
            'nip'=>$nip,
            'no_sppd' => $no_sppd,
		);
        $cek              = $this->m_rinci->cekada("tbl_sppd",$where)->num_rows();
        // var_dump($cek);var_dump($where);
        if($cek==0){    
            $where2            = array(
                'no_sppd' => $no_sppd,
                // 'nip' => $nip,
               
            );
            $cek2              = $this->m_rinci->cekada("tbl_sppd",$where2)->num_rows();
            // var_dump($cek2);var_dump($where2);exit;
            if($cek2==0){    
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
                    $no_suratm = $this->input->post('no_suratm');
                    // $d_sppd=$this->input->post('dnama0');
                    // var_dump($d_sppd);exit;
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
                    $dibuat_tgl = $this->input->post('tglbuat');
                    //load id usul detail
                    // var_dump($no_spt);
                    $table="tbl_disposisi";
                        $where=array(
                            'tbl_disposisi.no_spt'=> $no_spt,
                        );
                        $dataid=$this->m_sppd->sppdspt($table,$where);
                    // var_dump($dataid);exit;
                    foreach($dataid as $tes):
                        $id_usul= $tes->id_usul;    
                    endforeach;
                    // var_dump($id_usul);exit;
                    $table="tbl_dtl_usul";
                        $where=array(
                            'id_usul'=> $id_usul,
                            'nip'=> $nip, //jika tidak 1 1 ini dihilangkan
                        );
                      
                        $datalist= $this->m_main->getwhere('tbl_dtl_usul',$where);
                    // var_dump(count($datalist));
                    // var_dump($datalist); 
                        // foreach($datalist as $tess): ini buat yg sekaligus
                        //     $dnip= $tess->nip;
                        //     $dnama= $tess->nama;   
                        //     $dtgl_lahir= $tess->tgl_lahir;   
                        //     $dketerangan= $tess->keterangan;
                        //     $table="tbl_sppd_dtl";
                        //     $dataup=array(
                        //         'no_sppd' =>$no_sppd,
                        //         'nip' =>$dnip,
                        //         'nama' =>$dnama,
                        //         'tgl_lahir' =>$dtgl_lahir,
                        //         'keterangan' =>$dketerangan
                        //     );
                        //     $this->m_rinci->insert_kwt($table,$dataup);
                        // endforeach;
                        foreach($datalist as $tess):
                            $dnip= $tess->nip;
                            $dnama= $tess->nama;   
                            $dtgl_lahir= $tess->tgl_lahir;   
                            $dketerangan= $tess->keterangan;
                            $table="tbl_sppd_dtl";
                            $dataup=array(
                                'no_sppd' =>$no_sppd,
                                'nip' =>$dnip,
                                'nama' =>$dnama,
                                'tgl_lahir' =>$dtgl_lahir,
                                'keterangan' =>$dketerangan
                            );
                            $this->m_rinci->insert_kwt($table,$dataup);
                        endforeach;
                        
                    
                    
                    $table="tbl_sppd";
                    $dataup=array(
                        'no_spt' =>$no_spt,
                        'no_sppd' =>$no_sppd,
                        'no_suratm' =>$no_suratm,
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
                        'dibuat_tgl' =>$dibuat_tgl,
                        //'created_by'=>$created_by,
                        //'created_time'=>$created_time,

                    );
                    $this->m_rinci->insert_kwt($table,$dataup);
                    // var_dump($dataup);
                    
                    
                    // redirect("sppd/inpsppd?n=$no_sppd", 'refresh');
                    redirect('sppd/listsppd', 'refresh');
                    // var_dump($dataup);exit;
                }
                else{
                    ?>
                    <script languange='javascript'>
                            window.alert('No SPPD sudah pernah ada');
                            window.history.back();
                    </script> 
                    <?php
                }
            }           
        else{
            ?>
            <script languange='javascript'>
                    window.alert('SPT NIP sudah pernah ada');
                    window.history.back();
            </script> 
            <?php
        }
 
    }
    function edit_sppd(){
        $no_spt = $this->input->post('nospt');
        $nip = $this->input->post('nip');
        $nosppd = $this->input->post('nosppd');
        // var_dump($nosppd);exit;
        $no_sppd = $this->input->post('no_sppd');
        $jenis_angkutan = $this->input->post('jenis_angkutan');
        $dari = $this->input->post('dari');
        $instansi = $this->input->post('instansi');
        $mata_anggaran = $this->input->post('mata_anggaran');
        $lastmodified_by=$this->session->userdata('nama_sub');
        $lastmodified_time = date('Y-m-d H:i:s');
        $where=array(
            'no_spt'=> $no_spt,
            'nip'=> $nip,
        );
        $dataup=array(
            'no_spt' =>$no_spt,
            'no_sppd' =>$no_sppd,
            'jenis_angkutan' =>$jenis_angkutan,
            'dari' =>$dari,
            'instansi' =>$instansi,
            'mata_anggaran' =>$mata_anggaran,
            
            //'created_by'=>$created_by,
            //'created_time'=>$created_time,


        );
        $this->m_rinci->update_rinci($where,$dataup,'tbl_sppd');
        $where=array(
            'no_sppd'=> $nosppd,
            'nip'=> $nip,
        );
        $dataup=array(
            'no_sppd' =>$no_sppd,
            
            //'created_by'=>$created_by,
            //'created_time'=>$created_time,


        );
        $this->m_rinci->update_rinci($where,$dataup,'tbl_sppd_dtl');
        
        // var_dump($this->m_rinci->update_rinci($where,$dataup,'tbl_sppd_dtl'));exit;
        redirect('sppd/listsppd', 'refresh');

    // }

}
public function laporan_pdf(){

    $data=array();
        if($this->input->get('ns')!=""){
        $id=$this->input->get('ns');
            $where=array(
            'no_sppd'=> $id,
        );
        $data['sppd']=$this->m_rinci->get1data("tbl_sppd",$where);
        
        // var_dump($data['spt']);exit;
        }

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('surat/sptstaf', $data);


}
    
}
 
   

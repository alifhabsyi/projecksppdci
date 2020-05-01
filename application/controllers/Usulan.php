<?php
class Usulan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('template');

        $this->load->model('m_rinci');
        $this->load->model('m_main');

        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');

    }

    function index(){
        $data=array();

        $this->template->halaman('usul/addusul',$data);
    }
    function dlt_usul(){

        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_spt";
            $where=array(
                'id_usul'=> $id,
            );
            $data['usul']=$this->m_rinci->delete_rinci($table,$where);
        }

        redirect('usulan/listusul', 'refresh');
    }
    function dlt_dtl_usul(){
        
        $data=array();
        // var_dump($this->input->get('n'));exit;
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_dtl_usul";
            $where=array(
                'dtl_usul'=> $id,
            );
            $data['kwt']=$this->m_rinci->delete_rinci($table,$where);
        }
        $id_usul=$this->input->get('r');
        redirect("usulan/addusul?n=$id_usul", 'refresh');
        
    }
    function listusul(){
        $data=array();
        $data['usul'] = $this->m_main->pagesur('tbl_spt');
        $this->template->halaman('usul/listusul',$data);
    }
    function listusulpending(){
        $data=array();
        $data['usul'] = $this->m_main->pendingusulan('tbl_spt');
        $this->template->halaman('usul/listusulpending',$data);
    }
    function dtl_insert(){
        $nip = $this->input->post('nip2');
        // var_dump($no_surat);
        //Mulai inisiasi cek no agenda atau reset per tahun
        $where            = array(
			'nip' => $nip,
		);
        $cek              = $this->m_rinci->cekada("tbl_dtl_usul",$where)->num_rows();
        // var_dump($cek);
        if($cek==0){    
            
                    
                    //insert ke tabel surat masuk
                    $id_usul =  $this->input->post('id_usul');
                     $nip = $this->input->post('nip2');
                    $nama = $this->input->post('nama2');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    $keterangan = $this->input->post('keterangan');
                    
                    $table="tbl_dtl_usul";
                    $dataup=array(
                        'id_usul' =>$id_usul,
                        'nip' =>$nip,
                        'nama' =>$nama,
                        'tgl_lahir' =>$tgl_lahir,
                        'keterangan' =>$keterangan,
                        

                    );
                    // var_dump($dataup);
                    $this->m_rinci->insert_kwt($table,$dataup);
                    redirect("usulan/addusul?n=$id_usul", 'refresh');
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
    function loadnama(){
        $nip_admin=$this->input->get("nip_admin");
        $table="tbl_user";
            $where=array(
                'nip_admin'=> $nip_admin,
            );
            $data=$this->m_main->get1data($table,$where);
            echo json_encode($data);
          //  var_dump($data);exit;
    }
    function addusul(){
        $data=array();
        $id="";
        $where=array(
            'id_usul'=> $id,
        );
        $data['sppd_dtl'] = $this->m_main->getwhere('tbl_dtl_usul',$where);
        if($this->input->get('n')!=""){
            $id=$this->input->get('n');
            $table="tbl_spt";
            $where=array(
                'id_usul'=> $id,
            );
            $data['usul']=$this->m_rinci->get1data($table,$where);
            $data['sppd_dtl'] = $this->m_main->getwhere('tbl_dtl_usul',$where); //ganti
        }
        $data['nipp'] = $this->m_main->gettable('tbl_user');
        $data['nippgw'] = $this->m_main->gettable('tbl_user');
        $this->template->halaman('usul/addusul',$data);
    }

    function add_usul(){
                    $id_usul = $this->input->post('id_usul');
                    $no_suratm = $this->input->post('no_suratm');
                    $dasar = $this->input->post('dasar');
                    $nama = $this->input->post('nama');
                    $nip = $this->input->post('nip_admin');
                    $pangkat = $this->input->post('pangkat');
                    $jabatan = $this->input->post('jabatan_admin');

                    $tgl_pergi = $this->input->post('tgl_pergi');
                    $tgl_pulang = $this->input->post('tgl_pulang');
                    $tempat_tujuan = $this->input->post('tempat_tujuan');
                    $tujuan_untuk = $this->input->post('tujuan_untuk');
                    $status_spt = $this->input->post('status_spt');
                    $table="tbl_spt";
                    $dataup=array(

                        'id_usul' =>$id_usul,
                        'no_suratm' =>$no_suratm,
                        'dasar' =>$dasar,
                        'nama' =>$nama,
                        'nip' =>$nip,
                        'pangkat' =>$pangkat,
                        'jabatan' =>$jabatan,
                        'tgl_pergi'=>$tgl_pergi,
                        'tgl_pulang'=>$tgl_pulang,
                        'tempat_tujuan'=>$tempat_tujuan,
                        'tujuan_untuk'=>$tujuan_untuk,
                        'status_spt'=>$status_spt,
                        //'created_time'=>$created_time,

                    );
                //  var_dump($dataup);
                  ($this->m_rinci->insert_kwt($table,$dataup));
                    redirect('Usulan/listusul', 'refresh');
                    // var_dump($dataup);exit;
                    }
    function edit_usul(){
        $id_usul = $this->input->post('id_usul');
        $no_suratm = $this->input->post('no_suratm');
        $dasar = $this->input->post('dasar');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip_admin');
        $pangkat = $this->input->post('pangkat');
        $jabatan = $this->input->post('jabatan_admin');

        $tgl_pergi = $this->input->post('tgl_pergi');
        $tgl_pulang = $this->input->post('tgl_pulang');
        $tempat_tujuan = $this->input->post('tempat_tujuan');
        $tujuan_untuk = $this->input->post('tujuan_untuk');
        $status_spt = $this->input->post('status_spt');
        $where=array(
            'id_usul'=> $id_usul,
        );
        $dataup=array(
          'id_usul' =>$id_usul,
          'no_suratm' =>$no_suratm,
          'dasar' =>$dasar,
          'nama' =>$nama,
          'nip' =>$nip,
          'pangkat' =>$pangkat,
          'jabatan' =>$jabatan,
          'tgl_pergi'=>$tgl_pergi,
          'tgl_pulang'=>$tgl_pulang,
          'tempat_tujuan'=>$tempat_tujuan,
          'tujuan_untuk'=>$tujuan_untuk,
          'status_spt'=>$status_spt,
            //'created_by'=>$created_by,
            //'created_time'=>$created_time,


        );
        $this->m_rinci->update_rinci($where,$dataup,'tbl_spt');
        // var_dump($data);exit;
        redirect('usulan/listusul', 'refresh');

    // }

}


}

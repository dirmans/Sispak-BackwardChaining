<?php
class A_penyakit extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}
	
	//    ======================== INDEX =======================
	
	function index()
	{
		$data=array('data_penyakit'=>$this->model_master->getAllPenyakit());
		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_penyakit',$data);
		$this->load->view('admin/v_footer',$data);
	}
	
	function add()
	{
		$data=array('kd_penyakit'=>$this->model_master->getKodePenyakit(),
					'data_penyakit'=>$this->model_master->getAllPenyakit()
        );
		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/option/v_add_penyakit',$data);
		$this->load->view('admin/v_footer',$data);
	}
	
	//    ======================== EDIT =======================
    
	function edit()
	{
        if(isset($_POST['submit']))
		{
			// proses edit
			$id		    =   $this->input->post('kd_penyakit');
			$penyakit   =   $this->input->post('nama_penyakit');
			$penyebab	=   $this->input->post('penyebab');
			$solusi		=   $this->input->post('solusi');
			$data		=	array('nama_penyakit'=>$penyakit,
							'penyebab'=>$penyebab,
							'solusi'=>$solusi);
			$this->model_master->updatePenyakit($data,$id);
			redirect('a_penyakit');
        }
		else
		{ 
            $id = $this->uri->segment(3);
            $data['baris'] = $this->model_master->getPenyakitById($id)->row_array();
			$this->load->view('admin/v_header',$data);
			$this->load->view('admin/option/v_edit_penyakit',$data);
			
        }		
    }
	
	//    ===================== INSERT =====================
	
    function tambahPenyakit(){
        $data=array(
            'kd_penyakit'=>$this->model_master->getKodePenyakit(),
			'nama_penyakit'=>$this->input->post('nama_penyakit'),
			'penyebab'=>$this->input->post('penyebab'),
			'solusi'=>$this->input->post('solusi'));
        $this->model_master->insertPenyakit($data);
        redirect("a_penyakit");
    }
	
	//    ========================== DELETE =======================
    function hapusPenyakit(){
        $id = $this->uri->segment(3);
        $this->model_master->deletePenyakit($id);
        redirect("a_penyakit");
    }
}
?>
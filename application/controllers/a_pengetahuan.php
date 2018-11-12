<?php
class A_pengetahuan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}
	
	//    ======================== INDEX =======================
	
	function index()
	{
		$data=array('data_pengetahuan'=>$this->model_master->getAllGejala(),
					'data_penyakit'=>$this->model_master->getAllPenyakit());
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_pengetahuan',$data);
		$this->load->view('admin/v_footer');
	}
	
	function add()
	{
		$data=array('kd_gejala'=>$this->model_master->getKodeGejala(),
					'data_penyakit'=>$this->model_master->getAllPenyakit(),
					'data_gejala'=>$this->model_master->getAllGejala()
        );
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_add_pengetahuan',$data);
		$this->load->view('admin/v_footer');
	}
	function detail()
	{
		$id = $this->uri->segment(3);
		$data['detail'] = $this->model_master->getPengetahuanById($id);
		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_detail_pengetahuan',$data);
		$this->load->view('admin/v_footer');
	}
	
	//    ======================== EDIT =======================
    
	function edit()
	{
        if(isset($_POST['submit']))
		{
			// proses edit
			$id		    =   $this->input->post('kd_pengetahuan');
			$penyakit   =   $this->input->post('kd_penyakit');
			$gejala		=   $this->input->post('kd_gejala');
			$pertanyaan	=   $this->input->post('pertanyaan');
			$data		=	array('kd_penyakit'=>$penyakit,
							'kd_gejala'=>$gejala,
							'pertanyaan'=>$pertanyaan);
			$this->model_master->updatePengetahuan($data,$id);
			redirect('a_pengetahuan');
        }
		else
		{ 
            $id = $this->uri->segment(3);
			$data=array('data_penyakit'=>$this->model_master->getAllPenyakit(),
						'data_gejala'=>$this->model_master->getAllGejala()
			);
            $data['baris'] = $this->model_master->getDPengetahuanById($id)->row_array();
			$this->load->view('admin/v_header',$data);
			$this->load->view('admin/option/v_edit_pengetahuan',$data);
			
        }		
    }
	
	//    ======================== INSERT =======================
	
    function tambahPengetahuan(){
        $data=array(
            'kd_pengetahuan'=>$this->model_master->getKodePengetahuan(),
			'kd_penyakit'=>$this->input->post('kd_penyakit'),
			'kd_gejala'=>$this->input->post('kd_gejala'),
			'pertanyaan'=>$this->input->post('pertanyaan'));
        $this->model_master->insertPengetahuan($data);
        redirect("a_pengetahuan");
    }
	
	//    ======================== DELETE =======================
    function hapusPengetahuan(){
        $id = $this->uri->segment(3);
        $this->model_master->deletePengetahuan($id);
        redirect("a_pengetahuan");
    }
}
?>
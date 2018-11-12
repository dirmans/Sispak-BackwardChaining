<?php
class A_gejala extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}
	
	//    ======================== INDEX =======================
	
	function index()
	{
		$data=array('data_gejala'=>$this->model_master->getAllGejala());
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_gejala',$data);
		$this->load->view('admin/v_footer');
	}
	
	function add()
	{
		$data=array('kd_gejala'=>$this->model_master->getKodeGejala(),
					'data_gejala'=>$this->model_master->getAllGejala()
        );
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_add_gejala',$data);
		$this->load->view('admin/v_footer');
	}
	
	//    ======================== EDIT =======================
    
	function edit()
	{
        if(isset($_POST['submit']))
		{
			// proses edit
			$id		    =   $this->input->post('kd_gejala');
			$gejala   =   $this->input->post('nama_gejala');
			$poin   =   $this->input->post('poin_gejala');
			$data		=	array('nama_gejala'=>$gejala,
								  'poin_gejala'=>$poin);
			$this->model_master->updateGejala($data,$id);
			redirect('a_gejala');
        }
		else
		{ 
            $id = $this->uri->segment(3);
            $data['baris'] = $this->model_master->getGejalaById($id)->row_array();
			$this->load->view('admin/v_header',$data);
			$this->load->view('admin/option/v_edit_gejala',$data);
        }		
    }
	
	//    ======================== INSERT =======================
	
    function tambahGejala(){
        $data=array(
            'kd_gejala'=>$this->model_master->getKodeGejala(),
			'nama_gejala'=>$this->input->post('nama_gejala'),
			'poin_gejala'=>$this->input->post('poin_gejala'));
        $this->model_master->insertGejala($data);
        redirect("a_gejala");
    }
	
	//    ======================== DELETE =======================
    function hapusGejala(){
        $id = $this->uri->segment(3);
        $this->model_master->deleteGejala($id);
        redirect("a_gejala");
    }
}
?>
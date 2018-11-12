<?php
class A_pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}
	
	//    ======================== INDEX =======================
	
	function index()
	{
		$data=array('data_pengguna'=>$this->model_master->getAllPengguna());
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_pengguna',$data);
		$this->load->view('admin/v_footer', $data);
	}

	function add()
	{
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_add_pengguna');
		$this->load->view('admin/v_footer');
	}
	
	//    ======================== INSERT =======================
	
    function tambahPengguna(){
        $data=array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'));
        $this->model_master->insertPengguna($data);
        redirect("a_pengguna");
    }

	//    ======================== EDIT =======================
    
	function edit()
	{
        if(isset($_POST['submit']))
		{
			// proses edit
			$id		    =   $this->input->post('id');
			$pengguna   =   $this->input->post('nama');
			$password	=   $this->input->post('password');
			$harga		=   $this->input->post('harga');
			$data		=	array('nama'=>$pengguna,
							'password'=>$password,
							'level'=>$level);
			$this->model_master->updatePengguna($data,$id);
			redirect('a_pengguna');
        }
		else
		{ 
            $id = $this->uri->segment(3);
            $data['baris'] = $this->model_master->getPenggunaById($id)->row_array();
			$this->load->view('admin/v_header',$data);
			$this->load->view('admin/option/v_edit_pengguna',$data);
			$this->load->view('admin/v_footer',$data);
        }		
    }

	//    ========================== DELETE =======================
    function hapusPengguna(){
        $id = $this->uri->segment(3);
        $this->model_master->deletePengguna($id);
        redirect("a_pengguna");
    }
}
?>
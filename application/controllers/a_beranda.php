<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Beranda extends CI_Controller {
    function __construct(){
        parent::__construct();
		chek_session();
	}
	
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_beranda', $data);
		$this->load->view('admin/v_footer', $data);
	}

	public function logout() {
		// proses logout
        $this->session->sess_destroy();
        redirect('beranda');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index(){
        $this->load->view('pages/v_daftar');
        //$this->load->view('pages/v_login');
		//$this->load->view('pages/v_footer');
		//$this->load->view('bahan');
    }
}

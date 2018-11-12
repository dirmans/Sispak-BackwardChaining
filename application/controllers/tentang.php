<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
	}

	public function index(){
        $this->load->view('pages/v_tentang');
    }
}

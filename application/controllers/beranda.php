<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index(){
        $this->load->view('pages/v_beranda');
    }
}

<?php
class Auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
    }
    
    function index()
    {
        if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil		=   $this->model_pengguna->login($username,$password);
            if($hasil==1)
            {
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('a_beranda');
            }
            else{
                redirect('auth');
            }
        }
        else{
            chek_session_login();
            $this->load->view('pages/v_login');
        }
    }
}
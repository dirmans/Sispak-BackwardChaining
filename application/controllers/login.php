<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('pages/v_login');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_pengguna'); // load model_pengguna
		$hasil = $this->model_pengguna->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['nama'] = $sess->nama;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('a_admin');
			}
			elseif ($this->session->userdata('level')=='member') {
				redirect('m_member');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>
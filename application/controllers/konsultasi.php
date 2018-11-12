<?php
class Konsultasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
	}
	
	//    ======================== INDEX =======================

	function index()
	{
		$data=array('data_pengetahuan'=>$this->model_master->getAllGejala(),
					'data_penyakit'=>$this->model_master->getAllPenyakit());
		$this->db->empty_table('tmp_relasi');
		$this->db->empty_table('tmp_hasil');
		$this->load->view('pages/v_konsultasi',$data);
	}

	function hasil()
	{
		$data=array('data_hasil'=>$this->model_master->getHasil(),
					'data_ps'=>$this->model_master->getPS(),
					'data_pg'=>$this->model_master->getPG(),
					'data_gj'=>$this->model_master->getAllGejala());
		$this->load->view('pages/v_hasil',$data);
	}

	function tambahrelasi()
    {
		$this->model_master->simpanRelasi();
        redirect('konsultasi/pertanyaan');
    }

    function tambahhasil() {
   	$this->form_validation->set_rules('kd_penyakit[]', 'kd_penyakit', 'required|trim|xss_clean');
  	$this->form_validation->set_rules('kd_gejala[]', 'kd_gejala', 'required|trim|xss_clean');
   	$this->form_validation->set_rules('poin_gejala[]', 'poin_gejala', 'required|trim|xss_clean');
   
   	if ($this->form_validation->run() == FALSE){
    echo validation_errors(); // tampilkan apabila ada error
   	}else{
    
    $nm = $this->input->post('kd_penyakit');
    $result = array();
    foreach($nm AS $key => $val){
     $result[] = array(
      "kd_penyakit"  => $_POST['kd_penyakit'][$key],
      "kd_gejala"  => $_POST['kd_gejala'][$key],
      "poin_gejala"  => $_POST['poin_gejala'][$key]
     );
    }            
    
    $test= $this->db->insert_batch('tmp_hasil', $result); // fungsi  untuk menyimpan multi array ke database
    
    if($test){
     	echo "data sukses di input";
     	redirect('konsultasi/hasil');    
 	}else{
     	echo "gagal di input";
    }
   	}
  	}
	
	function pertanyaan() 
	{
		$data =array('record'=>$this->model_master->getPenyakit(),
					 'relasi'=>$this->model_master->getRelasi());
		$this->load->view('pages/v_pertanyaan',$data);
	}
}
?>
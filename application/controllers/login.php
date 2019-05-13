<?php
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');		
	}

	function index() {
		$data = array('title' => 'Aplikasi Statistika', 
					  'isi' => 'login_view');
		$this->load->view('login_view',$data);
	}

	function login_proses() {
	  if(isset($_POST['save'])) {
	  	$this->form_validation->set_rules('username','Username','trim|required');
	  	$this->form_validation->set_rules('password','Password','trim|required');
	  	if($this->form_validation->run() != false) {
	  	$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/bagian"));
		}else{
			$pesan = $this->session->set_flashdata('pesan', 
			'<div class="alert alert-danger" role="alert">
              <b><span class="fa fa-close"></span> Username atau Password anda Salah, Silahkan Coba lagi ! </b></div>');
			$data = array('title' => 'Aplikasi Statistika', 
					  	'isi' => 'login_view'
			);
			$this->load->view('login_view',$pesan,$data);
		}
	  	}else{ //Else validation
	  		$data = array('title' => 'Aplikasi Statistika', 
					  'isi' => 'login_view');
			$this->load->view('login_view',$data);
	  	}
	  }else{ //Else null name button
	  	$data = array('title' => 'Aplikasi Statistika', 
					  'isi' => 'login_view');
		$this->load->view('login_view',$data);
	  }
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}
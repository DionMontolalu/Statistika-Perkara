<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bulanan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function biasa() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Pidana Biasa', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/biasa_add'),
					  'lihat' => base_url('index.php/pidana/status/biasa_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function kasasi() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Kasasi', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/kasasi_add'),
					  'lihat' => base_url('index.php/pidana/status/kasasi_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function tipiring() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Tipiring', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/tipiring_add'),
					  'lihat' => base_url('index.php/pidana/status/tipiring_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function pk() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> PK', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/pk_add'),
					  'lihat' => base_url('index.php/pidana/status/pk_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function lalu_lintas() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Lalu Lintas', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/lintas_add'),
					  'lihat' => base_url('index.php/pidana/status/lintas_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function grasi() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Grasi', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/grasi_add'),
					  'lihat' => base_url('index.php/pidana/status/grasi_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function khusus() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Pidana Khusus', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/khusus_add'),
					  'lihat' => base_url('index.php/pidana/status/khusus_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}	

	function tahanan() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Daftar Tahanan', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/tahanan'),
					  'lihat' => base_url('index.php/pidana/tahanan/view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function banding() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PIDANA</ins> <br> Banding', 
					  'isi' => 'pidana/status',
					  'tambah' => base_url('index.php/pidana/status/banding_add'),
					  'lihat' => base_url('index.php/pidana/status/banding_view')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

}
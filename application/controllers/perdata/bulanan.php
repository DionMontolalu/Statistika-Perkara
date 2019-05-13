<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bulanan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function gugatan() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Gugatan Bulanan', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/gugatan_add'),
					  'lihat' => base_url('index.php/perdata/status/gugatan_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function banding() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Banding', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/banding_add'),
					  'lihat' => base_url('index.php/perdata/status/banding_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function sederhana() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Gugatan Sederhana', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/sederhana_add'),
					  'lihat' => base_url('index.php/perdata/status/sederhana_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function kasasi() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Kasasi', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/kasasi_add'),
					  'lihat' => base_url('index.php/perdata/status/kasasi_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function permohonan() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Permohonan', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/permohonan_add'),
					  'lihat' => base_url('index.php/perdata/status/permohonan_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function peninjauan() {
		$data = array('title' => 'Status Bulanan',
					  'head' => '<ins>PERDATA</ins> <br> Peninjauan Kembali', 
					  'isi' => 'perdata/status',
					  'tambah' => base_url('index.php/perdata/status/peninjauan_add'),
					  'lihat' => base_url('index.php/perdata/status/peninjauan_view')
					  );
		$this->load->view('perdata/design/combination',$data);
	}

}
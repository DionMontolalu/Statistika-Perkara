<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('perdata/m_laporan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}		
	}

	function index() {
		$data = array('title' => 'Pelaporan Perdata', 
					  'isi' => 'nav_laporan');
		$this->load->view('perdata/nav_laporan',$data);
	}

	function bulanan() {
		$data = array('title' => 'Pelaporan Bulanan', 
					  'isi' => 'navigasi',
					  'gugatan' => base_url('index.php/perdata/bulanan/gugatan'),
					  'banding' => base_url('index.php/perdata/bulanan/banding'),
					  'sederhana' => base_url('index.php/perdata/bulanan/sederhana'),
					  'kasasi' => base_url('index.php/perdata/bulanan/kasasi'),
					  'permohonan' => base_url('index.php/perdata/bulanan/permohonan'),
					  'peninjauan' => base_url('index.php/perdata/bulanan/peninjauan')
				);
		$this->load->view('perdata/navigasi',$data);
	}

	function triwulan() {
		$data = array('title' => 'Laporan Triwulan',
					  'head' => 'PERDATA LAPORAN TRIWULAN', 
					  'isi' => 'perdata/vs_triwulan',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Triwulan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_triwulan',
					  'tahun'=>$this->m_laporan->s_triwulan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_triwulan() {
		$data = array('title' => 'Laporan Triwulan',
					  'head' => 'PERDATA LAPORAN TRIWULAN', 
					  'isi' => 'perdata/view_triwulan',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Triwulan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_triwulan',
					  'tampil' => $this->m_laporan->triwulan(),
					  'tahun'=>$this->m_laporan->s_triwulan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function semester() {
		$data = array('title' => 'Laporan Semester',
					  'head' => 'PERDATA LAPORAN SEMESTER', 
					  'isi' => 'perdata/vs_semester',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Semester',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_semester',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_semester() {
		$data = array('title' => 'Laporan Semester',
					  'head' => 'PERDATA LAPORAN SEMESTER', 
					  'isi' => 'perdata/view_semester',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Semester',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_semester',
					  'tampil' => $this->m_laporan->semester(),
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function tahunan() {
		$data = array('title' => 'Laporan Tahunan',
					  'head' => 'PERDATA LAPORAN TAHUNAN', 
					  'isi' => 'perdata/vs_tahun',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Tahunan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_tahunan',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_tahunan() {
		$data = array('title' => 'Laporan Tahunan',
					  'head' => 'PERDATA LAPORAN TAHUNAN', 
					  'isi' => 'perdata/view_tahun',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Tahunan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_tahunan',
					  'tampil' => $this->m_laporan->tahun(),
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function minutasi() {
		$data = array('title' => 'Laporan Minutasi',
					  'head' => 'PERDATA MINUTASI PERKARA', 
					  'isi' => 'perdata/vs_minutasi',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Minutasi Perkara',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_minutasi',
					  'tahun'=>$this->m_laporan->s_minutasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_minutasi() {
		$data = array('title' => 'Laporan Minutasi',
					  'head' => 'PERDATA MINUTASI PERKARA', 
					  'isi' => 'perdata/v_minutasi',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Minutasi Perkara',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/laporan/search_minutasi',
					  'gugat' => $this->m_laporan->mutasi_gut(),
					  'seder' => $this->m_laporan->mutasi_sed(),
					  'permo' => $this->m_laporan->mutasi_per(),
					  'tahun'=>$this->m_laporan->s_minutasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function grafik() {
		$data = array('title' => 'Grafik Tahunan Perkara Perdata',
					  'head' => '', 
					  'isi' => 'perdata/vs_grafik',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Grafik Tahunan Perdata',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Grafik Data Perkara Bagian Perdata',
					  'link_pe' => '#',
					  'cari' => 'perdata/laporan/search_grafik',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_grafik() {
		$data = array('title' => 'Grafik Tahunan Perkara Perdata',
					  'head' => '', 
					  'isi' => 'perdata/view_grafik',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Grafik Tahunan Perdata',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Grafik Data Perkara Bagian Perdata',
					  'link_pe' => '#',
					  'view' => $this->m_laporan->grafik(),
					  'cari' => 'perdata/laporan/search_grafik',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

}
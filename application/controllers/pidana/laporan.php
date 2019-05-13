<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('pidana/m_laporan');	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}	
	}

	function index() {
		$data = array('title' => 'Pelaporan Pidana', 
					  'isi' => 'nav_laporan');
		$this->load->view('pidana/nav_laporan',$data);
	}

	function bulanan() {
		$data = array('title' => 'Pelaporan Bulanan', 
					  'isi' => 'pidana/navigasi',
					  'biasa' => base_url('index.php/pidana/bulanan/biasa'),
					  'kasasi' => base_url('index.php/pidana/bulanan/kasasi'),
					  'tipiring' => base_url('index.php/pidana/bulanan/tipiring'),
					  'pk' => base_url('index.php/pidana/bulanan/pk'),
					  'lalu_lintas' => base_url('index.php/pidana/bulanan/lalu_lintas'),
					  'grasi' => base_url('index.php/pidana/bulanan/grasi'),
					  'khusus' => base_url('index.php/pidana/bulanan/khusus'),
					  'tahanan' => base_url('index.php/pidana/bulanan/tahanan'),
					  'banding' => base_url('index.php/pidana/bulanan/banding')
				);
		$this->load->view('pidana/navigasi',$data);
	}

	function triwulan() {
		$data = array('title' => 'Laporan Triwulan',
					  'head' => 'PIDANA LAPORAN TRIWULAN', 
					  'isi' => 'pidana/vs_triwulan',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Triwulan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_triwulan',
					  'tahun'=>$this->m_laporan->s_triwulan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_triwulan() {
		$data = array('title' => 'Laporan Triwulan',
					  'head' => 'PIDANA LAPORAN TRIWULAN', 
					  'isi' => 'pidana/view_triwulan',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Triwulan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_triwulan',
					  'tampil' => $this->m_laporan->triwulan(),
					  'tahun'=>$this->m_laporan->s_triwulan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function semester() {
		$data = array('title' => 'Laporan Semester',
					  'head' => 'PIDANA LAPORAN SEMESTER', 
					  'isi' => 'pidana/vs_semester',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Semester',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_semester',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_semester() {
		$data = array('title' => 'Laporan Semester',
					  'head' => 'PIDANA LAPORAN SEMESTER', 
					  'isi' => 'pidana/view_semester',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Semester',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_semester',
					  'tampil' => $this->m_laporan->semester(),
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function tahunan() {
		$data = array('title' => 'Laporan Tahunan',
					  'head' => 'PIDANA LAPORAN TAHUNAN', 
					  'isi' => 'pidana/vs_tahun',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Tahunan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_tahunan',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_tahunan() {
		$data = array('title' => 'Laporan Tahunan',
					  'head' => 'PIDANA LAPORAN TAHUNAN', 
					  'isi' => 'pidana/view_tahun',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Tahunan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_tahunan',
					  'tampil' => $this->m_laporan->tahun(),
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function minutasi() {
		$data = array('title' => 'Laporan Minutasi',
					  'head' => 'PIDANA MINUTASI PERKARA', 
					  'isi' => 'pidana/vs_minutasi',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Minutasi Perkara',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_minutasi',
					  'tahun'=>$this->m_laporan->s_minutasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_minutasi() {
		$data = array('title' => 'Laporan Minutasi',
					  'head' => 'PIDANA MINUTASI PERKARA', 
					  'isi' => 'pidana/v_minutasi',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Minutasi Perkara',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  //'perkara' => 'Gugatan',
					  //'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'pidana/laporan/search_minutasi',
					  'khus' => $this->m_laporan->mutasi_khs(),
					  'tipi' => $this->m_laporan->mutasi_tip(),
					  'bias' => $this->m_laporan->mutasi_bis(),
					  'tahun'=>$this->m_laporan->s_minutasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function grafik() {
		$data = array('title' => 'Grafik Tahunan Perkara Perdata',
					  'head' => '', 
					  'isi' => 'pidana/vs_grafik',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Grafik Tahunan Pidana',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Grafik Data Perkara Bagian Pidana',
					  'link_pe' => '#',
					  'cari' => 'pidana/laporan/search_grafik',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_grafik() {
		$data = array('title' => 'Grafik Tahunan Perkara Perdata',
					  'head' => '', 
					  'isi' => 'pidana/view_grafik',
					  'status' => 'View Data',
					  'link_st' => '#',
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Grafik Tahunan Pidana',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Grafik Data Perkara Bagian Pidana',
					  'link_pe' => '#',
					  'view' => $this->m_laporan->grafik(),
					  'cari' => 'pidana/laporan/search_grafik',
					  'tahun'=>$this->m_laporan->s_semester(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

}
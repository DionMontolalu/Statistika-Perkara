<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('perdata/m_search');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	//Method untuk memangil gugatan
	function gugatan_add() {
		$data = array('title' => 'Gugatan Bulanan',
					  'head' => 'PERDATA GUGATAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/gugatan_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function gugatan_view() {
		$data = array('title' => 'Gugatan Bulanan',
					  'head' => 'PERDATA GUGATAN', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_gugatan',
					  'tahun'=>$this->m_search->tahun_gugatan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);	
	}

	function search_gugatan() {
		$data = array('title' => 'Gugatan Bulanan',
					  'head' => 'PERDATA GUGATAN', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_gugatan',
					  'tampil' => $this->m_search->search_gugatan(),
					  'tahun'=>$this->m_search->tahun_gugatan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);	
	}

	//Method untuk memanggil banding
	function banding_add() {
		$data = array('title' => 'Banding Bulanan',
					  'head' => 'PERDATA BANDING', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Banding',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/banding_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function banding_view() {
		$data = array('title' => 'Banding Bulanan',
					  'head' => 'PERDATA BANDING', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Banding',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_banding',
					  'tahun'=>$this->m_search->tahun_banding(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_banding() {
		$data = array('title' => 'Banding Bulanan',
					  'head' => 'PERDATA BANDING', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Banding',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_banding',
					  'tampil' => $this->m_search->search_banding(),
					  'tahun'=>$this->m_search->tahun_banding(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function sederhana_add() {
		$data = array('title' => 'Gugatan Sederhana Bulanan',
					  'head' => 'PERDATA GUGATAN SEDERHANA', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan Sederhana',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/sederhana_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function sederhana_view() {
		$data = array('title' => 'Gugatan Sederhana Bulanan',
					  'head' => 'PERDATA GUGATAN SEDERHANA', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan Sederhana',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_sederhana',
					  'tahun'=>$this->m_search->tahun_sederhana(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_sederhana() {
		$data = array('title' => 'Gugatan Sederhana Bulanan',
					  'head' => 'PERDATA GUGATAN SEDERHANA', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan Sederhana',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_sederhana',
					  'tampil' => $this->m_search->search_sederhana(),
					  'tahun'=>$this->m_search->tahun_sederhana(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function kasasi_add() {
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PERDATA KASASI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Kasasi',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/kasasi_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function kasasi_view() {
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PERDATA KASASI', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Kasasi',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_kasasi',
					  'tahun'=>$this->m_search->tahun_kasasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_kasasi() {
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PERDATA KASASI', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Kasasi',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_kasasi',
					  'tampil' => $this->m_search->search_kasasi(),
					  'tahun'=>$this->m_search->tahun_kasasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function permohonan_add() {
		$data = array('title' => 'Permohonan Bulanan',
					  'head' => 'PERDATA PERMOHONAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Permohonan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/permohonan_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function permohonan_view() {
		$data = array('title' => 'Permohonan Bulanan',
					  'head' => 'PERDATA PERMOHONAN', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Permohonan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_permohonan',
					  'tahun'=>$this->m_search->tahun_permohonan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_permohonan() {
		$data = array('title' => 'Permohonan Bulanan',
					  'head' => 'PERDATA PERMOHONAN', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Permohonan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_permohonan',
					  'tampil' => $this->m_search->search_permohonan(),
					  'tahun'=>$this->m_search->tahun_permohonan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function peninjauan_add() {
		$data = array('title' => 'Peninjauan Kembali Bulanan',
					  'head' => 'PERDATA PENINJAUAN KEMBALI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Peninjauan Kembali',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/peninjauan_add'
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function peninjauan_view() {
		$data = array('title' => 'Peninjauan Kembali Bulanan',
					  'head' => 'PERDATA PENINJAUAN KEMBALI', 
					  'isi' => 'perdata/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Peninjauan Kembali',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_peninjauan',
					  'tahun'=>$this->m_search->tahun_peninjauan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

	function search_peninjauan() {
		$data = array('title' => 'Peninjauan Kembali Bulanan',
					  'head' => 'PERDATA PENINJAUAN KEMBALI', 
					  'isi' => 'perdata/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Peninjauan Kembali',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'cari' => 'perdata/status/search_peninjauan',
					  'tampil' => $this->m_search->search_peninjauan(),
					  'tahun'=>$this->m_search->tahun_peninjauan(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('perdata/design/combination',$data);
	}

}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('pidana/m_search');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function biasa_add(){
		$data = array('title' => 'Pidana Bulanan',
					  'head' => 'PIDANA BIASA', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/biasa'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Biasa',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/biasa_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function biasa_view(){
		$data = array('title' => 'Pidana Bulanan',
					  'head' => 'PIDANA BIASA', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/biasa'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Biasa',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_biasa',
					  'tahun'=>$this->m_search->tahun_biasa(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_biasa() {
		$data = array('title' => 'Pidana Bulanan',
					  'head' => 'PIDANA BIASA', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/biasa'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Biasa',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_biasa',
					  'tampil' => $this->m_search->search_biasa(),
					  'tahun'=>$this->m_search->tahun_biasa(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function kasasi_add(){
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PIDANA KASASI', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/kasasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Kasasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/kasasi_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function kasasi_view(){
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PIDANA KASASI', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/kasasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Kasasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_kasasi',
					  'tahun'=>$this->m_search->tahun_kasasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_kasasi() {
		$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PIDANA KASASI', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/kasasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Kasasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_kasasi',
					  'tampil' => $this->m_search->search_kasasi(),
					  'tahun'=>$this->m_search->tahun_kasasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function tipiring_add(){
		$data = array('title' => 'Tipiring Bulanan',
					  'head' => 'PIDANA TIPIRING', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tipiring'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Tipiring',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/tipiring_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function tipiring_view(){
		$data = array('title' => 'Tipiring Bulanan',
					  'head' => 'PIDANA TIPIRING', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tipiring'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Tipiring',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_tipiring',
					  'tahun'=>$this->m_search->tahun_tipiring(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_tipiring() {
		$data = array('title' => 'Tipiring Bulanan',
					  'head' => 'PIDANA TIPIRING', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tipiring'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Tipiring',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_tipiring',
					  'tampil' => $this->m_search->search_tipiring(),
					  'tahun'=>$this->m_search->tahun_tipiring(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function pk_add(){
		$data = array('title' => 'PK Bulanan',
					  'head' => 'PIDANA PK', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/pk'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'PK',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/pk_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function pk_view(){
		$data = array('title' => 'PK Bulanan',
					  'head' => 'PIDANA PK', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/pk'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'PK',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_pk',
					  'tahun'=>$this->m_search->tahun_pk(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_pk() {
		$data = array('title' => 'PK Bulanan',
					  'head' => 'PIDANA PK', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/pk'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'PK',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_pk',
					  'tampil' => $this->m_search->search_pk(),
					  'tahun'=>$this->m_search->tahun_pk(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function lintas_add() {
		$data = array('title' => 'Lalu Lintas Bulanan',
					  'head' => 'PIDANA LALU LINTAS', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/lalu_lintas'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Lalu Lintas',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/lintas_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function lintas_view() {
		$data = array('title' => 'Lalu Lintas Bulanan',
					  'head' => 'PIDANA LALU LINTAS', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/lintas'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Lalu Lintas',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_lintas',
					  'tahun'=>$this->m_search->tahun_lintas(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_lintas() {
		$data = array('title' => 'Lalu Lintas Bulanan',
					  'head' => 'PIDANA LALU LINTAS', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/lintas'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Lalu Lintas',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_lintas',
					  'tampil' => $this->m_search->search_lintas(),
					  'tahun'=>$this->m_search->tahun_lintas(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function grasi_add() {
		$data = array('title' => 'Grasi Bulanan',
					  'head' => 'PIDANA GRASI', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/grasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Grasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/grasi_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function grasi_view(){
		$data = array('title' => 'Grasi Bulanan',
					  'head' => 'PIDANA GRASI', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/grasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Grasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_grasi',
					  'tahun'=>$this->m_search->tahun_grasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_grasi() {
		$data = array('title' => 'Grasi Bulanan',
					  'head' => 'PIDANA GRASI', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/grasi'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Grasi',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_grasi',
					  'tampil' => $this->m_search->search_grasi(),
					  'tahun'=>$this->m_search->tahun_grasi(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function khusus_add() {
		$data = array('title' => 'Pidana Khusus Bulanan',
					  'head' => 'PIDANA KHUSUS', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/khusus'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Khusus',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/khusus_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function khusus_view() {
		$data = array('title' => 'Pidana Khusus Bulanan',
					  'head' => 'PIDANA KHUSUS', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/khusus'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Khusus',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_khusus',
					  'tahun'=>$this->m_search->tahun_khusus(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_khusus() {
		$data = array('title' => 'Pidana Khusus Bulanan',
					  'head' => 'PIDANA KHUSUS', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/khusus'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Khusus',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_khusus',
					  'tampil' => $this->m_search->search_khusus(),
					  'tahun'=>$this->m_search->tahun_khusus(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}


	function banding_add() {
		$data = array('title' => 'Pidana Banding Bulanan',
					  'head' => 'PIDANA BANDING', 
					  'isi' => 'pidana/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/banding'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Banding',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'add' => 'pidana/insert/banding_add'
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function banding_view() {
		$data = array('title' => 'Pidana Banding Bulanan',
					  'head' => 'PIDANA BANDING', 
					  'isi' => 'pidana/view_search',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/banding'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Banding',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_banding',
					  'tahun'=>$this->m_search->tahun_banding(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function search_banding() {
		$data = array('title' => 'Pidana Banding Bulanan',
					  'head' => 'PIDANA BANDING', 
					  'isi' => 'pidana/view_bulan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/banding'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Pidana Banding',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  'cari' => 'pidana/status/search_banding',
					  'tampil' => $this->m_search->search_banding(),
					  'tahun'=>$this->m_search->tahun_banding(),
					  'tahun_selected' => $this->input->post('tahun')?$this->input->post('tahun'):''
					  );
		$this->load->view('pidana/design/combination',$data);
	}

}
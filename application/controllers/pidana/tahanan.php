<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahanan extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index() {
		$data = array('title' => 'Daftar Tahanan',
					  'head' => 'DAFTAR TAHANAN', 
					  'isi' => 'pidana/insert_tahanan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tahanan'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Daftar Tahanan',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function view() {
		$data = array('title' => 'Daftar Tahanan',
					  'head' => 'DAFTAR TAHANAN', 
					  'isi' => 'pidana/view_tahanan',
					  'status' => 'View Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tahanan'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Daftar Tahanan',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan')
					  );
		$this->load->view('pidana/design/combination',$data);
	}

	function add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('nama_tahan','Nama Tahanan','trim|required');
			$this->form_validation->set_rules('jenis_tahan','Jenis Tahanan','trim|required');
			if($this->form_validation->run() != false) {
				$tahanan = array(
					'nama_tahan' => $this->input->post('nama_tahan'),
					'jenis_tahan' => $this->input->post('jenis_tahan'),
					'tahun' => $this->input->post('tahun')
				);$this->db->insert('tahanan',$tahanan);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Tahanan berhasil disimpan ! </b></div>');
				redirect('pidana/tahanan/add');
			}else{ //Jika form validation tidak benar
				$data = array('title' => 'Daftar Tahanan',
					  'head' => 'DAFTAR TAHANAN', 
					  'isi' => 'pidana/insert_tahanan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tahanan'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Daftar Tahanan',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  );
				$this->load->view('pidana/design/combination',$data);
			}
		}else{ // Else jika variabel save tidak ditemukan
			$data = array('title' => 'Daftar Tahanan',
					  'head' => 'DAFTAR TAHANAN', 
					  'isi' => 'pidana/insert_tahanan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/pidana/bulanan/tahanan'),
					  'bagian' => 'Pidana',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/pidana/laporan'),
					  'perkara' => 'Daftar Tahanan',
					  'link_pe' => base_url('index.php/pidana/laporan/bulanan'),
					  );
			$this->load->view('pidana/design/combination',$data);
		}
	}

	function data_tahanan() {
	 $this->load->model('pidana/m_tahanan');  
     $fetch_data = $this->m_tahanan->make_datatables();  
     $no = 1;
     $data = array();  
      foreach($fetch_data as $row) {  
       	$sub_array = array();
       	$sub_array[] = '<center>'.$no.'</center>';  
        $sub_array[] = $row->nama_tahan;
		$sub_array[] = '<center>'.$row->jenis_tahan.'</center>';
		$sub_array[] = '<center>'.$row->tahun.'</center>'; 
  
        $no++;
        $data[] = $sub_array;
      }  
        $output = array( "draw"            =>  intval($_POST["draw"]),  
                         "recordsTotal"    =>  $this->m_tahanan->get_all_data(),  
                         "recordsFiltered" =>  $this->m_tahanan->get_filtered_data(),  
                         "data"            =>  $data );  
        echo json_encode($output);
	}

	

}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_search extends CI_Model {

	function search_gugatan(){
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Gugatan');
		$query = $this->db->get ('v_bulan');
		return $query->result(); 
 	}

 	function search_banding() {
 		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Banding');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_sederhana() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Gugatan Sederhana');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_kasasi() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Kasasi');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_permohonan() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Permohonan');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_peninjauan() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Perdata');
		$this->db->where('nama_perkara', 'Peninjauan Kembali');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function tahun_gugatan() {
      $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Gugatan');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

    function tahun_banding() {
      $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Banding');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

    function tahun_sederhana() {
      $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Gugatan Sederhana');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

    function tahun_kasasi() {
      $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Kasasi');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

    function tahun_permohonan() {
    	$this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Permohonan');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

    function tahun_peninjauan() {
    	$this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $this->db->where('nama_perkara', 'Peninjauan Kembali');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
    }

}
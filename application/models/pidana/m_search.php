<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_search extends CI_Model {

	function search_biasa() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Pidana Biasa');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	} 

	function search_kasasi() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Pidana Kasasi');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_tipiring() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Tipiring');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_pk() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'PK');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_lintas() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Lalu Lintas');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_grasi() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Grasi');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_khusus() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Pidana Khusus');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_tahanan() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Daftar Tahanan');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function search_banding() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian', 'Pidana');
		$this->db->where('nama_perkara', 'Pidana Banding');
		$query = $this->db->get ('v_bulan');
		return $query->result();
	}

	function tahun_biasa() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Pidana Biasa');
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
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Pidana Kasasi');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_tipiring() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Tipiring');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_pk() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'PK');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_lintas() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Lalu Lintas');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_grasi() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Grasi');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_khusus() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Pidana Khusus');
      $result = $this->db->get('v_bulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function tahun_tahanan() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Daftar Tahanan');
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
      $this->db->where('nama_bagian', 'Pidana');
      $this->db->where('nama_perkara', 'Pidana Banding');
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
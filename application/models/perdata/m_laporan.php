<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_laporan extends CI_Model {

	function triwulan() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->select('tahun');
		$this->db->select("SUM(tri1_masuk) as tmas1");
		$this->db->select("SUM(tri1_putus) as tput1");
		$this->db->select("SUM(tri1_sisa) as tisa1");
		
		$this->db->select("SUM(tri2_masuk) as tmas2");
		$this->db->select("SUM(tri2_putus) as tput2");
		$this->db->select("SUM(tri2_sisa) as tisa2");

		$this->db->select("SUM(tri3_masuk) as tmas3");
		$this->db->select("SUM(tri3_putus) as tput3");
		$this->db->select("SUM(tri3_sisa) as tisa3");

		$this->db->select("SUM(tri4_masuk) as tmas4");
		$this->db->select("SUM(tri4_putus) as tput4");
		$this->db->select("SUM(tri4_sisa) as tisa4");
		
		$query = $this->db->get ('v_triwulan');
		return $query->result();
	}

	function semester() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->select('tahun');
		$this->db->select("SUM(sem1_masuk) as smas1");
		$this->db->select("SUM(sem1_putus) as sput1");
		$this->db->select("SUM(sem1_sisa) as sisa1");
		$this->db->select("SUM(sem2_masuk) as smas2");
		$this->db->select("SUM(sem2_putus) as sput2");
		$this->db->select("SUM(sem2_sisa) as sisa2");
		$query = $this->db->get ('v_semester');
		return $query->result();
	}

	function tahun() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->select('tahun');
		$this->db->select("SUM(masuk_tahun) as masuk");
		$this->db->select("SUM(putus_tahun) as putus");
		$this->db->select("SUM(sisa_tahun) as sisa");
		$query = $this->db->get ('v_semester');
		$this->db->group_by("tahun");
		return $query->result();
	}

	function mutasi_gut() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->where('nama_perkara', 'Gugatan');
		$query = $this->db->get ('v_bulan');
		return $query->result();	
	}

	function mutasi_sed() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->where('nama_perkara', 'Gugatan Sederhana');
		$query = $this->db->get ('v_bulan');
		return $query->result();	
	}

	function mutasi_per() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->where('nama_perkara', 'Permohonan');
		$query = $this->db->get ('v_bulan');
		return $query->result();	
	}

	function grafik() {
		$c = $this->input->POST('tahun');
		$this->db->like('tahun', $c);
		$this->db->where('nama_bagian','Perdata');
		$this->db->select('tahun');
		$this->db->select('nama_perkara');
		$this->db->select("SUM(masuk_tahun) as masuk");
		$this->db->select("SUM(putus_tahun) as putus");
		$this->db->select("SUM(sisa_tahun) as sisa");
		$this->db->group_by("nama_perkara");
		$this->db->order_by('tahun','asc');
		$query = $this->db->get ('v_bulan');
		return $query->result(); 
	}

	function s_triwulan() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $result = $this->db->get('v_triwulan');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function s_semester() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $result = $this->db->get('v_semester');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function s_tahun() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $result = $this->db->get('v_semester');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

	function s_minutasi() {
	  $this->db->order_by('tahun','asc');
      $this->db->where('nama_bagian', 'Perdata');
      $result = $this->db->get('v_minutasi');

      $dd[''] = 'Tahun';
      if($result->num_rows()>0){
        foreach ($result->result() as $row) {
          $dd[$row->tahun] = $row->tahun;
        }
      }
      return $dd;
	}

}
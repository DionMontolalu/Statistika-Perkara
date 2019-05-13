<?php
class M_insert extends CI_Model {
  
  // Method yang digunakan untuk menginput data
  function add($bulan,$triwulan,$semester) {
    $this->db->trans_begin();
      $this->db->insert('bulan', $bulan);
      $this->db->insert('triwulan', $triwulan);
      $this->db->insert('semester', $semester);

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
    }else{
      $this->db->trans_commit();
    }
      return $this->db->insert_id();
  }
}
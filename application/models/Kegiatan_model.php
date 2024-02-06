<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // Get All Kegiatan
  public function get_all_kegiatan()
  {
    $this->db->select('*')
      ->from('xin_kegiatan');

    $query = $this->db->get();
    return $query->result_array();
  }


  public function get_kegiatan_by_id($choosed_id)
  {
    $this->db->from('xin_kegiatan');
    $this->db->where_in('id', $choosed_id);
    $query = $this->db->get();

    // Return the result as an array
    return $query->result_array();
  }


  public function get_data_by_date_range($start_date, $end_date)
  {
    // Ganti 'your_table_name' dengan nama tabel yang sesuai
    $this->db->from('xin_kegiatan');
    $this->db->where('tanggal >=', $start_date);
    $this->db->where('tanggal <=', $end_date);
    $query = $this->db->get();

    // Kembalikan hasil sebagai array
    return $query->result_array();
  }


  // add kegiatan
  public function add_kegiatan($data)
  {
    $this->db->insert('xin_kegiatan', $data);
    $insert_id = $this->db->insert_id();

    return  $insert_id;
  }

  public function update_instrumen($id, $data, $table)
  {
    $this->db->where('id', (int)$id);
    $this->db->update($table, $data);

    return true;
  }

  public function delete_instrumen($id, $table)
  {
    $this->db->where('id', (int)$id);
    $this->db->delete($table);

    return true;
  }

  public function delete($id)
  {
    $this->db->where('id', (int)$id);
    $this->db->delete('xin_kegiatan');

    return true;
  }

  public function get_mata_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_mata');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_tujuan_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_tujuan');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_dokumen_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_dokumen');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_kendala_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_kendala');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }


  public function get_solusi_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_solusi');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }


  public function get_perbaikan_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_perbaikan');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }


  public function get_kolaborator_by_id_kegiatan($id_kegiatan)
  {
    $this->db->from('xin_kegiatan_kolaborator');
    $this->db->where('id_kegiatan', (int)$id_kegiatan);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function add_mata_acara($data)
  {
    $this->db->insert('xin_kegiatan_mata', $data);

    return true;
  }
}

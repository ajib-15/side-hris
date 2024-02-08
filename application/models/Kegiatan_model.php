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
  public function get_all_kegiatan($role, $id_user)
  {
    $this->db->select('*')
      ->from('xin_kegiatan');
    if ($role != "1" && $role != "3") {
      $this->db->where('created_by', (int)$id_user);
    }

    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_data_by_date_range($start_date, $end_date, $role, $id_user)
  {
    $this->db->from('xin_kegiatan');
    $this->db->where('tanggal >=', $start_date);
    $this->db->where('tanggal <=', $end_date);
    if ($role !== "1" && $role !== "3") {
      $this->db->where('created_by', (int)$id_user);
    }
    $query = $this->db->get();

    // Kembalikan hasil sebagai array
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

  public function get_employees()
  {
    $this->db->from('xin_employees');
    $this->db->where_in('user_role_id', "2");
    $query = $this->db->get();

    // Return the result as an array
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

  public function add_instrumen($data, $table)
  {
    $this->db->insert($table, $data);
    return true;
  }

  public function getWeeklyDataCount()
  {
    // Get the current month and year
    $currentMonth = date('m');
    $currentYear = date('Y');

    // Calculate the start and end dates for the current month
    $startDate = date('Y-m-01');
    $endDate = date('Y-m-t');

    // Initialize an array to store the weekly data counts
    $weeklyCounts = array_fill(0, 4, 0);

    // Get the total days in the current month
    $totalDays = date('t', strtotime($startDate));

    // Calculate the number of days in each week
    $daysPerWeek = ceil($totalDays / 4);

    // Loop through each week and get the data count
    for ($i = 0; $i < 4; $i++) {
      // Calculate the start and end dates for the current week
      $startDay = $i * $daysPerWeek + 1;
      $endDay = min(($i + 1) * $daysPerWeek, $totalDays);
      $weekStartDate = date('Y-m-d', strtotime("$currentYear-$currentMonth-$startDay"));
      $weekEndDate = date('Y-m-d', strtotime("$currentYear-$currentMonth-$endDay"));

      // Get the data count for the current week
      $weeklyCounts[$i] = $this->db->where('tanggal >=', $weekStartDate)
        ->where('tanggal <=', $weekEndDate)
        ->count_all_results('xin_kegiatan');
    }
    return $weeklyCounts;
  }
  public function getMonthlyGenderCount()
  {
    // Get the current year
    $currentYear = date('Y');

    // Initialize an array to store the monthly gender counts
    $monthlyGenderCounts = [];

    // Loop through each month and get the gender counts
    for ($month = 1; $month <= 12; $month++) {
      // Calculate the start and end dates for the current month
      $startDate = date('Y-m-01', mktime(0, 0, 0, $month, 1, $currentYear));
      $endDate = date('Y-m-t', mktime(0, 0, 0, $month, 1, $currentYear));

      // Get the total number of men and women for the current month
      $this->db->select_sum('partisipan_laki', 'total_laki');
      $this->db->select_sum('partisipan_perempuan', 'total_perempuan');
      $this->db->where('tanggal >=', $startDate);
      $this->db->where('tanggal <=', $endDate);
      $query = $this->db->get('xin_kegiatan');

      // Store the gender counts for the current month
      $result = $query->row_array();
      $monthlyGenderCounts[$month] = [
        'total_laki' => $result['total_laki'] ?? 0,
        'total_perempuan' => $result['total_perempuan'] ?? 0
      ];
    }

    return $monthlyGenderCounts;
  }
}

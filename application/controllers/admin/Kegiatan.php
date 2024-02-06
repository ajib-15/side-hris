<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    //load the models
    $this->load->model('Login_model');
    $this->load->model('Designation_model');
    $this->load->model('Department_model');
    $this->load->model('Employees_model');
    $this->load->model('Xin_model');
    $this->load->model('Exin_model');
    $this->load->model('Expense_model');
    $this->load->model('Timesheet_model');
    $this->load->model('Kegiatan_model');
    $this->load->model('Travel_model');
    $this->load->model('Training_model');
    $this->load->model('Project_model');
    $this->load->model('Job_post_model');
    $this->load->model('Goal_tracking_model');
    $this->load->model('Events_model');
    $this->load->model('Meetings_model');
    $this->load->model('Announcement_model');
    $this->load->model('Clients_model');
    $this->load->model("Recruitment_model");
    $this->load->model('Tickets_model');
    $this->load->model('Assets_model');
    $this->load->model('Awards_model');
  }

  /*Function to set JSON output*/
  public function output($Return = array())
  {
    /*Set response header*/
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    /*Final JSON response*/
    exit(json_encode($Return));
  }

  public function index()
  {
    $session = $this->session->userdata('username');
    if (empty($session)) {
      redirect('admin/');
    }

    $system = $this->Xin_model->read_setting_info(1);
    if ($system[0]->module_projects_tasks == 'true') {
      // get user > added by
      $user = $this->Xin_model->read_user_info($session['user_id']);
      // get designation
      $designation = $this->Designation_model->read_designation_information($user[0]->designation_id);
      if (!is_null($designation)) {
        $des_emp = $designation[0]->designation_name;
      } else {
        $des_emp = '--';
      }
      // get designation
      $department = $this->Department_model->read_department_information($user[0]->department_id);
      if (!is_null($department)) {
        $dep_emp = $department[0]->department_name;
      } else {
        $dep_emp = '--';
      }
      $data = array(
        'title' => $this->lang->line('dashboard_title') . ' | ' . $this->Xin_model->site_title(),
        'path_url' => 'kegiatan',
        'breadcrumbs' => 'Kegiatan',
        'first_name' => $user[0]->first_name,
        'last_name' => $user[0]->last_name,
        'employee_id' => $user[0]->employee_id,
        'username' => $user[0]->username,
        'email' => $user[0]->email,
        'designation_name' => $des_emp,
        'department_name' => $dep_emp,
        'date_of_birth' => $user[0]->date_of_birth,
        'date_of_joining' => $user[0]->date_of_joining,
        'contact_no' => $user[0]->contact_no,
        'last_four_employees' => $this->Xin_model->last_four_employees(),
        'get_last_payment_history' => $this->Xin_model->get_last_payment_history(),
        'all_holidays' => $this->Timesheet_model->get_holidays_calendar(),
        'all_leaves_request_calendar' => $this->Timesheet_model->get_leaves_request_calendar(),
        'all_upcoming_birthday' => $this->Xin_model->employees_upcoming_birthday(),
        'all_travel_request' => $this->Travel_model->get_travel(),
        'all_training' => $this->Training_model->get_training(),
        'all_projects' => $this->Project_model->get_projects(),
        'all_tasks' => $this->Timesheet_model->get_tasks(),
        'all_goals' => $this->Goal_tracking_model->get_goal_tracking(),
        'all_events' => $this->Events_model->get_events(),
        'all_meetings' => $this->Meetings_model->get_meetings(),
        'all_jobsx' => $this->Job_post_model->five_latest_jobs(),
        'all_jobs' => $this->Recruitment_model->get_all_jobs_last_desc()
      );
      // Data Kegiatan
      $data['start_date'] = $this->input->post('filter_tanggal_awal');
      $data['end_date'] = $this->input->post('filter_tanggal_akhir');
      $data['kegiatan'] = $this->kegiatan($this->input->post('filter'), $data['start_date'], $data['end_date']);
      $data['partisipan'] = $data['kegiatan'] ? $this->total_partisipan($data['kegiatan']) : null;

      $data['subview'] = $this->load->view('admin/kegiatan/index', $data, TRUE);
      $this->load->view('admin/layout/layout_main', $data); //page load
    } else {
      // get user > added by
      $user = $this->Xin_model->read_user_info($session['user_id']);
      // get designation
      $designation = $this->Designation_model->read_designation_information($user[0]->designation_id);
      // get designation
      $department = $this->Department_model->read_department_information($user[0]->department_id);
      $data = array(
        'title' => $this->Xin_model->site_title(),
        'path_url' => 'kegiatan',
        'breadcrumbs' => 'Kegiatan',
        'first_name' => $user[0]->first_name,
        'last_name' => $user[0]->last_name,
        'employee_id' => $user[0]->employee_id,
        'username' => $user[0]->username,
        'email' => $user[0]->email,
        'designation_name' => $designation[0]->designation_name,
        'department_name' => $department[0]->department_name,
        'date_of_birth' => $user[0]->date_of_birth,
        'date_of_joining' => $user[0]->date_of_joining,
        'contact_no' => $user[0]->contact_no,
        'last_four_employees' => $this->Xin_model->last_four_employees(),
        'get_last_payment_history' => $this->Xin_model->get_last_payment_history(),
        'all_holidays' => $this->Timesheet_model->get_holidays_calendar(),
        'all_leaves_request_calendar' => $this->Timesheet_model->get_leaves_request_calendar(),
        'all_upcoming_birthday' => $this->Xin_model->employees_upcoming_birthday(),
        'all_travel_request' => $this->Travel_model->get_travel(),
        'all_training' => $this->Training_model->get_training(),
        'all_projects' => $this->Project_model->get_projects(),
        'all_tasks' => $this->Timesheet_model->get_tasks(),
        'all_goals' => $this->Goal_tracking_model->get_goal_tracking(),
        'all_events' => $this->Events_model->get_events(),
        'all_meetings' => $this->Meetings_model->get_meetings(),
        'all_jobsx' => $this->Job_post_model->all_jobs(),
        'all_jobs' => $this->Recruitment_model->get_all_jobs_last_desc()
      );
      // Data Kegiatan
      $data['start_date'] = $this->input->post('filter_tanggal_awal');
      $data['end_date'] = $this->input->post('filter_tanggal_akhir');
      $data['kegiatan'] = $this->kegiatan($this->input->post('filter'), $data['start_date'], $data['end_date']);
      $data['partisipan'] = $data['kegiatan'] ? $this->total_partisipan($data['kegiatan']) : null;

      $data['subview'] = $this->load->view('admin/kegiatan/index', $data, TRUE);
      $this->load->view('admin/layout/layout_main', $data); //page load
    }
  }

  public function total_partisipan($data)
  {
    $partisipan = array();
    $totalPartisipan = 0;
    $totalPartisipanPeserta = 0;
    $totalPartisipanPenampil = 0;
    $totalPartisipanFasilitator = 0;
    $totalPartisipanNarasumber = 0;
    $totalPartisipanPanitia = 0;
    $totalPartisipanLaki = 0;
    $totalPartisipanPerempuan = 0;
    $totalPartisipan0_6 = 0;
    $totalPartisipan7_12 = 0;
    $totalPartisipan13_17 = 0;
    $totalPartisipan18_30 = 0;
    $totalPartisipan31_40 = 0;
    $totalPartisipan41_60 = 0;
    $totalPartisipan60 = 0;
    foreach ($data as $item) {
      $totalPartisipan += (int) $item['partisipan_total_digit'];
      $totalPartisipanPeserta += (int) $item['partisipan_peserta'];
      $totalPartisipanPenampil += (int) $item['partisipan_penampil'];
      $totalPartisipanFasilitator += (int) $item['partisipan_fasilitator'];
      $totalPartisipanNarasumber += (int) $item['partisipan_narasumber'];
      $totalPartisipanPanitia += (int) $item['partisipan_panitia'];
      $totalPartisipanLaki += (int) $item['partisipan_laki'];
      $totalPartisipanLaki += (int) $item['partisipan_perempuan'];
      $totalPartisipan0_6 += (int) $item['partisipan_0_6'];
      $totalPartisipan7_12 += (int) $item['partisipan_7_12'];
      $totalPartisipan13_17 += (int) $item['partisipan_13_17'];
      $totalPartisipan18_30 += (int) $item['partisipan_18_30'];
      $totalPartisipan31_40 += (int) $item['partisipan_31_40'];
      $totalPartisipan41_60 += (int) $item['partisipan_41_60'];
      $totalPartisipan60 += (int) $item['partisipan_60'];

      $partisipan['total'] = $totalPartisipan;
      $partisipan['partisipan_peserta'] = $totalPartisipanPeserta;
      $partisipan['partisipan_penampil'] = $totalPartisipanPenampil;
      $partisipan['partisipan_fasilitator'] = $totalPartisipanFasilitator;
      $partisipan['partisipan_narasumber'] = $totalPartisipanNarasumber;
      $partisipan['partisipan_panitia'] = $totalPartisipanPanitia;
      $partisipan['partisipan_laki'] = $totalPartisipanLaki;
      $partisipan['partisipan_perempuan'] = $totalPartisipanPerempuan;
      $partisipan['partisipan_0_6'] = $totalPartisipan0_6;
      $partisipan['partisipan_7_12'] = $totalPartisipan7_12;
      $partisipan['partisipan_13_17'] = $totalPartisipan13_17;
      $partisipan['partisipan_18_30'] = $totalPartisipan18_30;
      $partisipan['partisipan_31_40'] = $totalPartisipan31_40;
      $partisipan['partisipan_41_60'] = $totalPartisipan41_60;
      $partisipan['partisipan_60'] = $totalPartisipan60;
    }

    return $partisipan;
  }

  public function kegiatan($filterstatus, $start_date, $end_date)
  {
    if ($filterstatus) {
      $kegiatan = $this->Kegiatan_model->get_data_by_date_range($start_date, $end_date);
    } else {
      $kegiatan = $this->Kegiatan_model->get_all_kegiatan();
    }
    foreach ($kegiatan as &$item) {
      // Tabel Declaration By Id Kegiatan
      // Mata Acara
      $mata_acara = $this->Kegiatan_model->get_mata_by_id_kegiatan($item['id']);

      // Luring
      $luring = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $luring += (int) $item_mata_acara['platform_rg'] + (int) $item_mata_acara['platform_hy'];
        }
      }
      $item['luring'] = $luring;
      // Daring
      $daring = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $daring += (int) $item_mata_acara['platform_dg'];
        }
      }
      $item['daring'] = $daring;

      // Strategi LIT
      $strategi_lit = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $strategi_lit += (int) $item_mata_acara['strategi_lit'];
        }
      }
      $item['strategi_lit'] = $strategi_lit;
      // Strategi DIS
      $strategi_dis = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $strategi_dis += (int) $item_mata_acara['strategi_dis'];
        }
      }
      $item['strategi_dis'] = $strategi_dis;
      // Strategi INE
      $strategi_ine = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $strategi_ine += (int) $item_mata_acara['strategi_ine'];
        }
      }
      $item['strategi_ine'] = $strategi_ine;

      // Kelompok CS
      $kelompok_cs = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $kelompok_cs += (int) $item_mata_acara['kelompok_cs'];
        }
      }
      $item['kelompok_cs'] = $kelompok_cs;
      // Kelompok CR
      $kelompok_cr = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $kelompok_cr += (int) $item_mata_acara['kelompok_cr'];
        }
      }
      $item['kelompok_cr'] = $kelompok_cr;
      // Kelompok CD
      $kelompok_cd = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $kelompok_cd += (int) $item_mata_acara['kelompok_cd'];
        }
      }
      $item['kelompok_cd'] = $kelompok_cd;
      // Kelompok CE
      $kelompok_ce = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $kelompok_ce += (int) $item_mata_acara['kelompok_ce'];
        }
      }
      $item['kelompok_ce'] = $kelompok_ce;

      // Fokus EDU
      $fokus_edu = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $fokus_edu += (int) $item_mata_acara['fokus_edu'];
        }
      }
      $item['fokus_edu'] = $fokus_edu;
      // Fokus ECO
      $fokus_eco = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $fokus_eco += (int) $item_mata_acara['fokus_eco'];
        }
      }
      $item['fokus_eco'] = $fokus_eco;
      // Fokus HQL
      $fokus_hql = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $fokus_hql += (int) $item_mata_acara['fokus_hql'];
        }
      }
      $item['fokus_hql'] = $fokus_hql;
      // Fokus IE
      $fokus_ie = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $fokus_ie += (int) $item_mata_acara['fokus_ie'];
        }
      }
      $item['fokus_ie'] = $fokus_ie;

      // Platform RG
      $platform_rg = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $platform_rg += (int) $item_mata_acara['platform_rg'];
        }
      }
      $item['platform_rg'] = $platform_rg;
      // Platform DG
      $platform_dg = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $platform_dg += (int) $item_mata_acara['platform_dg'];
        }
      }
      $item['platform_dg'] = $platform_dg;
      // Platform HY
      $platform_hy = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $platform_hy += (int) $item_mata_acara['platform_hy'];
        }
      }
      $item['platform_hy'] = $platform_hy;

      // Literasi BT
      $literasi_bt = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_bt += (int) $item_mata_acara['literasi_bt'];
        }
      }
      $item['literasi_bt'] = $literasi_bt;
      // Literasi NU
      $literasi_nu = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_nu += (int) $item_mata_acara['literasi_nu'];
        }
      }
      $item['literasi_nu'] = $literasi_nu;
      // Literasi SA
      $literasi_sa = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_sa += (int) $item_mata_acara['literasi_sa'];
        }
      }
      $item['literasi_sa'] = $literasi_sa;
      // Literasi DI
      $literasi_di = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_di += (int) $item_mata_acara['literasi_di'];
        }
      }
      $item['literasi_di'] = $literasi_di;
      // Literasi FI
      $literasi_fi = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_fi += (int) $item_mata_acara['literasi_fi'];
        }
      }
      $item['literasi_fi'] = $literasi_fi;
      // Literasi BK
      $literasi_bk = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $literasi_bk += (int) $item_mata_acara['literasi_bk'];
        }
      }
      $item['literasi_bk'] = $literasi_bk;

      // Inklusivitas DS
      $inklusivitas_ds = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $inklusivitas_ds += (int) $item_mata_acara['inklusivitas_ds'];
        }
      }
      $item['inklusivitas_ds'] = $inklusivitas_ds;
      // Inklusivitas MR
      $inklusivitas_mr = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $inklusivitas_mr += (int) $item_mata_acara['inklusivitas_mr'];
        }
      }
      $item['inklusivitas_mr'] = $inklusivitas_mr;
      // Inklusivitas GD
      $inklusivitas_gd = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $inklusivitas_gd += (int) $item_mata_acara['inklusivitas_gd'];
        }
      }
      $item['inklusivitas_gd'] = $inklusivitas_gd;
      // Inklusivitas 3T
      $inklusivitas_3t = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $inklusivitas_3t += (int) $item_mata_acara['inklusivitas_3t'];
        }
      }
      $item['inklusivitas_3t'] = $inklusivitas_3t;

      // SDG 1
      $sdg_1 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_1 += (int) $item_mata_acara['sdg_1'];
        }
      }
      $item['sdg_1'] = $sdg_1;
      // SDG 2
      $sdg_2 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_2 += (int) $item_mata_acara['sdg_2'];
        }
      }
      $item['sdg_2'] = $sdg_2;
      // SDG 3
      $sdg_3 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_3 += (int) $item_mata_acara['sdg_3'];
        }
      }
      $item['sdg_3'] = $sdg_3;
      // SDG 4
      $sdg_4 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_4 += (int) $item_mata_acara['sdg_4'];
        }
      }
      $item['sdg_4'] = $sdg_4;
      // SDG 5
      $sdg_5 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_5 += (int) $item_mata_acara['sdg_5'];
        }
      }
      $item['sdg_5'] = $sdg_5;
      // SDG 6
      $sdg_6 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_6 += (int) $item_mata_acara['sdg_6'];
        }
      }
      $item['sdg_6'] = $sdg_6;
      // SDG 7
      $sdg_7 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_7 += (int) $item_mata_acara['sdg_7'];
        }
      }
      $item['sdg_7'] = $sdg_7;
      // SDG 8
      $sdg_8 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_8 += (int) $item_mata_acara['sdg_8'];
        }
      }
      $item['sdg_8'] = $sdg_8;
      // SDG 9
      $sdg_9 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_9 += (int) $item_mata_acara['sdg_9'];
        }
      }
      $item['sdg_9'] = $sdg_9;
      // SDG 10
      $sdg_10 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_10 += (int) $item_mata_acara['sdg_10'];
        }
      }
      $item['sdg_10'] = $sdg_10;
      // SDG 11
      $sdg_11 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_11 += (int) $item_mata_acara['sdg_11'];
        }
      }
      $item['sdg_11'] = $sdg_11;
      // SDG 12
      $sdg_12 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_12 += (int) $item_mata_acara['sdg_12'];
        }
      }
      $item['sdg_12'] = $sdg_12;
      // SDG 13
      $sdg_13 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_13 += (int) $item_mata_acara['sdg_13'];
        }
      }
      $item['sdg_13'] = $sdg_13;
      // SDG 14
      $sdg_14 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_14 += (int) $item_mata_acara['sdg_14'];
        }
      }
      $item['sdg_14'] = $sdg_14;
      // SDG 15
      $sdg_15 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_15 += (int) $item_mata_acara['sdg_15'];
        }
      }
      $item['sdg_15'] = $sdg_15;
      // SDG 16
      $sdg_16 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_16 += (int) $item_mata_acara['sdg_16'];
        }
      }
      $item['sdg_16'] = $sdg_16;
      // SDG 17
      $sdg_17 = 0;
      if (count($mata_acara) > 0) {
        foreach ($mata_acara as $item_mata_acara) {
          $sdg_17 += (int) $item_mata_acara['sdg_17'];
        }
      }
      $item['sdg_17'] = $sdg_17;
    }

    return $kegiatan;
  }

  public function add_kegiatan()
  {
    $session = $this->session->userdata('username');
    $data = array(
      'kode' => $this->input->post('kode'),
      'tanggal' => $this->input->post('tanggal'),
      'nama' => $this->input->post('nama'),
      'created_by' => (int)$session['user_id'],
      'tema' => $this->input->post('tema'),
      'lokasi_kegiatan' => $this->input->post('lokasi_kegiatan'),
      'lokasi_digital' => $this->input->post('lokasi_digital'),
      'penanggung_jawab' => $this->input->post('penanggung_jawab'),
      'pendamping' => $this->input->post('pendamping'),
    );
    $result = $this->Kegiatan_model->add_kegiatan($data);

    return redirect(base_url() . 'admin/kegiatan/detail/' . $result);
  }

  public function delete()
  {
    $selectedCheckboxes = $this->input->post('selectedCheckboxes');
    $deleted_ids = explode(',', $selectedCheckboxes);
    foreach ($deleted_ids as $item) {
      $this->Kegiatan_model->delete($item);
    }
    return redirect(base_url() . 'admin/kegiatan');
  }

  public function print()
  {
    $selectedCheckboxes = $this->input->post('selectedCheckboxes');
    $choosed_id = explode(',', $selectedCheckboxes);

    $data['kegiatan'] = $this->Kegiatan_model->get_kegiatan_by_id($choosed_id);
    $data['partisipan'] = $data['kegiatan'] ? $this->total_partisipan($data['kegiatan']) : null;
    $this->load->view('admin/kegiatan/excel-report', $data);
  }

  public function detail($id)
  {
    $session = $this->session->userdata('username');
    if (empty($session)) {
      redirect('admin/');
    }

    $check = $this->Kegiatan_model->get_kegiatan_by_id($id);
    if (count($check) < 1) {
      redirect('admin/kegiatan');
    }

    $system = $this->Xin_model->read_setting_info(1);
    if ($system[0]->module_projects_tasks == 'true') {
      // get user > added by
      $user = $this->Xin_model->read_user_info($session['user_id']);
      // get designation
      $designation = $this->Designation_model->read_designation_information($user[0]->designation_id);
      if (!is_null($designation)) {
        $des_emp = $designation[0]->designation_name;
      } else {
        $des_emp = '--';
      }
      // get designation
      $department = $this->Department_model->read_department_information($user[0]->department_id);
      if (!is_null($department)) {
        $dep_emp = $department[0]->department_name;
      } else {
        $dep_emp = '--';
      }
      $data = array(
        'title' => $this->lang->line('dashboard_title') . ' | ' . $this->Xin_model->site_title(),
        'path_url' => 'kegiatan',
        'breadcrumbs' => 'Laporan Kegiatan',
        'first_name' => $user[0]->first_name,
        'last_name' => $user[0]->last_name,
        'employee_id' => $user[0]->employee_id,
        'username' => $user[0]->username,
        'email' => $user[0]->email,
        'designation_name' => $des_emp,
        'department_name' => $dep_emp,
        'date_of_birth' => $user[0]->date_of_birth,
        'date_of_joining' => $user[0]->date_of_joining,
        'contact_no' => $user[0]->contact_no,
        'last_four_employees' => $this->Xin_model->last_four_employees(),
        'get_last_payment_history' => $this->Xin_model->get_last_payment_history(),
        'all_holidays' => $this->Timesheet_model->get_holidays_calendar(),
        'all_leaves_request_calendar' => $this->Timesheet_model->get_leaves_request_calendar(),
        'all_upcoming_birthday' => $this->Xin_model->employees_upcoming_birthday(),
        'all_travel_request' => $this->Travel_model->get_travel(),
        'all_training' => $this->Training_model->get_training(),
        'all_projects' => $this->Project_model->get_projects(),
        'all_tasks' => $this->Timesheet_model->get_tasks(),
        'all_goals' => $this->Goal_tracking_model->get_goal_tracking(),
        'all_events' => $this->Events_model->get_events(),
        'all_meetings' => $this->Meetings_model->get_meetings(),
        'all_jobsx' => $this->Job_post_model->five_latest_jobs(),
        'all_jobs' => $this->Recruitment_model->get_all_jobs_last_desc()
      );

      // Data Kegiatan
      $data['choosed_kegiatan'] = $check;
      $data['kegiatan'] = $this->instrumen_kegiatan($id);

      $data['subview'] = $this->load->view('admin/kegiatan/detail/index', $data, TRUE);
      $this->load->view('admin/layout/layout_main', $data); //page load
    } else {
      // get user > added by
      $user = $this->Xin_model->read_user_info($session['user_id']);
      // get designation
      $designation = $this->Designation_model->read_designation_information($user[0]->designation_id);
      // get designation
      $department = $this->Department_model->read_department_information($user[0]->department_id);
      $data = array(
        'title' => $this->Xin_model->site_title(),
        'path_url' => 'kegiatan',
        'breadcrumbs' => 'Laporan Kegiatan',
        'first_name' => $user[0]->first_name,
        'last_name' => $user[0]->last_name,
        'employee_id' => $user[0]->employee_id,
        'username' => $user[0]->username,
        'email' => $user[0]->email,
        'designation_name' => $designation[0]->designation_name,
        'department_name' => $department[0]->department_name,
        'date_of_birth' => $user[0]->date_of_birth,
        'date_of_joining' => $user[0]->date_of_joining,
        'contact_no' => $user[0]->contact_no,
        'last_four_employees' => $this->Xin_model->last_four_employees(),
        'get_last_payment_history' => $this->Xin_model->get_last_payment_history(),
        'all_holidays' => $this->Timesheet_model->get_holidays_calendar(),
        'all_leaves_request_calendar' => $this->Timesheet_model->get_leaves_request_calendar(),
        'all_upcoming_birthday' => $this->Xin_model->employees_upcoming_birthday(),
        'all_travel_request' => $this->Travel_model->get_travel(),
        'all_training' => $this->Training_model->get_training(),
        'all_projects' => $this->Project_model->get_projects(),
        'all_tasks' => $this->Timesheet_model->get_tasks(),
        'all_goals' => $this->Goal_tracking_model->get_goal_tracking(),
        'all_events' => $this->Events_model->get_events(),
        'all_meetings' => $this->Meetings_model->get_meetings(),
        'all_jobsx' => $this->Job_post_model->all_jobs(),
        'all_jobs' => $this->Recruitment_model->get_all_jobs_last_desc()
      );
      // Data Kegiatan
      $data['choosed_kegiatan'] = $check;
      $data['kegiatan'] = $this->instrumen_kegiatan($id);


      $data['subview'] = $this->load->view('admin/kegiatan/detail/index', $data, TRUE);
      $this->load->view('admin/layout/layout_main', $data); //page load
    }
  }

  public function instrumen_kegiatan($id)
  {
    // Main Data
    $data = $this->Kegiatan_model->get_kegiatan_by_id($id)[0];

    // Get Mata Acara Kegiatan By Id Kegiatan
    $data['mata_acara'] = $this->Kegiatan_model->get_mata_by_id_kegiatan($id);

    // Get Tujuan Kegiatan
    $data["tujuan"] = $this->Kegiatan_model->get_tujuan_by_id_kegiatan($id);

    // Get Dokumen
    $data["dokumen"] = $this->Kegiatan_model->get_dokumen_by_id_kegiatan($id);

    // Get Kendala Kegiatan
    $data["kendala"] = $this->Kegiatan_model->get_kendala_by_id_kegiatan($id);

    // Get Solusi Kegiatan
    $data["solusi"] = $this->Kegiatan_model->get_solusi_by_id_kegiatan($id);

    // Get Pernaikan Kegiatan
    $data["perbaikan"] = $this->Kegiatan_model->get_perbaikan_by_id_kegiatan($id);

    // Get Kolaborator Kegiatan
    $data["kolaborator"] = $this->Kegiatan_model->get_kolaborator_by_id_kegiatan($id);
    return $data;
  }

  public function add_catatan($id)
  {
    $data = array(
      "catatan" => $this->input->post('catatan_kegiatan')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function detail_delete($id)
  {
    $this->Kegiatan_model->delete($id);

    return redirect(base_url() . 'admin/kegiatan');
  }

  public function update_nama_kegiatan($id)
  {
    $data = array(
      "nama" => $this->input->post('nama_kegiatan')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function add_mata_acara($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "nama_mata_acara" => $this->input->post('nama_mata_acara')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_mata");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_mata_acara($id_kegiatan, $id_mata)
  {
    $formData = $this->input->post();
    $data = array(
      "nama_mata_acara" => $formData['nama_mata_acara'],
      "strategi_lit" => array_key_exists('strategi_lit', $formData) ? ($formData['strategi_lit'] ? 1 : 0) : 0,
      "strategi_dis" => array_key_exists('strategi_dis', $formData) ? ($formData['strategi_dis'] ? 1 : 0) : 0,
      "strategi_ine" => array_key_exists('strategi_ine', $formData) ? ($formData['strategi_ine'] ? 1 : 0) : 0,

      "kelompok_cs" => array_key_exists('kelompok_cs', $formData) ? ($formData['kelompok_cs'] ? 1 : 0) : 0,
      "kelompok_cr" => array_key_exists('kelompok_cr', $formData) ? ($formData['kelompok_cr'] ? 1 : 0) : 0,
      "kelompok_cd" => array_key_exists('kelompok_cd', $formData) ? ($formData['kelompok_cd'] ? 1 : 0) : 0,
      "kelompok_ce" => array_key_exists('kelompok_ce', $formData) ? ($formData['kelompok_ce'] ? 1 : 0) : 0,

      "fokus_edu" => array_key_exists('fokus_edu', $formData) ? ($formData['fokus_edu'] ? 1 : 0) : 0,
      "fokus_eco" => array_key_exists('fokus_eco', $formData) ? ($formData['fokus_eco'] ? 1 : 0) : 0,
      "fokus_hql" => array_key_exists('fokus_hql', $formData) ? ($formData['fokus_hql'] ? 1 : 0) : 0,
      "fokus_ie" => array_key_exists('fokus_ie', $formData) ? ($formData['fokus_ie'] ? 1 : 0) : 0,

      "platform_rg" => array_key_exists('platform_rg', $formData) ? ($formData['platform_rg'] ? 1 : 0) : 0,
      "platform_dg" => array_key_exists('platform_dg', $formData) ? ($formData['platform_dg'] ? 1 : 0) : 0,
      "platform_hy" => array_key_exists('platform_hy', $formData) ? ($formData['platform_hy'] ? 1 : 0) : 0,

      "literasi_bt" => array_key_exists('literasi_bt', $formData) ? ($formData['literasi_bt'] ? 1 : 0) : 0,
      "literasi_nu" => array_key_exists('literasi_nu', $formData) ? ($formData['literasi_nu'] ? 1 : 0) : 0,
      "literasi_sa" => array_key_exists('literasi_sa', $formData) ? ($formData['literasi_sa'] ? 1 : 0) : 0,
      "literasi_di" => array_key_exists('literasi_di', $formData) ? ($formData['literasi_di'] ? 1 : 0) : 0,
      "literasi_fi" => array_key_exists('literasi_fi', $formData) ? ($formData['literasi_fi'] ? 1 : 0) : 0,
      "literasi_bk" => array_key_exists('literasi_bk', $formData) ? ($formData['literasi_bk'] ? 1 : 0) : 0,

      "inklusivitas_ds" => array_key_exists('inklusivitas_ds', $formData) ? ($formData['inklusivitas_ds'] ? 1 : 0) : 0,
      "inklusivitas_mr" => array_key_exists('inklusivitas_mr', $formData) ? ($formData['inklusivitas_mr'] ? 1 : 0) : 0,
      "inklusivitas_gd" => array_key_exists('inklusivitas_gd', $formData) ? ($formData['inklusivitas_gd'] ? 1 : 0) : 0,
      "inklusivitas_3t" => array_key_exists('inklusivitas_3t', $formData) ? ($formData['inklusivitas_3t'] ? 1 : 0) : 0,

      "sdg_1" => array_key_exists('sdg_1', $formData) ? ($formData['sdg_1'] ? 1 : 0) : 0,
      "sdg_2" => array_key_exists('sdg_2', $formData) ? ($formData['sdg_2'] ? 1 : 0) : 0,
      "sdg_3" => array_key_exists('sdg_3', $formData) ? ($formData['sdg_3'] ? 1 : 0) : 0,
      "sdg_4" => array_key_exists('sdg_4', $formData) ? ($formData['sdg_4'] ? 1 : 0) : 0,
      "sdg_5" => array_key_exists('sdg_5', $formData) ? ($formData['sdg_5'] ? 1 : 0) : 0,
      "sdg_6" => array_key_exists('sdg_6', $formData) ? ($formData['sdg_6'] ? 1 : 0) : 0,
      "sdg_7" => array_key_exists('sdg_7', $formData) ? ($formData['sdg_7'] ? 1 : 0) : 0,
      "sdg_8" => array_key_exists('sdg_8', $formData) ? ($formData['sdg_8'] ? 1 : 0) : 0,
      "sdg_9" => array_key_exists('sdg_9', $formData) ? ($formData['sdg_9'] ? 1 : 0) : 0,
      "sdg_10" => array_key_exists('sdg_10', $formData) ? ($formData['sdg_10'] ? 1 : 0) : 0,
      "sdg_11" => array_key_exists('sdg_11', $formData) ? ($formData['sdg_11'] ? 1 : 0) : 0,
      "sdg_12" => array_key_exists('sdg_12', $formData) ? ($formData['sdg_12'] ? 1 : 0) : 0,
      "sdg_13" => array_key_exists('sdg_13', $formData) ? ($formData['sdg_13'] ? 1 : 0) : 0,
      "sdg_14" => array_key_exists('sdg_14', $formData) ? ($formData['sdg_14'] ? 1 : 0) : 0,
      "sdg_15" => array_key_exists('sdg_15', $formData) ? ($formData['sdg_15'] ? 1 : 0) : 0,
      "sdg_16" => array_key_exists('sdg_16', $formData) ? ($formData['sdg_16'] ? 1 : 0) : 0,
      "sdg_17" => array_key_exists('sdg_17', $formData) ? ($formData['sdg_17'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_mata, $data, "xin_kegiatan_mata");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function add_tujuan($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "keterangan" => $this->input->post('keterangan_tujuan')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_tujuan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_mata_acara($id_kegiatan, $id_mata)
  {
    $this->Kegiatan_model->delete_instrumen($id_mata, "xin_kegiatan_mata");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function delete_tujuan($id_kegiatan, $id_tujuan)
  {
    $this->Kegiatan_model->delete_instrumen($id_tujuan, "xin_kegiatan_tujuan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function add_dokumen($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "keterangan" => $this->input->post('nama_dokumen'),
      "flag" => 0,
      "link_file" => $this->input->post('link_file')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_dokumen");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_dokumen($id_kegiatan, $id_dokumen)
  {
    $this->Kegiatan_model->delete_instrumen($id_dokumen, "xin_kegiatan_dokumen");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_flag_dokumen($id_kegiatan, $id_dokumen)
  {
    $formData = $this->input->post();
    $data = array(
      "flag" => array_key_exists('flag', $formData) ? ($formData['flag'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_dokumen, $data, "xin_kegiatan_dokumen");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_tema($id)
  {
    $data = array(
      "tema" => $this->input->post('tema_kegiatan')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_pj($id)
  {
    $data = array(
      "penanggung_jawab" => $this->input->post('penanggung_jawab')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_pendamping($id)
  {
    $data = array(
      "pendamping" => $this->input->post('pendamping')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_lain_lain($id)
  {
    $data = array(
      "lain_lain" => $this->input->post('lain_lain')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_momentum($id)
  {
    $data = array(
      "momentum_tgl" => $this->input->post('momentum_tgl'),
      "momentum_bln" => $this->input->post('momentum_bln'),
      "momentum_jenis" => $this->input->post('momentum_jenis')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_ht($id)
  {
    $data = array(
      "ht_huruf_hari" => $this->input->post('ht_huruf_hari'),
      "ht_digit_tanggal" => $this->input->post('ht_digit_tanggal'),
      "ht_digit_bulan" => $this->input->post('ht_digit_bulan'),
      "ht_digit_tahun" => $this->input->post('ht_digit_tahun'),
      "ht_digit_jam" => $this->input->post('ht_digit_jam'),
      "ht_digit_menit" => $this->input->post('ht_digit_menit')
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_inisiasi_rba($id)
  {
    $formData = $this->input->post();
    $data = array(
      "inisiasi_rba" => array_key_exists('inisiasi_rba', $formData) ? ($formData['inisiasi_rba'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id, $data, "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_inisiasi_kolaborator($id)
  {
    $formData = $this->input->post();
    $data = array(
      "inisiasi_kolaborator" => array_key_exists('inisiasi_kolaborator', $formData) ? ($formData['inisiasi_kolaborator'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id, $data, "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_inisiasi_mitra($id)
  {
    $formData = $this->input->post();
    $data = array(
      "inisiasi_mitra" => array_key_exists('inisiasi_mitra', $formData) ? ($formData['inisiasi_mitra'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id, $data, "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_catatan($id)
  {
    $data = array(
      "catatan_publikasi" => $this->input->post('catatan_publikasi'),
      "catatan_persiapan" => $this->input->post('catatan_persiapan'),
      "catatan_pelaksanaan" => $this->input->post('catatan_pelaksanaan'),
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function update_lokasi($id)
  {
    $formData = $this->input->post();
    $data = array(
      "lokasi_kegiatan" => $this->input->post('lokasi_kegiatan'),
      "lokasi_digital" => $this->input->post('lokasi_digital'),
      "lokasi_jarak" => $this->input->post('lokasi_jarak'),
      "lokasi_ih" => array_key_exists('lokasi_ih', $formData) ? ($formData['lokasi_ih'] ? 1 : 0) : 0,
      "lokasi_or" => array_key_exists('lokasi_or', $formData) ? ($formData['lokasi_or'] ? 1 : 0) : 0,
    );
    $this->Kegiatan_model->update_instrumen($id, $data, 'xin_kegiatan');

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function add_kendala($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "keterangan" => $this->input->post('kendala_kegiatan')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_kendala");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_kendala($id_kegiatan, $id_kendala)
  {
    $this->Kegiatan_model->delete_instrumen($id_kendala, "xin_kegiatan_kendala");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function add_solusi($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "keterangan" => $this->input->post('solusi_kegiatan')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_solusi");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_solusi($id_kegiatan, $id_kendala)
  {
    $this->Kegiatan_model->delete_instrumen($id_kendala, "xin_kegiatan_solusi");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function add_perbaikan($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "keterangan" => $this->input->post('perbaikan_kegiatan')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_perbaikan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_perbaikan($id_kegiatan, $id_kendala)
  {
    $this->Kegiatan_model->delete_instrumen($id_kendala, "xin_kegiatan_perbaikan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function add_kolaborator($id)
  {
    $data = array(
      "id_kegiatan" => (int)$id,
      "nama_kolaborator" => $this->input->post('nama_kolaborator')
    );
    $this->Kegiatan_model->add_instrumen($data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id);
  }

  public function delete_kolaborator($id_kegiatan, $id_kendala)
  {
    $this->Kegiatan_model->delete_instrumen($id_kendala, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_sektor_pertama($id_kegiatan, $id_kolaborator)
  {
    $formData = $this->input->post();
    $data = array(
      "sektor_pertama" => array_key_exists('sektor_pertama', $formData) ? ($formData['sektor_pertama'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_kolaborator, $data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_sektor_dua($id_kegiatan, $id_kolaborator)
  {
    $formData = $this->input->post();
    $data = array(
      "sektor_dua" => array_key_exists('sektor_dua', $formData) ? ($formData['sektor_dua'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_kolaborator, $data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_sektor_tiga($id_kegiatan, $id_kolaborator)
  {
    $formData = $this->input->post();
    $data = array(
      "sektor_tiga" => array_key_exists('sektor_tiga', $formData) ? ($formData['sektor_tiga'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_kolaborator, $data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_mitra_baru($id_kegiatan, $id_kolaborator)
  {
    $formData = $this->input->post();
    $data = array(
      "mitra_baru" => array_key_exists('mitra_baru', $formData) ? ($formData['mitra_baru'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_kolaborator, $data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_sudah_kerja_sama($id_kegiatan, $id_kolaborator)
  {
    $formData = $this->input->post();
    $data = array(
      "sudah_kerja_sama" => array_key_exists('sudah_kerja_sama', $formData) ? ($formData['sudah_kerja_sama'] ? 1 : 0) : 0,
    );

    $this->Kegiatan_model->update_instrumen($id_kolaborator, $data, "xin_kegiatan_kolaborator");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_partisipan($id_kegiatan)
  {
    $this->Kegiatan_model->update_instrumen($id_kegiatan, $this->input->post(), "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  public function update_validitas($id_kegiatan)
  {
    $data = array(
      "validitas" => $this->input->post('status_validitas')
    );
    $this->Kegiatan_model->update_instrumen($id_kegiatan, $data, "xin_kegiatan");

    return redirect(base_url() . 'admin/kegiatan/detail/' . $id_kegiatan);
  }

  // working status > employee > chart
  public function employee_working_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('absent' => '', 'working' => '', 'absent_label' => '', 'working_label' => '');

    $current_month = date('Y-m-d');

    $query = $this->Xin_model->all_employees_status();
    $total = $query->num_rows();

    $working = $this->Xin_model->current_month_day_attendance($current_month);

    // get actual data
    $employee_w = $working / $total * 100;
    // absent
    $abs = $total - $working;
    //$employee_ab = $abs / $total * 100;
    $Return['absent'] = $abs;
    $Return['absent_label'] = $this->lang->line('xin_absent');
    // working
    $Return['working_label'] = $this->lang->line('xin_emp_working');
    $Return['working'] = $working;
    $this->output($Return);
    exit;
  }
  // leave status > employee > chart
  public function employee_leave_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('accepted' => '', 'accepted_count' => '', 'pending' => '', 'pending_count' => '', 'rejected' => '', 'rejected_count' => '');

    //accepted
    $Return['accepted'] = $this->lang->line('xin_approved');
    $Return['accepted_count'] = accepted_leave_request();
    // pending
    $Return['pending'] = $this->lang->line('xin_pending');
    $Return['pending_count'] = pending_leave_request();
    // rejected
    $Return['rejected'] = $this->lang->line('xin_rejected');
    $Return['rejected_count'] = rejected_leave_request();
    $this->output($Return);
    exit;
  }

  // get department > employee > chart
  public function employee_department()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b');
    $someArray = array();
    $j = 0;
    foreach ($this->Department_model->all_departments() as $department) {

      $condition = "department_id =" . "'" . $department->department_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      //$this->db->group_by('location_id');
      $query = $this->db->get();
      $checke  = $query->result();
      // check if department available
      if ($query->num_rows() > 0) {
        $row = $query->num_rows();
        $d_rows[] = $row;
        $c_name[] = htmlspecialchars_decode($department->department_name);

        $someArray[] = array(
          'label'   => htmlspecialchars_decode($department->department_name),
          'value' => $row,
          'bgcolor' => $c_color[$j]
        );
        $j++;
      }
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get designation > employee > chart
  public function employee_designation()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b');
    $someArray = array();
    $j = 0;
    foreach ($this->Designation_model->all_designations() as $designation) {

      $condition = "designation_id =" . "'" . $designation->designation_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      //$this->db->group_by('location_id');
      $query = $this->db->get();
      $checke  = $query->result();
      // check if department available
      if ($query->num_rows() > 0) {
        $row = $query->num_rows();
        $d_rows[] = $row;
        $c_name[] = htmlspecialchars_decode($designation->designation_name);
        $someArray[] = array(
          'label'   => htmlspecialchars_decode($designation->designation_name),
          'value' => $row,
          'bgcolor' => $c_color[$j]
        );
        $j++;
      }
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $row;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get location > employee > chart
  public function employee_location()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b');
    $someArray = array();
    $j = 0;
    foreach ($this->Xin_model->all_locations() as $location) {

      $condition = "location_id =" . "'" . $location->location_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      $query = $this->db->get();
      $checke  = $query->result();
      // check if department available
      if ($query->num_rows() > 0) {
        $row = $query->num_rows();
        $d_rows[] = $row;
        $c_name[] = htmlspecialchars_decode($location->location_name);

        $someArray[] = array(
          'label'   => htmlspecialchars_decode($location->location_name),
          'value' => $row,
          'bgcolor' => $c_color[$j]
        );
        $j++;
      }
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get company > employee > chart
  public function employee_company()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#975df3', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b');
    $someArray = array();
    $j = 0;
    foreach ($this->Xin_model->all_companies_dash() as $ecompany) {

      $condition = "company_id =" . "'" . $ecompany->company_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      $query = $this->db->get();
      $checke  = $query->result();
      // check if department available
      if ($query->num_rows() > 0) {
        $row = $query->num_rows();
        $d_rows[] = $row;
        $c_name[] = htmlspecialchars_decode($ecompany->name);

        $someArray[] = array(
          'label'   => htmlspecialchars_decode($ecompany->name),
          'value' => $row,
          'bgcolor' => $c_color[$j]
        );
        $j++;
      }
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get hrsale roles > chart
  public function hrsale_roles()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#66456e', '#b26fc2', '#a98852', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e');
    $someArray = array();
    $j = 0;
    foreach (hrsale_roles() as $hr_roles) {

      $condition = "user_role_id =" . "'" . $hr_roles->role_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      $query = $this->db->get();
      $row = $query->num_rows();
      $d_rows[] = $row;
      $c_name[] = htmlspecialchars_decode($hr_roles->role_name);

      $someArray[] = array(
        'label'   => htmlspecialchars_decode($hr_roles->role_name),
        'value' => $row,
        'bgcolor' => $c_color[$j]
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get hrsale roles > chart
  public function hrsale_office_shifts()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#647c8a', '#2196f3', '#02bc77', '#d3733b', '#673AB7', '#66456e', '#b26fc2', '#a98852', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e', '#c674ad', '#975df3', '#61a3ca', '#6bddbd', '#6bdd74', '#95b655', '#668b20', '#bea034', '#d3733b', '#46be8a', '#f96868', '#00c0ef', '#3c8dbc', '#f39c12', '#605ca8', '#d81b60', '#001f3f', '#39cccc', '#3c8dbc', '#006400', '#dd4b39', '#a98852', '#b26fc2', '#66456e');
    $someArray = array();
    $j = 0;
    foreach (hrsale_office_shift() as $hr_office_shift) {

      $condition = "office_shift_id =" . "'" . $hr_office_shift->office_shift_id . "'";
      $this->db->select('*');
      $this->db->from('xin_employees');
      $this->db->where($condition);
      $query = $this->db->get();
      $row = $query->num_rows();
      $d_rows[] = $row;
      $c_name[] = htmlspecialchars_decode($hr_office_shift->shift_name);

      $someArray[] = array(
        'label'   => htmlspecialchars_decode($hr_office_shift->shift_name),
        'value' => $row,
        'bgcolor' => $c_color[$j]
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get project status
  public function projects_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#647c8a', '#2196f3', '#02bc77', '#d3733b', '#673AB7');
    $someArray = array();
    $j = 0;
    $projects = get_projects_status();
    foreach ($projects->result() as $eproject) {
      //$d_rows = array();	
      $row = total_projects_status($eproject->status);
      $d_rows[] = $row;
      if ($eproject->status == 0) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_not_started'));
      } else if ($eproject->status == 1) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_in_progress'));
      } else if ($eproject->status == 2) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_completed'));
      } else if ($eproject->status == 3) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_cancelled'));
      } else if ($eproject->status == 4) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_hold'));
      }
      $c_name[] = $csname;
      $someArray[] = array(
        'label'   => $csname,
        'value' => $row,
        'bgcolor' => $c_color[$j]
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get user project status
  public function user_projects_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    //$c_color = array('#647c8a','#2196f3','#02bc77','#d3733b','#673AB7');
    $someArray = array();
    $j = 0;
    $session = $this->session->userdata('username');
    $projects = get_user_projects_status($session['user_id']);
    foreach ($projects->result() as $eproject) {
      //$d_rows = array();	

      //	$d_rows [] = $row;
      if ($eproject->status == 0) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_not_started'));
        $row = total_user_projects_status($eproject->status, $session['user_id']);
        $bdcolor = '#647c8a';
      } else if ($eproject->status == 1) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_in_progress'));
        $row = total_user_projects_status($eproject->status, $session['user_id']);
        $bdcolor = '#2196f3';
      } else if ($eproject->status == 2) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_completed'));
        $row = total_user_projects_status($eproject->status, $session['user_id']);
        $bdcolor = '#02bc77';
      } else if ($eproject->status == 3) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_cancelled'));
        $row = total_user_projects_status($eproject->status, $session['user_id']);
        $bdcolor = '#d3733b';
      } else if ($eproject->status == 4) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_hold'));
        $row = total_user_projects_status($eproject->status, $session['user_id']);
        $bdcolor = '#673AB7';
      }
      $c_name[] = $csname;
      $d_rows[] = $row;
      $someArray[] = array(
        'label'   => $csname,
        'value' => $row,
        'bgcolor' => $bdcolor
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get task status
  public function user_tasks_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    //$c_color = array('#647c8a','#2196f3','#02bc77','#d3733b','#673AB7');
    $someArray = array();
    $j = 0;
    $session = $this->session->userdata('username');
    $tasks = get_user_tasks_status($session['user_id']);
    foreach ($tasks->result() as $etask) {
      //$d_rows = array();	
      //$row = total_user_tasks_status($etask->task_status,$session['user_id']);
      if ($etask->task_status == 0) {
        $sname = htmlspecialchars_decode($this->lang->line('xin_not_started'));
        $trow = total_user_tasks_status($etask->task_status, $session['user_id']);
        $tbdcolor = '#647c8a';
      } else if ($etask->task_status == 1) {
        $sname = htmlspecialchars_decode($this->lang->line('xin_in_progress'));
        $trow = total_user_tasks_status($etask->task_status, $session['user_id']);
        $tbdcolor = '#2196f3';
      } else if ($etask->task_status == 2) {
        $sname = htmlspecialchars_decode($this->lang->line('xin_completed'));
        $trow = total_user_tasks_status($etask->task_status, $session['user_id']);
        $tbdcolor = '#02bc77';
      } else if ($etask->task_status == 3) {
        $sname = htmlspecialchars_decode($this->lang->line('xin_project_cancelled'));
        $trow = total_user_tasks_status($etask->task_status, $session['user_id']);
        $tbdcolor = '#d3733b';
      } else if ($etask->task_status == 4) {
        $sname = htmlspecialchars_decode($this->lang->line('xin_project_hold'));
        $trow = total_user_tasks_status($etask->task_status, $session['user_id']);
        $tbdcolor = '#673AB7';
      }
      $c_name[] = $sname;
      $d_rows[] = $trow;
      $someArray[] = array(
        'label'   => $sname,
        'value' => $trow,
        'bgcolor' => $tbdcolor
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get task status
  public function tasks_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#647c8a', '#2196f3', '#02bc77', '#d3733b', '#673AB7');
    $someArray = array();
    $j = 0;
    $tasks = get_tasks_status();
    foreach ($tasks->result() as $etask) {
      //$d_rows = array();	
      $row = total_tasks_status($etask->task_status);
      $d_rows[] = $row;
      if ($etask->task_status == 0) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_not_started'));
      } else if ($etask->task_status == 1) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_in_progress'));
      } else if ($etask->task_status == 2) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_completed'));
      } else if ($etask->task_status == 3) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_cancelled'));
      } else if ($etask->task_status == 4) {
        $csname = htmlspecialchars_decode($this->lang->line('xin_project_hold'));
      }
      $c_name[] = $csname;
      $someArray[] = array(
        'label'   => $csname,
        'value' => $row,
        'bgcolor' => $c_color[$j]
      );
      $j++;
      //}
    }
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get attendance_status
  public function attendance_status()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'd_rows' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $current_month = date('Y-m-d');
    $working = $this->Xin_model->current_month_day_attendance($current_month);
    $query = $this->Xin_model->all_employees_status();
    $total = $query->num_rows();
    // absent
    $abs = $total - $working;

    $c_color = array('#666EE8', '#9793d7');
    $someArray = array();
    $j = 0;
    //$att_data = array('working_label'=>$this->lang->line('xin_emp_working'), 'att_total'=>$working,'absent_label'=>$this->lang->line('xin_emp_working'),'att_total'=>$abs);
    //	$projects = get_projects_status();
    //foreach($att_data as $attendance) {
    //$d_rows = array();	
    ///$row[] = $working;
    $row = 345;


    //$csname[] = $this->lang->line('xin_emp_working');
    //$csname[] = $this->lang->line('xin_absent');
    $csname = 'asdasd';
    $d_rows[] = 123;
    //$c_name [] = 'test';
    $someArray[] = array(
      'label'   => $csname,
      'value' => $row,
      'bgcolor' => $c_color
    );
    $j++;
    //}
    //}
    $Return['c_name'] = $c_name;
    $Return['d_rows'] = $d_rows;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get total employees head count
  public function employees_head_count()
  {
    /* Define return | here result is used to return user data and error for error message */
    $date = date('Y');
    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-01%'");
    $row1 = $query->num_rows();
    $Return['january'] = $row1;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-02%'");
    $row2 = $query->num_rows();
    $Return['february'] = $row2;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-03%'");
    $row3 = $query->num_rows();
    $Return['march'] = $row3;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-04%'");
    $row4 = $query->num_rows();
    $Return['april'] = $row4;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-05%'");
    $row5 = $query->num_rows();
    $Return['may'] = $row5;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-06%'");
    $row6 = $query->num_rows();
    $Return['june'] = $row6;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-07%'");
    $row7 = $query->num_rows();
    $Return['july'] = $row7;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-08%'");
    $row8 = $query->num_rows();
    $Return['august'] = $row8;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-09%'");
    $row9 = $query->num_rows();
    $Return['september'] = $row9;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-10%'");
    $row10 = $query->num_rows();
    $Return['october'] = $row10;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-11%'");
    $row11 = $query->num_rows();
    $Return['november'] = $row11;

    $query = $this->db->query("SELECT * from xin_employees WHERE created_at like '%" . $date . "-12%'");
    $row12 = $query->num_rows();
    $Return['december'] = $row12;

    $Return['current_year'] = date('Y');
    $this->output($Return);
    exit;
  }
  // get department wise salary
  public function payroll_department_wise()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'c_am' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#3e70c9', '#f59345', '#f44236', '#8A2BE2', '#D2691E', '#6495ED', '#DC143C', '#006400', '#556B2F', '#9932CC');
    $someArray = array();
    $j = 0;
    foreach ($this->Xin_model->all_departments_chart() as $department) {
      $department_pay = $this->Xin_model->get_department_make_payment($department->department_id);
      $c_name[] = htmlspecialchars_decode($department->department_name);
      $c_am[] = $department_pay[0]->paidAmount;
      $someArray[] = array(
        'label'   => htmlspecialchars_decode($department->department_name),
        'value' => $department_pay[0]->paidAmount,
        'bgcolor' => $c_color[$j]
      );
      $j++;
    }
    $Return['c_name'] = $c_name;
    $Return['c_am'] = $c_am;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get payroll | salary
  public function hrsale_payroll()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'c_am' => '');
    $c_name = array();
    $c_am = array();
    $someArray = array();
    $j = 0;
    for ($i = 0; $i <= 5; $i++) {
      $months = date("Y-m", strtotime(date('Y-m-01') . " -$i months"));
      $amount = hrsale_payroll($months);
      $payroll_amount = $amount;
      $c_name[] = $months;
      $someArray[] = array(
        'label'   => $months,
        'value' => $payroll_amount,
      );
    }
    $Return['c_name'] = $c_name;
    $Return['col_name'] = 'Payroll';
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }
  // get payroll | salary
  public function hrsale_user_payroll()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'c_am' => '');
    $c_name = array();
    $c_am = array();
    $someArray = array();
    $session = $this->session->userdata('username');
    $j = 0;
    for ($i = 0; $i <= 5; $i++) {
      $months = date("Y-m", strtotime(date('Y-m-01') . " -$i months"));
      $amount = ihrsale_user_payroll($months, $session['user_id']);
      $payroll_amount = $amount;
      $c_name[] = $months;
      $someArray[] = array(
        'label'   => $months,
        'value' => $payroll_amount,
      );
    }
    $Return['c_name'] = $c_name;
    $Return['col_name'] = 'Payroll';
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // get expense deposit
  public function hrsale_expense_deposit()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('deposit' => '', 'deposit_label' => '', 'expense' => '', 'expense_label' => '',);

    $Return['deposit'] = dashboard_total_sales();
    $Return['deposit_label'] = $this->lang->line('xin_total_deposit');
    // working
    $Return['expense'] = dashboard_total_expense();
    $Return['expense_label'] = $this->lang->line('xin_total_expenses');
    $this->output($Return);
    exit;
  }

  // overtime request
  public function hrsale_overtime_request()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('overtime_approved' => '', 'overtime_pending' => '', 'overtime_rejected' => '', 'approved' => '', 'pending' => '', 'rejected' => '');

    $Return['approved'] = employee_approved_overtime_request();
    $Return['overtime_approved'] = $this->lang->line('xin_approved');
    // working
    $Return['pending'] = employee_pending_overtime_request();
    $Return['overtime_pending'] = $this->lang->line('xin_pending');

    $Return['rejected'] = employee_rejected_overtime_request();
    $Return['overtime_rejected'] = $this->lang->line('xin_rejected');
    $this->output($Return);
    exit;
  }

  // hrsale clients leads
  public function hrsale_clients_leads()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('clients_label' => '', 'leads_label' => '', 'total_leads' => '', 'total_clients' => '');

    $Return['total_clients'] = total_clients();
    $Return['clients_label'] = $this->lang->line('xin_project_clients');
    // working
    $Return['total_leads'] = total_leads();
    $Return['leads_label'] = $this->lang->line('xin_leads');

    $this->output($Return);
    exit;
  }

  // get designation wise salary
  public function payroll_designation_wise()
  {
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('chart_data' => '', 'c_name' => '', 'c_am' => '', 'c_color' => '');
    $c_name = array();
    $c_am = array();
    $c_color = array('#1AAF5D', '#F2C500', '#F45B00', '#8E0000', '#0E948C', '#6495ED', '#DC143C', '#006400', '#556B2F', '#9932CC');
    $someArray = array();
    $j = 0;
    foreach ($this->Xin_model->all_designations_chart() as $designation) {
      $result = $this->Xin_model->get_designation_make_payment($designation->designation_id);
      $c_name[] = htmlspecialchars_decode($designation->designation_name);
      $c_am[] = $result[0]->paidAmount;
      $someArray[] = array(
        'label'   => htmlspecialchars_decode($designation->designation_name),
        'value' => $result[0]->paidAmount,
        'bgcolor' => $c_color[$j]
      );
      $j++;
    }
    $Return['c_name'] = $c_name;
    $Return['c_am'] = $c_am;
    $Return['chart_data'] = $someArray;
    $this->output($Return);
    exit;
  }

  // hrsale notifications
  public function notifications()
  {
    /* Define return | here result is used to return user data and error for error message */
    $data['title'] = $this->lang->line('header_notifications') . ' | ' . $this->Xin_model->site_title();
    $data['breadcrumbs'] = $this->lang->line('header_notifications');
    //$this->load->view('admin/settings/hrsale_notifications', $data);
    $data['subview'] = $this->load->view("admin/settings/hrsale_notifications", $data, TRUE);
    $this->load->view('admin/layout/layout_main', $data); //page load

    //$this->output($Return);
    //exit;
  }

  // set new language
  public function set_language($language = "")
  {

    $language = ($language != "") ? $language : "english";
    $this->session->set_userdata('site_lang', $language);
    redirect($_SERVER['HTTP_REFERER']);
  }
}

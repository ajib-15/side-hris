<?php
 //
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Xin_model');
		$this->load->model("Job_post_model");
		$this->load->model("Designation_model");
		$this->load->model("Department_model");
		$this->load->model("Recruitment_model");
	}
	
	public function index()
	{		
		$data['title'] = $this->Xin_model->site_title().' | Log in';
		$data['all_jobs'] = $this->Recruitment_model->get_all_jobs_last_desc();
		$data['subview'] = $this->load->view("frontend/home", $data, TRUE);
		$this->load->view('frontend/layout/job_layout_main', $data); //page load
	}
}
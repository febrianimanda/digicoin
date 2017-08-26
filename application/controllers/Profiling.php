<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiling extends CI_Controller {

	public function index() {
		$this->load->model('profiles_model');

		$data['title'] = "Profiling";
		$data['content'] = $this->load->view('pages/profiling', '', true);
		$data['questions'] = $this->profiles_model->get_all_questions()->result_array();
		$this->load->view('layouts/dashboard-layout', $data);
	}
}

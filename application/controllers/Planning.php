<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planning extends CI_Controller {

	public function index() {
		$data['title'] = "Financial Planning";
		$data['content'] = $this->load->view('pages/planning', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function insert() {
		$this->load->model('Planning_model');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends CI_Controller {

	public function index() {
		$data['title'] = "Statistic";
		$data['content'] = $this->load->view('statistic', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}
}

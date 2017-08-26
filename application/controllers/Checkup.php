<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup extends CI_Controller {

	public function index() {
		$data['title'] = "Financial Checkup";
		$data['content'] = $this->load->view('pages/dashboard', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

}

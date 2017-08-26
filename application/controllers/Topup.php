<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topup extends CI_Controller {

	public function index() {
		$data['title'] = "Top Up";
		$data['content'] = $this->load->view('pages/topup', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}
}

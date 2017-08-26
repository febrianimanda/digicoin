<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinancialCheckUp extends CI_Controller {

	public function index() {
		$data['title'] = "Financial Check Up";
		$data['content'] = $this->load->view('pages/financialcheckup', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}
}
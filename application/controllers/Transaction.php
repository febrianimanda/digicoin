<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function income() {
		$data['title'] = "Transaction";
		$data['subtitle'] = "Income";
		$data['content'] = $this->load->view('pages/income', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function expense() {
		$data['title'] = "Transaction";
		$data['subtitle'] = "Expense";
		$data['content'] = $this->load->view('pages/expense', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function transfer() {
		$data['title'] = "Transaction";
		$data['subtitle'] = "Transfer";
		$data['content'] = $this->load->view('pages/transfer', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}
}
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

	public function save_income() {
		$this->load->model('income_model');
		$_POST['userId'] = $this->session->userdata('userId');
		$_POST['date'] = date('Y-m-d', strtotime($_POST['date']));
		$submitted = $this->income_model->insert_income($this->input->post());
		if($submitted) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Transaksi anda berhasil disimpan');
			redirect(site_url('dashboard'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan transaksi anda');
			redirect(site_url('transaction/transfer'), 'refresh');
		}
	}

	public function save_transfer() {
		$this->load->model('transfer_model');
		$_POST['userId'] = $this->session->userdata('userId');
		$_POST['date'] = date('Y-m-d', strtotime($_POST['date']));
		$submitted = $this->transfer_model->insert_transfer($this->input->post());
		if($submitted) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Transaksi anda berhasil disimpan');
			redirect(site_url('dashboard'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan transaksi anda');
			redirect(site_url('transaction/transfer'), 'refresh');
		}
	}

	public function save_expense() {
		$this->load->model('expense_model');
		$_POST['userId'] = $this->session->userdata('userId');
		$_POST['date'] = date('Y-m-d', strtotime($_POST['date']));
		$submitted = $this->expense_model->insert_expense($this->input->post());
		if($submitted) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Transaksi anda berhasil disimpan');
			redirect(site_url('dashboard'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan transaksi anda');
			redirect(site_url('transaction/transfer'), 'refresh');
		}
	}
}
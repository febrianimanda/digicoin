<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup extends CI_Controller {

	public function index() {
		$data['title'] = "Financial Checkup";
		$data['content'] = $this->load->view('pages/financialcheckup', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function improve($improve = 'income') {
		if($improve == 'income') {

		} else {

		}
	}

	public function insert() {
		$this->load->model('checkup_model');
		$pengeluaran_total = intval($_POST['cicilan-total']);
		$penghasilan = intval($_POST['penghasilan']);
		$tabungan = intval($_POST['tabunganperbulan']);
		$eval1 = (($pengeluaran_total / $penghasilan) > 0.3) ? true : false;
		$eval2 = (($tabungan / $penghasilan) > 0.1) ? true : false;

		$_POST['userId'] = $this->session->userdata('userId');
		$submitted = $this->checkup_model->insert_checkup($this->input->post());
		if($submitted) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Financial Checkup Anda berhasil disimpan');
			redirect(site_url('planning'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan Financial Checkup anda');
			redirect(site_url('transaction/transfer'), 'refresh');
		}
	}

}

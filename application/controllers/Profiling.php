<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiling extends CI_Controller {

	public function index() {
		$this->load->model('profiles_model');

		$data_page['questions'] = $this->profiles_model->get_all_questions()->result_array();

		$data['title'] = "Profiling";
		$data['content'] = $this->load->view('pages/profiling', $data_page, true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function insert() {
		$this->load->model('profiles_model');

		$total = 0;
		foreach ($_POST as $key) {
			$total += intval($key);
		}

		$show = true;
		if($total >= 20 && $total <= 24) {
			$status = "success";
			$show = false;
			$suggest = "Selamat, Anda berada di jalan yang benar dalam perencaan keuangan";
		} else if($total >= 14 && $total <= 19) {
			$status = "warning";
			$suggest = "Wah, anda sudah tepat, namun perlu perbaikan dalam perencanaan keuangan";
		} else {
			$status = "danger";
			$suggest = "Perbaiki segera perencanaan keuangan anda sebelum terlambat";
		}

		$_POST['suggest'] = $suggest;
		$_POST['val_total'] = $total;
		$_POST['userId'] = $this->session->userdata('userId');
		$submitted = $this->profiles_model->insert_profiles($this->input->post());

		if($submitted) {
			$this->session->set_flashdata('status', $status);
			$this->session->set_flashdata('message', $suggest);
			$this->session->set_flashdata('show', $show);
			redirect(site_url('goals'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan profile anda');
			redirect(site_url('profiling'), 'refresh');
		}
	}
}

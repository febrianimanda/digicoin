<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals extends CI_Controller {

	public function index() {
		$this->load->model('profiles_model');
		if(!$this->profiles_model->is_exist($this->session->userdata('userId'))) {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Anda belum mengisi profiling anda, jadi tidak bisa ke langkah selanjutnya');
			redirect(site_url('profiling'));
		}
		$data['title'] = "Financial Goals";
		$data['content'] = $this->load->view('pages/goals', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}

	public function insert() {
		$this->load->model('goals_model');
		$_POST['userId'] = $this->session->userdata('userId');
		$submitted = $this->goals_model->insert_goals($this->input->post());
		if($submitted) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Financial Goals Anda telah disimpan');
			redirect(site_url('planning'), 'refresh');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Ada kesalahan ketika menyimpan profile anda');
			redirect(site_url('goals'), 'refresh');
		}
	}

}

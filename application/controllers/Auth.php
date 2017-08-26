<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$data['title'] = "Login";
		$data['content'] = $this->load->view('auth/login', '', true);
		$this->load->view('layouts/auth-layout', $data);
	}

	public function register() {
		$data['title'] = "Pendaftaran";
		$data['content'] = $this->load->view('auth/register', '', true);
		$this->load->view('layouts/auth-layout', $data);
	}

	public function do_login() {
		$this->load->library('form_validation');
		$this->load->model('auth_model');

		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if( $this->form_validation->run() == false) {
			redirect('auth/', 'refresh');
		}
		$nonxss_email = $this->input->post('email');

		$data = array(
			'email'			=> $this->security->xss_clean($nonxss_email),
			'password'	=> MD5($this->input->post('password'))
		);

		$valid = $this->auth_model->login_validation($data);
		if($valid) {
			$user = $this->auth_model->get_user_information($data['email'])->result_array();
			$session_data = array(
				'email'					=> $user[0]['email'],
				'userId'				=> $user[0]['userId'],
				'primaryId'			=> $user[0]['primaryId'],
				'customerName'	=> $user[0]['name'],
				'logged_in'			=> true,
			);
			$this->session->set_userdata($session_data);
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('status', 'danger');
			$this->session->set_flashdata('message', 'Anda salah memasukkan email atau password');
			redirect('auth');
		}
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url(), 'refresh');
	}
}

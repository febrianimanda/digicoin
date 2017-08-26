<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$data['title'] = "Pendaftaran";
		$data['content'] = $this->load->view('auth/login', '', true);
		$this->load->view('layouts/auth-layout', $data);
	}

	public function register() {
		$data['title'] = "Pendaftaran";
		$data['content'] = $this->load->view('auth/register', '', true);
		$this->load->view('layouts/auth-layout', $data);
	}
}

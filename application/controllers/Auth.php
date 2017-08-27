<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		// require '/bca-finhacks-2017.phar';
		
		// $builder = new \Bca\Api\Sdk\SubAccount\SubAccountApiConfigBuilder();
		// $builder->baseApiUri('https://api.finhacks.id/');
		// $builder->baseOAuth2Uri('https://api.finhacks.id/');
		// $builder->clientId('3b11bd44-6b3a-4b9c-9353-4ec8e7206d71');
		// $builder->clientSecret('04ca29f7-bdff-478d-bcc6-0a34fdec8990');
		// $builder->apiKey('eeaf01cf-879f-4794-b49e-8241d1fa9f19');
		// $builder->apiSecret('0f3c6665-5018-4a57-b05a-098d11ae0e30');
		// $builder->origin('yourdomain.com');
		// $builder->companyCode('88812');

		// $config = $builder->build();

		// $subAccountApi = new \Bca\Api\Sdk\SubAccount\SubAccountApi($config);
		// $payload = new \Bca\Api\Sdk\SubAccount\Models\Requests\UserRegistrationPayload();
		// $payload->setCustomerName('John Doe');
		// $payload->setDateOfBirth('2000-05-20');
		// $payload->setPrimaryID('081234567890');
		// $payload->setMobileNumber('081234567890');
		// $payload->setEmailAddress('user@bca.co.id');
		// $payload->setCustomerNumber('1111111112');
		// $payload->setIDNumber('1234567890123456');

		// $response = $subAccountApi->registerUser($payload);
		// print_r($response);
		// echo "<pre>";

		$data['title'] = "Pendaftaran";
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

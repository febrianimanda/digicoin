<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		require '/bca-finhacks-2017.phar';
		
		$builder = new \Bca\Api\Sdk\SubAccount\SubAccountApiConfigBuilder();
		$builder->baseApiUri('https://api.finhacks.id/');
		$builder->baseOAuth2Uri('https://api.finhacks.id/');
		$builder->clientId('3b11bd44-6b3a-4b9c-9353-4ec8e7206d71');
		$builder->clientSecret('04ca29f7-bdff-478d-bcc6-0a34fdec8990');
		$builder->apiKey('eeaf01cf-879f-4794-b49e-8241d1fa9f19');
		$builder->apiSecret('0f3c6665-5018-4a57-b05a-098d11ae0e30');
		$builder->origin('yourdomain.com');
		$builder->companyCode('88812');

		$config = $builder->build();

		$subAccountApi = new \Bca\Api\Sdk\SubAccount\SubAccountApi($config);
		// $payload = new \Bca\Api\Sdk\SubAccount\Models\Requests\UserRegistrationPayload();
		// $payload->setCustomerName('John Doe');
		// $payload->setDateOfBirth('2000-05-20');
		// $payload->setPrimaryID('081234567890');
		// $payload->setMobileNumber('081234567890');
		// $payload->setEmailAddress('user@bca.co.id');
		// $payload->setCustomerNumber('1111111112');
		// $payload->setIDNumber('1234567890123456');

		// $response = $subAccountApi->registerUser($payload);
		print_r($response);
		// echo "<pre>";
		

		
		die();


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

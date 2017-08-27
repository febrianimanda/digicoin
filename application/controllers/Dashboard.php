<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$data['title'] = "Dashboard";
		// require '/bca-finhacks-2017.phar';
		// $builder = new \Bca\Api\Sdk\SubAccount\SubAccountApiConfigBuilder();
		// $builder->baseApiUri('https://api.finhacks.id/');
		// $builder->baseOAuth2Uri('https://api.finhacks.id/');
		// $builder->clientId('268b2069-b099-4fa2-8148-1f1c0327fe63');
		// $builder->clientSecret('b383c35d-3c11-4ce6-b631-8767f4c2084b');
		// $builder->apiKey('0dfb11cd-b140-40cd-b65a-220e9998a129');
		// $builder->apiSecret('199505e4-9d5f-4ba9-bb96-a3ea8b2f69c1');
		// $builder->origin('yourdomain.com');
		// $builder->companyCode('88801');
		// $config = $builder->build();

		// $subAccountApi = new \Bca\Api\Sdk\SubAccount\SubAccountApi($config);

		// $response = $subAccountApi->inquiryUser('081234567890');

		// $data["balance"] = $response->getBalance();
		// $data["customername"] = $response->getCustomerName();


		$data['content'] = $this->load->view('pages/dashboard', '', true);
		$this->load->view('layouts/dashboard-layout', $data);
	}


}

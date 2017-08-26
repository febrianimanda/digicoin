<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	public $table = 'user';

	public function login_validation($data) {
		$limit = 1;
		$query = $this->db->get_where($this->table, $data);
		return ($query->num_rows() == 1) ? true : false;
	}

	public function get_user_information($email) {
		$this->db->where('email', $email);
		return $this->db->get($this->table);
	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income_model extends CI_Model {
	
	public $table = 'income';

	public function read_income_user($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function read_income($incomeId) {
		$this->db->where('incomeId', $incomeId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_income($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
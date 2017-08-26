<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_model extends CI_Model {
	
	public $table = 'transfer';

	public function read_transfer_user($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function read_transfer($transferId) {
		$this->db->where('expenseId', $expenseId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_expense($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
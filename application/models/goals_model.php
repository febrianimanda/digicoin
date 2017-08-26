<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals_model extends CI_Model {
	
	public $table = 'goals';

	public function read_goals($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_goals($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
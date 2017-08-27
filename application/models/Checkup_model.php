<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup_model extends CI_Model {
	
	public $table = 'checkup';

	public function read_checkup($checkup) {
		$this->db->where('checkupId', $checkupId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_checkup($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
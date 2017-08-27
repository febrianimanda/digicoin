<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planning_model extends CI_Model {
	
	public $table = 'planning';

	public function read_planning($planningId) {
		$this->db->where('planningId', $planningId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_planning($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
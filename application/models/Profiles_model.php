<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles_model extends CI_Model {
	
	public $table = 'profiles';

	public function get_all_questions() {
		return $this->db->get('profiles_question');
	}

	public function is_exist($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		if($this->db->affected_rows() == 1){
  		return true;
  	} else {
  		return false;
  	}
	} 

	public function read_profiles($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function insert_profiles($data) {
		$query = $this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? $this->db->error() : True;
	}

}

?>
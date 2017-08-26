<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles_model extends CI_Model {
	
	public $table = 'profiles';

	public function get_all_questions() {
		return $this->db->get('profiles_question');
	}

	public function read_profiles($userId) {
		$this->db->where('userId', $userId);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function update_jumlah($key, $val, $inc=true) {
		$this->db->where($key, $val);
		if($inc == true) {
			$this->db->set('jumlah','`jumlah`+1', FALSE);
		} else {
			$this->db->set('jumlah','`jumlah`-1', FALSE);
		}
		$query = $this->db->update($this->table);
		return ($this->db->affected_rows() != 1) ? False : True;
	}

}

?>
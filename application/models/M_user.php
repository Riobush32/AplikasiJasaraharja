<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	// data user
	public function getUser(){
		$query = $this->db->get('tbl_user');
		return $query;
	}

	// data level
	// data user
	public function getLevel(){
		$query = $this->db->get('tbl_level');
		return $query;
	}


}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
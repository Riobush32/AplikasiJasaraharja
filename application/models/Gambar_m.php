<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar_m extends CI_Model {

	public function insert($data){
		$this->db->insert('tbl_sumber_info',$data);
	}
	

}

/* End of file Gambar_m.php */
/* Location: ./application/models/Gambar_m.php */
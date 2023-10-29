<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {

	private $table = "lokasi";
 
 
	function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}


	public function getDataLokasi(){
		$query =  $this->db->get('tbl_lokasi');
		return $query;
	}

    
}



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aktiva extends CI_Model {

	private $table = "aktiva";
 
 
	function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}


	public function getDataBarang(){
		$query =  $this->db->get('tbl_activa');
		return $query;
	}


    
}

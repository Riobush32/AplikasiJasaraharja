<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_assets extends CI_Model {

	private $table = "management_asset";
 
 
	function __construct(){
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}


	public function getDataAssets(){
		$query =  $this->db->get('tbl_assets');
		return $query;
	}

    
}



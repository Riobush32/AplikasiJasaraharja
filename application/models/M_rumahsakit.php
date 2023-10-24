<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumahsakit extends CI_Model {


	public function getDataRumahSakit(){
		$query =  $this->db->get('tbl_rs');
		return $query;
	}

	//  data kelas kamar
	public function getDataKelasKamar(){
		$query =  $this->db->get('tbl_kelaskamar');
		return $query;
	}

	//  Total Kamar
	public function getTotalKamarRs($id){
		$query = $this->db->query("SELECT COUNT(IDrs) As 'kamar'
			FROM tbl_kamar WHERE IDrs = '".$id."'
			GROUP BY kelas_kamar ");
		return $query->num_rows();
	}

	//  Total Kamar
	public function getTotalObatRs($id){
		$query = $this->db->query("SELECT COUNT(IDrs) As 'obat'
			FROM tbl_obat WHERE IDrs = '".$id."'
			GROUP BY id_obat ");
		return $query->num_rows();
	}

	// Total Ronsen Rs
	public function getTotalRonsenRs($id){
		$query = $this->db->query("SELECT COUNT(IDrs) As 'ronsen'
			FROM tbl_ronsen WHERE IDrs = '".$id."'
			GROUP BY IDronsen ");
		return $query->num_rows();
	}

}

/* End of file M_rumahsakit.php */
/* Location: ./application/models/M_rumahsakit.php */
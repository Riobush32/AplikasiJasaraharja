<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {


	// total berkas survei
	public function getTotalBerkasSurvei(){
		$query = $this->db->get_where('tbl_survei');
		return $query;
	}

	// total berkas draft
	public function getTotalDraftSurvei(){
		$query = $this->db->get_where('tbl_survei',['status_berkas' => 1]);
		return $query;
	}

	// total berkas survei  lengkap
	public function getTotalLengkaptSurvei(){
		$query = $this->db->get_where('tbl_survei',['status_berkas' => 2]);
		return $query;
	}
	
	// total berkas acc survei
	public function getTotalAccSurvei(){
		$query = $this->db->get_where('tbl_survei',['status_berkas' => 3]);
		return $query;
	}
	

	// data pengajuan
	public function getTotalPengajuanSelesai(){
		$query = $this->db->get_where('tbl_pengajuan',['status_pengajuan' => 2]);
		return $query;
	}

		// data pengajuan
	public function getTotalPengajuanBelum(){
		$query = $this->db->get_where('tbl_pengajuan',['status_pengajuan' => 1]);
		return $query;
	}

		// data pengajuan
	public function getTotalPengajuan(){
		$query = $this->db->get('tbl_pengajuan');
		return $query;
	}
	// data pengajuan
	public function getDataPengajuan(){
		$query = $this->db->get('tbl_pengajuan');
		return $query;
	}

	// data pengajuan
	public function getDataSurvei(){
		$query = $this->db->get('tbl_survei');
		return $query;
	}

	// total meninggal
	public function getDataMeninggal(){
		$query = $this->db->get_where('tbl_pengajuan',['santunan1' => 2]);
		return $query;
	}

	// total cacat
	public function getDataCacat(){
		$query = $this->db->get_where('tbl_pengajuan',['santunan2' => 2]);
		return $query;
	}

	// total 
	public function getDataLuka(){
		$query = $this->db->get_where('tbl_pengajuan',['santunan3' => 2]);
		return $query;
	}

	public function getLaporanPengajuan($dari,$sampai){
		$query = "SELECT nama,tempat_lahir,tanggal_lahir, ktp, alamat
		FROM tbl_pengajuan
		WHERE  tglpengajuan >= '" . $dari . " 00:00:00' AND tglpengajuan <= '" . $sampai . " 23:59:59'";
		return $this->db->query($query)->result();
	}

	public function getLaporanSurvei($dari,$sampai){
		$query = "SELECT nama_korban,alamat_korban,lokasi_kecelakaan,nama_petugas
		FROM tbl_survei
		WHERE  tgl_survei >= '" . $dari . " 00:00:00' AND tgl_survei <= '" . $sampai . " 23:59:59'";
		return $this->db->query($query)->result();
	}




}

/* End of file M_dashboard.php */
/* Location: ./application/models/M_dashboard.php */
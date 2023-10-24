<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GambarModel extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('gambar')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		// if($upload['result'] == "success"){
		$data = array(
			'id_survei'=>$this->input->post('id_survei'),
			'deskripsi'=>$this->input->post('input_deskripsi'),
			'nama_file' => $upload['file']['file_name'],
			'ukuran_file' => $upload['file']['file_size'],
			'tipe_file' => $upload['file']['file_type']
		);
		// }
		// else{
		// 	$data = array('deskripsi'=>$this->input->post('input_deskripsi'));
		// }
		
		$this->db->insert('tbl_sumber_info', $data);
	}
}

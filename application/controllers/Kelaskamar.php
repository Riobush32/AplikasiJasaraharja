<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelaskamar extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_rumahsakit','rumahsakit',TRUE);
	}

	public function index(){
		$data = ['title' => "Kelas Kamar",
		'kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'kamar/kelas-kamar'];

		$this->load->view('template', $data);
	}

	// proses kelas kamar
	public function proses(){

		$rs = $this->input->post('rs',TRUE);

		$data = ['nama_kelas'  => $this->input->post('nama',TRUE)];
		$simpan =  $this->crud->insert_data($data, 'tbl_kelaskamar');
		$this->session->set_flashdata('info', "Good Job!#Data Kelas Kamar Ditambahkan#1");
		redirect('kelaskamar');
		
	}

	// edit kelas kamar
	public function edit($id){

		$edit = $this->db->get_where('tbl_kelaskamar',['id_kk' => $id]);

		$data = ['title' => "Kelas Kamar",
		'edit' => $edit->row(),
		'kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'kamar/edit-kelas-kamar'];

		$this->load->view('template', $data);
	}

	// update kelas kamar
	public function update(){

		$where = ['id_kk' => $this->input->post('id',TRUE)];
		$data  = ['nama_kelas'  => $this->input->post('nama',TRUE)];

		$this->crud->update_data($where,$data, 'tbl_kelaskamar');
		$this->session->set_flashdata('info', "Good Job!#Data Kelas Kamar Di Update#1");
		redirect('kelaskamar');
		
	}

	// hapus kelas kamar
	public function delete($id){

		$where = ['id_kk' => $id];

		$this->crud->delete_data($where, 'tbl_kelaskamar');
		$this->session->set_flashdata('info', "Good Job!#Data Kelas Kamar Di Hapus#1");
		redirect('kelaskamar');


	}
	

}


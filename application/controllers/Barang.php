<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_barang','barang',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = ['title' => "Lokasi",
			'barang' => $this->barang->getDatabarang()->result(),
			'view' => 'barang/view'];
			$this->load->view('template', $data);
		}
	}

	

	// proses tambah lokasi
	public function add(){
		if($this->session->userdata('akses') == 1){
			$data = [
				'jenis_barang'  => $this->input->post('jenis_barang',TRUE),
				'merk'  => $this->input->post('merk',TRUE),
				'type' =>  $this->input->post('type',TRUE),
				'jumlah' =>  $this->input->post('jumlah',TRUE),

			];

			$this->crud->insert_data($data, 'tbl_barang');
			$this->session->set_flashdata('info', "Good Job!#Data Barang Berhasil Di Simpan#1");
			redirect('barang');
		}
	}



	
}














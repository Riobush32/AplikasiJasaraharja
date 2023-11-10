<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aktiva extends CI_Controller
{
    public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_barang','barang',TRUE);
		$this->load->model('M_aktiva','aktiva',TRUE);
	}

    
	// proses tambah aktiva
	public function add(){
		if($this->session->userdata('akses') == 1){

            $id_barang = $this->input->post('id_barang',TRUE);
            $jumlah = $this->input->post('jumlah',TRUE);

			$barang_detail = $this->db->get_where('tbl_barang',['id_barang' => $id_barang]);
            $barang = $barang_detail->row();
            
            $id_lokasi = $this->input->post('id_lokasi', TRUE);

			$where = ['id_barang'=> $id_barang];

            if ($jumlah > $barang->jumlah) {
                $this->session->set_flashdata('info', "Warning!#Jumlah barang tidak cukup#1");
			    redirect('lokasi/detail/'.$id_lokasi);
            }

            $sisa_barang = $barang->jumlah - $jumlah;

            $data_barang = [
				'jenis_barang'  => $barang->jenis_barang,
				'merk'  => $barang->merk,
				'type' =>  $barang->type,
				'jumlah' =>  $sisa_barang,
			];

			$data = [
				'id_lokasi'  => $id_lokasi,
				'id_barang'  => $id_barang,
				'nomor_aktiva' =>  $this->input->post('nomor_aktiva',TRUE),
				'asal' =>  $this->input->post('asal',TRUE),
				'ket' =>  $this->input->post('ket',TRUE),
				'jumlah' =>  $jumlah,
				'tahun' =>  $this->input->post('tahun',TRUE),

			];


		    $this->crud->update_data($where,$data_barang, 'tbl_barang');
			$this->crud->insert_data($data, 'tbl_activa');
			$this->session->set_flashdata('info', "Good Job!#Data Berhasil Di Simpan#1");
			redirect('lokasi/detail/'.$id_lokasi);
		}
	}

}

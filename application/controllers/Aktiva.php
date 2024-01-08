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

			// kode aktiva 
			$date = $this->input->post('tahun',TRUE);
			$kode_jasaraharja = "0603";
			$year = date("Y", strtotime($date));
			$kode_loket = "E0803";
			$kode_barang = sprintf("%03s", $id_barang);
			$kode_aktiva = $kode_jasaraharja."-".$year."-".$kode_loket."-".$kode_barang;

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
				'jumlah' =>  $sisa_barang,
			];

			$data = [
				'id_lokasi'  => $id_lokasi,
				'id_barang'  => $id_barang,
				'nomor_aktiva' =>  $kode_aktiva,
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

	// proses edit
	public function edit($id){
		if($this->session->userdata('akses') == 1 ){
			$detail = $this->db->get_where('tbl_activa',['id_aktiva' => $id]);
			$barang = $this->barang->getDataBarang()->result();

			$data = [
				'title' => "Update Aktiva",
				'edit' => $detail->row(),
				'view' => 'lokasi/edit-aktiva',
				'barang' => $barang,
			];

			$this->load->view('template', $data);
		}
	}

	// Proses update
	public function update($id){
		if($this->session->userdata('akses') == 1 ){
			$where = ['id_aktiva'=> $this->input->post('id',TRUE)];

			// kode aktiva 
			$id_barang = $this->input->post('id_barang');
			$date = $this->input->post('tahun',TRUE);
			$kode_jasaraharja = "0603";
			$year = date("Y", strtotime($date));
			$kode_loket = "E0803";
			$kode_barang = sprintf("%03s", $id_barang);
			$kode_aktiva = $kode_jasaraharja."-".$year."-".$kode_loket."-".$kode_barang;

			$data = [
				'id_lokasi'  => $this->input->post('id_lokasi'),
				'id_barang'  => $id_barang,
				'nomor_aktiva' =>  $kode_aktiva,
				'asal' =>  $this->input->post('asal',TRUE),
				'ket' =>  $this->input->post('ket',TRUE),
				'jumlah' =>  $this->input->post('jumlah', TRUE),
				'tahun' =>  $this->input->post('tahun',TRUE),
			];

		$this->crud->update_data($where,$data, 'tbl_activa');
		$this->session->set_flashdata('info', "Good Job!#Data aktiva Berhasil Di Update#1");
		redirect('lokasi/detail/'.$this->input->post('id_lokasi'));

		}
	}

	// proses hapus 
	public function delete($id, $id_lokasi){
		if($this->session->userdata('akses') == 1){
			$where = ['id_aktiva'=> $id];

			$this->crud->delete_data($where, 'tbl_activa');
			$this->session->set_flashdata('info', "Good Job!#Data aktiva Berhasil Di Hapus#1");
			redirect('lokasi/detail/'.$id_lokasi);
		}
	}

	// cetak aktiva
	public function print($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ){
			$cek = $this->db->get_where('tbl_lokasi',['id_lokasi'=> $id])->row();
			$activa = $this->get_filtered_data($id, 'tbl_activa', 'id_lokasi');

			$data = [
						'title' => "Dashboard",
						'lokasi' =>$cek,
						'activa' => $activa,	
						'kepala' =>  $this->input->post('kepala_perwakilan', TRUE),			
						'staf' =>  $this->input->post('staf_administrasi', TRUE),
					];
			$this->load->view('lokasi/cetak-activa', $data);
		}
	}


	public function get_filtered_data($id, $table, $column){
		$this->db->select('*');
		$this->db->from($table);

		if(!empty($id))
		{
			$this->db->where($column , $id);
		}

		$query = $this->db->get();

		return $query->result();
	}


}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumahsakit extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_rumahsakit','rumahsakit',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = ['title' => "List Rumah Sakit",
			'rs' => $this->rumahsakit->getDataRumahSakit()->result(),
			'view' => 'rumahsakit/view'];
			$this->load->view('template', $data);
		}
	}

	// cetak data rumah sakit
	public function cetak(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = ['title' => "List Rumah Sakit",
			'rs' => $this->rumahsakit->getDataRumahSakit()->result()];
			$this->load->view('rumahsakit/cetak-rs', $data);
		}
	}

	// proses tambah rumah sakit
	public function proses(){
		if($this->session->userdata('akses') == 1){
			$data = ['nama_rs'  => $this->input->post('nama',TRUE),
			'nama_direktur'  => $this->input->post('dir',TRUE),
			'nama_pic' =>  $this->input->post('pic',TRUE),
			'no_telepon' =>  $this->input->post('hp',TRUE),
			'no_rec' =>  $this->input->post('rekening',TRUE)];

			$this->crud->insert_data($data, 'tbl_rs');
			$this->session->set_flashdata('info', "Good Job!#Data Rumah Sakit Berhasil Di Simpan#1");
			redirect('rumahsakit');
		}
	}


	// edit rumah sakit
	public function edit($id){
		if($this->session->userdata('akses') == 1 ){
			$detail = $this->db->get_where('tbl_rs',['IDrs' => $id]);

			$data = ['title' => "Update Informasi Rumah Sakit",
			'edit' => $detail->row(),
			'view' => 'rumahsakit/edit-rs'];

			$this->load->view('template', $data);
		}
	}

	// update rumah sakit
	public function update(){
		if($this->session->userdata('akses') == 1 ){
			$where = ['IDrs'=> $this->input->post('id',TRUE)];

			$data = ['nama_rs'  => $this->input->post('nama',TRUE),
			'nama_direktur'  => $this->input->post('dir',TRUE),
			'nama_pic' =>  $this->input->post('pic',TRUE),
			'no_telepon' =>  $this->input->post('hp',TRUE),
			'no_rec' =>  $this->input->post('rekening',TRUE),
		];

		$this->crud->update_data($where,$data, 'tbl_rs');
		$this->session->set_flashdata('info', "Good Job!#Data Rumah Sakit Berhasil Di Update#1");
		redirect('rumahsakit');

	}
}

	// ini bagian detail rumah sakit
public function detail($id){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$detail = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Rumah Sakit",
		'detail' => $detail->row(),
		't_kamar' => $this->rumahsakit->getTotalKamarRs($id),
		't_obat' => $this->rumahsakit->getTotalObatRs($id),
		't_ronsen' => $this->rumahsakit->getTotalRonsenRs($id),
		'view' => 'rumahsakit/detail-rs'];

		$this->load->view('template', $data);
	}
}

	// ini bagian detail kamar rumah sakit
public function detailkamar(){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$id = $_GET['id'];

		if(empty($id)){
			redirect('rumahsakit/detail/'.$id);
		}

		$this->db->join('tbl_kelaskamar b', 'b.id_kk = a.kelas_kamar', 'left');
		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_kamar a',['a.IDrs' => $id]);
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Kamar Rumah Sakit",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'kamar' => $detail->result(),
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'rumahsakit/detail-kamar-rs'];

		$this->load->view('template', $data);
	}
}

		// edit kamar
public function editkamar($id){
	if($this->session->userdata('akses') == 1 ){
		$detail = $this->db->get_where('tbl_kamar',['id_kamar' => $id])->row();
		$id_rs = $detail->IDrs;
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id_rs]);

		$data = ['title' => "Ubah Data Kamar Rumah Sakit",

		'rs' => $rs->row(),
		'edit' => $detail,
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'rumahsakit/edit-kamar-rs'];

		$this->load->view('template', $data);
	}
}

	// update rumah sakit
public function updatekamar(){
	if($this->session->userdata('akses') == 1){
		$rs = $this->input->post('rs',TRUE);

		$where = ['id_kamar'=> $this->input->post('id',TRUE)];

		$data = ['kelas_kamar'  => $this->input->post('kamar',TRUE),
		'harga'  => str_replace('.','',$this->input->post('harga', TRUE))];

		$this->crud->update_data($where,$data, 'tbl_kamar');
		$this->session->set_flashdata('info', "Good Job!#Data Rumah Sakit Berhasil Di Update#1");
		redirect('rumahsakit/detailkamar?id='.$rs);
	}
}

	// update rumah sakit
public function deletekamar($id){
	if($this->session->userdata('akses') == 1){
		$where = ['id_kamar'=> $id];

		$this->crud->delete_data($where, 'tbl_kamar');
		$this->session->set_flashdata('info', "Good Job!#Data Rumah Sakit Berhasil Di Hapus#1");
		redirect($_SERVER['HTTP_REFERER']);
	}
}

	//  cetak kamar

public function cetakkamar(){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$id = $_GET['id'];

		if(empty($id)){
			redirect('rumahsakit/detail/'.$id);
		}

		$this->db->join('tbl_kelaskamar b', 'b.id_kk = a.kelas_kamar', 'left');
		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_kamar a',['a.IDrs' => $id]);
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Kamar Rumah Sakit",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'kamar' => $detail->result(),
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result()];

		$this->load->view('rumahsakit/cetak-kamar', $data);
	}
}

	// proses kamar
public function proseskamar(){
	if($this->session->userdata('akses') == 1 ){
		$rs = $this->input->post('rs',TRUE);

		$data = ['IDrs'  => $rs,
		'kelas_kamar'  => $this->input->post('kamar',TRUE),
		'harga' => str_replace('.','',$this->input->post('harga', TRUE)),];
		$simpan =  $this->crud->insert_data($data, 'tbl_kamar');
		$this->session->set_flashdata('info', "Good Job!#Data Kamar Berhasil Di Simpan#1");
		redirect('rumahsakit/detailkamar?id='.$rs);
	}
}

	// detail obat
public function detailobat($id){

	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_obat a',['a.IDrs' => $id]);
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Obat Rumah Sakit",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'obat' => $detail->result(),
		'view' => 'rumahsakit/detail-obat-rs'];

		$this->load->view('template', $data);
	}
}

	// edit obat
public function editobat($id){
	if($this->session->userdata('akses') == 1 ){
		$detail = $this->db->get_where('tbl_obat',['id_obat' => $id])->row();
		$id_rs = $detail->IDrs;
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id_rs]);

		$data = ['title' => "Ubah Data Obat Rumah Sakit",
		'rs' => $rs->row(),
		'edit' => $detail,
		'view' => 'rumahsakit/edit-obat-rs'];
		$this->load->view('template', $data);
	}
}

	// update data obat
public function updateobat(){
	if($this->session->userdata('akses') == 1 ){
		$rs = $this->input->post('rs',TRUE);

		$where = ['id_obat'=> $this->input->post('id',TRUE)];

		$data = ['nama_obat'  => $this->input->post('nama',TRUE),
		'harga_obat'  => str_replace('.','',$this->input->post('harga', TRUE))];

		$this->crud->update_data($where,$data, 'tbl_obat');
		$this->session->set_flashdata('info', "Good Job!#Data Obat Sakit Berhasil Di Update#1");
		redirect('rumahsakit/detailobat/'.$rs);
	}
}

	// delete kamar
public function deleteobat($id){
	if($this->session->userdata('akses') == 1 ){
		$where = ['id_obat'=> $id];

		$this->crud->delete_data($where, 'tbl_obat');
		$this->session->set_flashdata('info', "Good Job!#Data Obat Sakit Berhasil Di Hapus#1");
		redirect($_SERVER['HTTP_REFERER']);
	}

}

	// cetak obat
public function cetakobat($id){

	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_obat a',['a.IDrs' => $id]);
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Obat Rumah Sakit",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'obat' => $detail->result(),];

		$this->load->view('rumahsakit/cetak-obat-rs', $data);
	}
}

	// proses obat
public function prosesobat(){
	if($this->session->userdata('akses') == 1 ){
		$rs = $this->input->post('rs',TRUE);

		$data = ['IDrs'  => $rs,
		'nama_obat'  => $this->input->post('nama',TRUE),
		'harga_obat' => str_replace('.','',$this->input->post('harga', TRUE)),];
		$simpan =  $this->crud->insert_data($data, 'tbl_obat');
		$this->session->set_flashdata('info', "Good Job!#Data Obat Berhasil Di Simpan#1");
		redirect('rumahsakit/detailobat/'.$rs);
	}
}

	// detail ronsen
	// ini bagian detail kamar rumah sakit
public function detailronsen(){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$id = $_GET['id'];

		if(empty($id)){
			redirect('rumahsakit/detail/'.$id);
		}


		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_ronsen a',['a.IDrs' => $id]);
		// ini untuk mengambil data RS
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Ronsen",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'kamar' => $detail->result(),
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'rumahsakit/detail-ronsen-rs'];

		$this->load->view('template', $data);
	}
}

	// proses kamar
public function prosesronsen(){
	if($this->session->userdata('akses') == 1 ){

		$rs = $this->input->post('rs',TRUE);

		$data = ['IDrs'  => $rs,
		'keterangan'  => $this->input->post('keterangan',TRUE),
		'harga_ronsen' => str_replace('.','',$this->input->post('harga', TRUE)),];
		$simpan =  $this->crud->insert_data($data, 'tbl_ronsen');
		$this->session->set_flashdata('info', "Good Job!#Data Kamar Berhasil Di Simpan#1");
		redirect('rumahsakit/detailronsen?id='.$rs);
	}

}

	// edit kamar
public function editronsen($id){
	if($this->session->userdata('akses') == 1){
		$detail = $this->db->get_where('tbl_ronsen',['IDronsen' => $id])->row();
		$id_rs = $detail->IDrs;
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id_rs]);

		$data = ['title' => "Ubah Data Ronsen",

		'rs' => $rs->row(),
		'edit' => $detail,
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'rumahsakit/edit-ronsen-rs'];

		$this->load->view('template', $data);
	}
}

	// update rumah sakit
public function updateronsen(){
	if($this->session->userdata('akses') == 1 ){
		$rs = $this->input->post('rs',TRUE);

		$where = ['IDronsen'=> $this->input->post('id',TRUE)];

		$data = ['keterangan'  => $this->input->post('keterangan',TRUE),
		'harga_ronsen'  => str_replace('.','',$this->input->post('harga', TRUE))];

		$this->crud->update_data($where,$data, 'tbl_ronsen');
		$this->session->set_flashdata('info', "Good Job!#Data Ronsen Berhasil Di Update#1");
		redirect('rumahsakit/detailronsen?id='.$rs);
	}

}

	// update rumah sakit
public function deleteronsen($id){
	if($this->session->userdata('akses') == 1 ){
		$where = ['IDronsen'=> $id];

		$this->crud->delete_data($where, 'tbl_ronsen');
		$this->session->set_flashdata('info', "Good Job!#Data Ronsen Berhasil Di Hapus#1");
		redirect($_SERVER['HTTP_REFERER']);
	}
}

public function cetakronsen(){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
		$id = $_GET['id'];

		if(empty($id)){
			redirect('rumahsakit/detail/'.$id);
		}


		$this->db->join('tbl_rs c', 'c.IDrs = a.IDrs', 'left');
		$detail = $this->db->get_where('tbl_ronsen a',['a.IDrs' => $id]);
		// ini untuk mengambil data RS
		$rs = $this->db->get_where('tbl_rs',['IDrs' => $id]);

		$data = ['title' => "Data Ronsen",
		'detail' => $detail->row(),
		'rs' => $rs->row(),
		'kamar' => $detail->result(),
		'k_kamar' => $this->rumahsakit->getDataKelasKamar()->result(),
		'view' => 'rumahsakit/detail-ronsen-rs'];

		$this->load->view('rumahsakit/cetak-ronsen-rs', $data);
	}
}












}


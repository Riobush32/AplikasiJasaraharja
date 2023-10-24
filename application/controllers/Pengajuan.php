<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_dashboard','dashboard',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 ||  $this->session->userdata('akses') == 3 ||   $this->session->userdata('akses') == 4 ){
			$data = ['title' => "Data Pengajuan",
			'pengajuan' => $this->dashboard->getDataPengajuan()->result(),
			'view' => 'pengajuan/view'];
			$this->load->view('template', $data);
		}
	}

	// proses pengajuan
	public function proses(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 4 ){
			$nama = $this->input->post('nama');
			$tempat = $this->input->post('tempat');
			$tgl = $this->input->post('tgl');
			$umur = $this->input->post('umur');
			$jk = $this->input->post('jk');
			$ktp = $this->input->post('ktp');
			$alamat = $this->input->post('alamat');
			$pekerjaan = $this->input->post('pekerjaan');
			$ponsel = $this->input->post('ponsel');
			$hubungan = $this->input->post('hubungan');
			$santunan1 = $this->input->post('santunan1');
			$santunan2 = $this->input->post('santunan2');
			$santunan3 = $this->input->post('santunan3');
			$santunan4 = $this->input->post('santunan4');
			$santunan5 = $this->input->post('santunan5');
			$santunan6 = $this->input->post('santunan6');
			$nama2 = $this->input->post('nama2');
			$tempat2 = $this->input->post('tempat2');
			$tgl2 = $this->input->post('tgl2');
			$umur2 = $this->input->post('umur2');
			$jk2 = $this->input->post('jk2');
			$ktp2 = $this->input->post('ktp2');
			$alamat2 = $this->input->post('alamat2');
			$pekerjaan2 = $this->input->post('pekerjaan2');
			$ponsel2 = $this->input->post('ponsel2');


			$data = ['nama' => $nama,
			'tempat_lahir' => $tempat,
			'tanggal_lahir'=> $tgl,
			'umur'=> $umur,
			'jk1' => $jk,
			'ktp'=> $ktp,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan,
			'nohp' =>$ponsel,
			'hubungan_keluarga' => $hubungan,
			'santunan1' => $santunan1,
			'santunan2' => $santunan2,
			'santunan3' => $santunan3,
			'santunan4' => $santunan4,
			'santunan5' => $santunan5,
			'santunan6' => $santunan6, 
			'harikejadian' => $this->input->post('harikejadian'),
			'tanggalkejadian' => $this->input->post('tanggalkejadian'),
			'jamkejadian' => $this->input->post('jamkejadian'),
			'tempatkejadian' => $this->input->post('tempatkejadian'),
			'kasus1' => $this->input->post('kasus1'),
			'kasus2' => $this->input->post('kasus2'),
			'kasus3' => $this->input->post('kasus3'),
			'kasus4' => $this->input->post('kasus4'),
			'kasus5' => $this->input->post('kasus5'),
			'kasus6' => $this->input->post('kasus6'),
			'kasus7' => $this->input->post('kasus7'),
			'nama2' => $nama2,
			'tempat_lahir2' => $tempat2,
			'tanggal_lahir2'=> $tgl2,
			'umur2'=> $umur2,
			'jk2' => $jk2,
			'ktp2'=> $ktp2,
			'alamat2' => $alamat,
			'pekerjaan' => $pekerjaan2,
			'nohp2' =>$ponsel2,
			'tempatpengajuan'=> $this->input->post('tempatpengajuan'),
			'tglpengajuan'=> $this->input->post('tglpengajuan'),
			'namapengaju'=> $this->input->post('namapengaju'),
		];

		$this->crud->insert_data($data,'tbl_pengajuan');
		$this->session->set_flashdata('info', "Good Job!#Pengajuan Berhasil Di Simpan#1");
		redirect('pengajuan');
	}
}

// proses pengajuan
public function update(){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 4 ){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tempat');
		$tgl = $this->input->post('tgl');
		$umur = $this->input->post('umur');
		$jk = $this->input->post('jk');
		$ktp = $this->input->post('ktp');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$ponsel = $this->input->post('ponsel');
		$hubungan = $this->input->post('hubungan');
		$santunan1 = $this->input->post('santunan1');
		$santunan2 = $this->input->post('santunan2');
		$santunan3 = $this->input->post('santunan3');
		$santunan4 = $this->input->post('santunan4');
		$santunan5 = $this->input->post('santunan5');
		$santunan6 = $this->input->post('santunan6');
		$nama2 = $this->input->post('nama2');
		$tempat2 = $this->input->post('tempat2');
		$tgl2 = $this->input->post('tgl2');
		$umur2 = $this->input->post('umur2');
		$jk2 = $this->input->post('jk2');
		$ktp2 = $this->input->post('ktp2');
		$alamat2 = $this->input->post('alamat2');
		$pekerjaan2 = $this->input->post('pekerjaan2');
		$ponsel2 = $this->input->post('ponsel2');

		$where = ['id_pengaju' => $id];

		$data = ['nama' => $nama,
		'tempat_lahir' => $tempat,
		'tanggal_lahir'=> $tgl,
		'umur'=> $umur,
		'jk1' => $jk,
		'ktp'=> $ktp,
		'alamat' => $alamat,
		'pekerjaan' => $pekerjaan,
		'nohp' =>$ponsel,
		'hubungan_keluarga' => $hubungan,
		'santunan1' => $santunan1,
		'santunan2' => $santunan2,
		'santunan3' => $santunan3,
		'santunan4' => $santunan4,
		'santunan5' => $santunan5,
		'santunan6' => $santunan6, 
		'harikejadian' => $this->input->post('harikejadian'),
		'tanggalkejadian' => $this->input->post('tanggalkejadian'),
		'jamkejadian' => $this->input->post('jamkejadian'),
		'tempatkejadian' => $this->input->post('tempatkejadian'),
		'kasus1' => $this->input->post('kasus1'),
		'kasus2' => $this->input->post('kasus2'),
		'kasus3' => $this->input->post('kasus3'),
		'kasus4' => $this->input->post('kasus4'),
		'kasus5' => $this->input->post('kasus5'),
		'kasus6' => $this->input->post('kasus6'),
		'kasus7' => $this->input->post('kasus7'),
		'nama2' => $nama2,
		'tempat_lahir2' => $tempat2,
		'tanggal_lahir2'=> $tgl2,
		'umur2'=> $umur2,
		'jk2' => $jk2,
		'ktp2'=> $ktp2,
		'alamat2' => $alamat,
		'pekerjaan' => $pekerjaan2,
		'nohp2' =>$ponsel2,
		'tempatpengajuan'=> $this->input->post('tempatpengajuan'),
		'tglpengajuan'=> $this->input->post('tglpengajuan'),
		'namapengaju'=> $this->input->post('namapengaju'),
	];

	$this->crud->update_data($where,$data,'tbl_pengajuan');
	$this->session->set_flashdata('info', "Good Job!#Pengajuan Berhasil Di Simpan#1");
	redirect('pengajuan');
}
}

// edit data pengajuan

public function edit($id){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 4 ){
		$cek = $this->db->get_where('tbl_pengajuan',['id_pengaju'=> $id])->row();

		$data = ['title' => "Dashboard",
		'data' =>$cek,
		'view' => 'pengajuan/edit'];
		$this->load->view('template', $data);
	}
}

	// cetak pengajuan
public function cetak($id){
	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ){
		$cek = $this->db->get_where('tbl_pengajuan',['id_pengaju'=> $id])->row();

		$data = ['title' => "Dashboard",
		'data' =>$cek,];
		$this->load->view('pengajuan/cetak-pengajuan', $data);
	}
}

// cetak pengajuan
public function hapus($id){
	if($this->session->userdata('akses') == 1  || $this->session->userdata('akses') == 4 ){
		$where = ['id_pengaju' => $id];

		$this->crud->delete_data($where,'tbl_pengajuan');
		$this->session->set_flashdata('info', "Good Job!#Pengajuan Berhasil Di Hapus#1");
		redirect('pengajuan');
	}
}












}


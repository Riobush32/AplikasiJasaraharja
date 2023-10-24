<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		 //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_user','user',TRUE);
	}



	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2){
			$data = ['title' => "Managemen Pengguna",
			'user'  => $this->user->getUser()->result(),
			'level'  => $this->user->getLevel()->result(),
			'view' => 'user/view'];
			$this->load->view('template', $data);
		}
	}

	public function simpan(){
		if($this->session->userdata('akses') == 1){
			$data = ['nama_lengkap' =>$this->input->post('nama'),
			'username' => $this->input->post('user'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')];

			$this->crud->insert_data($data,'tbl_user');
			redirect('user');
		}

	}

	public function delete($id){
		if($this->session->userdata('akses') == 1){

			$where = ['id_user'  => $id];

			$this->crud->delete_data($where,'tbl_user');
			$this->session->set_flashdata('info',"Berhasil#Data Berhasil Di Hapus#1");
			redirect('user');
		}

	}












}


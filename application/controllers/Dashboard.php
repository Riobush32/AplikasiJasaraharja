<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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


	//  dashboard
	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2  || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4 ){
			$data = ['title' => "Selamat Datang",
			't_bekassurvei' => $this->dashboard->getTotalBerkasSurvei()->num_rows(),
			't_draftsurvei' => $this->dashboard->getTotalDraftSurvei()->num_rows(),
			't_lengkaptsurvei' => $this->dashboard->getTotalLengkaptSurvei()->num_rows(),
			't_accsurvei' => $this->dashboard->getTotalAccSurvei()->num_rows(),
			'meninggal' => $this->dashboard->getDataMeninggal()->num_rows(),
			'cacat' => $this->dashboard->getDataCacat()->num_rows(),
			'luka' => $this->dashboard->getDataLuka()->num_rows(),
			't_pengajuan' => $this->dashboard->getTotalPengajuan()->num_rows(),
			't_ss' => $this->dashboard->getTotalPengajuanSelesai()->num_rows(),
			't_bs' => $this->dashboard->getTotalPengajuanBelum()->num_rows(),
			'view' => 'dashboard/view'];
			$this->load->view('template', $data);
		}
	}

	//  meninggal
	public function meninggal(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2  || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4 ){
			$data = ['title' => "Data Meninggal Dunia",
			'meninggal' => $this->dashboard->getDataMeninggal()->result(),
			'view' => 'dashboard/view-meninggal'];
			$this->load->view('template', $data);
		}

	}

	//  meninggal
	public function cacat(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
			$data = ['title' => "Data Cacat Tetap",
			'cacat' => $this->dashboard->getDataCacat()->result(),
			'view' => 'dashboard/view-cacat'];
			$this->load->view('template', $data);
		}

	}

	//  dashboard
	public function luka(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
			$data = ['title' => "Data Luka",
			'luka' => $this->dashboard->getDataLuka()->result(),
			'view' => 'dashboard/view-luka'];
			$this->load->view('template', $data);
		}
	}












}


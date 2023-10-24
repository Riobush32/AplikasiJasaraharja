<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		// load model
		// $this->load->model('M_dashboard','dashboard',TRUE);
	}

	public function index(){

		$data = ['title' => "Dashboard",
		'view' => 'obat/view'];
		$this->load->view('template', $data);


	}
	











}


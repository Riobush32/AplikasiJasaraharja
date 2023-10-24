<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ronsen extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		// load model
		// $this->load->model('M_dashboard','dashboard',TRUE);
	}

	public function index(){

		$data = ['title' => "Dashboard",
		'view' => 'ronsen/view'];
		$this->load->view('template', $data);


	}
	











}


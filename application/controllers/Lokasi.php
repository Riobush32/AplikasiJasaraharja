<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_lokasi','lokasi',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = ['title' => "Lokasi",
			'lokasi' => $this->lokasi->getDatalokasi()->result(),
			'view' => 'lokasi/view'];
			$this->load->view('template', $data);
		}
	}

	

	// proses tambah lokasi
	public function add(){
		if($this->session->userdata('akses') == 1){
			$qrcode_data = $this->input->post('link_maps');
			$data = ['nama_lokasi'  => $this->input->post('nama_lokasi',TRUE),
			'alamat'  => $this->input->post('alamat',TRUE),
			'link_maps' =>  $this->input->post('link_maps',TRUE),
            'qrcode'   => $this->_generate_qrcode($this->input->post('nama_barang'),$qrcode_data),];

			$this->crud->insert_data($data, 'tbl_lokasi');
			$this->session->set_flashdata('info', "Good Job!#Data lokasi Berhasil Di Simpan#1");
			redirect('lokasi');
		}
	}

    
 //generate image qrcode
   public function _generate_qrcode($fullname, $data_code)
	{
		//load libraru qrcode
		$this->load->library('ciqrcode');
	
		//persiapan direktori untuk menyimpan image qrcode hasil generate. 
		//Path dan nama direktori bisa kalian sesuaikan dengan kebutuhan kalian
		$directory = "./qrcode";
		//persiapan filename untuk image qrcode. Diambil dari data fullname tanpa spasi + 3 digit angka random
		$file_name = str_replace(" ", "", strtolower($fullname)).rand(pow(10, 2), pow(10, 3)-1);
	
		//pembuatan direktori jika belum ada
		if (!is_dir($directory)) {
			mkdir($directory, 0777, TRUE);
		}
	
		$config['cacheable']    = true; //boolean, the default is true
		$config['quality']      = true; //boolean, the default is true
		$config['size']         = '1024'; //interger, the default is 1024
		$config['black']        = array(224,255,255); // array, default is array(255,255,255)
		$config['white']        = array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);
	
		//menyisipkan ekstensi png pada filename qrcode
		$image_name=$file_name.'.png';
	
		$params['data'] = $data_code; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = $directory.'/'.$image_name;
		
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
		
		return  $image_name;
	}


	
}













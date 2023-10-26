<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assets extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        //Load Dependencies
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		$this->load->model('M_assets','assets',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = [
                'title' => "Management Assets",
			    'assets' => $this->assets->getDataAssets()->result(),
			    'view' => 'managementassets/view'
            ];
			$this->load->view('template', $data);
		}
	}

	// cetak data rumah sakit
	// public function cetak(){
	// 	if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
	// 		$data = ['title' => "List Rumah Sakit",
	// 		'rs' => $this->rumahsakit->getDataRumahSakit()->result()];
	// 		$this->load->view('rumahsakit/cetak-rs', $data);
	// 	}
	// }

	public function proses(){
		if($this->session->userdata('akses') == 1){
			$qrcode_data = $this->input->post('lokasi');
			$data = [
				'nama_barang'  => $this->input->post('nama_barang',TRUE),
				'merk'  => $this->input->post('merk',TRUE),
				'type'  => $this->input->post('type',TRUE),
				'asal'  => $this->input->post('asal',TRUE),
				'tahun'  => $this->input->post('tahun',TRUE),
				'jumlah'  => $this->input->post('jumlah',TRUE),
				'nomor_activa'  => $this->input->post('nomor_activa',TRUE),
				'lokasi'  => $this->input->post('lokasi',TRUE),
				'keterangan'  => $this->input->post('keterangan',TRUE),
				'qrcode'   => $this->_generate_qrcode($this->input->post('nama_barang'),$qrcode_data),
			];

				$this->crud->insert_data($data, 'tbl_assets');
				$this->session->set_flashdata('info', "Good Job!#Data Rumah Sakit Berhasil Di Simpan#1");
				redirect('assets');
		}
	}

	//generate qrcode data
	public function _generate_data_qrcode()
	{
		$this->load->helper('string');
		$code = strtoupper(random_string('alnum', 6));
		//proses cek data qrcode untuk memastikan data qrcode bersifat unik
		
		return $code;
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


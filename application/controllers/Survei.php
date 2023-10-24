<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survei extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('oklog') != TRUE) {
			redirect('login');
		}
		//load model
		$this->load->model('M_dashboard','dashboard',TRUE);
		$this->load->model('Gambar_m','gambar',TRUE);
	}

	public function index(){
		if($this->session->userdata('akses') == 1  || $this->session->userdata('akses') == 2 ||  $this->session->userdata('akses') == 3 ||  $this->session->userdata('akses') == 4){
			$data = ['title' => "Data Survey",
			'survei' => $this->dashboard->getDataSurvei()->result(),
			'view' => 'survei/view'];
			$this->load->view('template', $data);
		}
	}

	public function add(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3){
			$data = ['title' => "Data Survey",
			'view' => 'survei/add'];
			$this->load->view('template', $data);
		}
	}

	// data kunjungan
	public function add_kunjungan($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3){

			$edit = $this->db->get_where('tbl_survei',['id_survei' => $id])->row();
			$berkas = $this->db->get('tbl_jenisberkas')->result();

			$data = ['title' => "Dokumentasi Kunjungan",
			'detail' => $edit,
			'berkas' => $berkas,
			'view' => 'survei/add_kunjungan'];
			$this->load->view('template', $data);
		}
	}

	public function proses(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3){

			// ambil no urut terakhir
			$this->db->limit(1);
			$this->db->order_by('NoUrut', 'desc');
			$cek = $this->db->get_where('tbl_survei',)->row();
			$no_urut = $cek->NoUrut + 1;

			$id_pengaju = $this->input->post('id',TRUE);

			$data = ['hari_survei'=> $this->input->post('hari',TRUE),
			'NoUrut' =>  $no_urut,
			'tgl_survei'=> $this->input->post('tanggal',TRUE),
			'nama_petugas' => $this->session->userdata('nama'),
			'jenis1' => $this->input->post('jenis1',TRUE),
			'jenis2' => $this->input->post('jenis2',TRUE),
			'jenis3' => $this->input->post('jenis3',TRUE),
			'jenis4' => $this->input->post('jenis4',TRUE),
			'nama_korban' => $this->input->post('korban',TRUE),
			'alamat_korban' => $this->input->post('alamat',TRUE),
			'lokasi_kecelakaan' => $this->input->post('kejadian',TRUE),
			// 'info1' =>  $this->input->post('info1',TRUE),
			// 'info2' =>  $this->input->post('info2',TRUE),
			// 'info3' =>  $this->input->post('info3',TRUE),
			'keterangan' =>  $this->input->post('kesimpulan',TRUE)];

			$where  = ['id_pengaju' => $id_pengaju];

			$update = ['status_pengajuan' => 2];


			$this->crud->insert_data($data,'tbl_survei');
			$this->crud->update_data($where,$update,'tbl_pengajuan');
			$this->session->set_flashdata('info', "Good Job!#Data Survei Berhasil di Tambahkan#1");
			redirect('survei');

		}
	}

	// edit survei
	public function detail($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 2){

			$edit = $this->db->get_where('tbl_survei',['id_survei' => $id])->row();

			$info = $this->db->get_where('tbl_sumber_info',['id_survei' => $id])->result();
			$this->db->join('tbl_jenisberkas b', 'b.id_berkas = a.berkas', 'left');
			$info2 = $this->db->get_where('tbl_gambar_survei a',['a.id_survei' => $id])->result();

			$data = ['title' => "Data Survey",
			'detail' => $edit,
			'informasi' => $info,
			'kunjungan' => $info2,
			'view' => 'survei/detail'];
			$this->load->view('template', $data);
		}
	}

	public function proses_info(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3){

			$sig_string=$_POST['signature'];
			$dir = "tandatangan/";
			$nama_file= "signature_".date("his").".png";
			file_put_contents($dir.$nama_file, file_get_contents($sig_string));
			if(file_exists($dir.$nama_file)){
				echo "<p>File Signature berhasil disimpan - ".$nama_file."</p>";
				echo "<p style='border:solid 1px teal;width:355px;height:110px;'><img src=base_url()'".$nama_file."'></p>";		
				$id = $this->input->post('id');
				$keterangan = $this->input->post('keterangan');
				
				$data = array(
					'id_survei' => $id,
					'Keterangan' => $keterangan,
					'TandaTangan' => $nama_file
				);

				$this->crud->insert_data($data,'tbl_sumber_info');		
				redirect('survei/detail/'.$id);	
			}


		// Membuat gambar wajib di isi
			// if (empty($_FILES['signature']['name'])){
			// 	$this->form_validation->set_rules('signature', 'signature', 'required');
			// }

			// if($this->form_validation->run() != false){

			// 	$config['upload_path']   = './signature/';
			// 	$config['allowed_types'] = 'gif|jpg|png|jpeg';

			// 	$this->load->library('upload', $config);

			// 	if ($this->upload->do_upload('signature')) {

			// 	// mengambil data tentang gambar
			// 		$gambar = $this->upload->data();

			// 		$id = $this->input->post('id');
			// 		$keterangan = $this->input->post('keterangan');
			// 		$signature = $gambar['file_name'];


			// 		$data = array(
			// 			'id_survei' => $id,
			// 			'Keterangan' => $keterangan,
			// 			'TandaTangan' => $signature,
			// 		);

			// 		$this->crud->insert_data($data,'tbl_sumber_info');
			// 		redirect('survei/detail/'.$id);	

			// 	}
			// }
			

		}
	}


	public function foto_survei(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3){

			$this->form_validation->set_rules('keterangan','keterangan','required');


		// Membuat gambar wajib di isi
			if (empty($_FILES['sampul']['name'])){
				$this->form_validation->set_rules('sampul', 'Gambar Sampul', 'required');
			}

			if($this->form_validation->run() != false){

				$config['upload_path']   = './survei/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('sampul')) {

				// mengambil data tentang gambar
					$gambar = $this->upload->data();

					$id = $this->input->post('id');
					$keterangan = $this->input->post('keterangan');
					$sampul = $gambar['file_name'];


					$data = array(
						'id_survei' => $id,
						'berkas' => $keterangan,
						'Gambar' => $sampul,

					);

					$this->crud->insert_data($data,'tbl_gambar_survei');
					redirect('survei/detail/'.$id);	

				} else {

					$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());


					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_artikel_tambah',$data);
					$this->load->view('dashboard/v_footer');
				}

			}else{
				$data['kategori'] = $this->m_data->get_data('kategori')->result();
				$this->load->view('dashboard/v_header');
				$this->load->view('dashboard/v_artikel_tambah',$data);
				$this->load->view('dashboard/v_footer');
			}

		}
	}


	// edit survei
	public function edit($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 4){
			$edit = $this->db->get_where('tbl_survei',['id_survei' => $id])->row();
			$data = ['title' => "Data Survey",
			'edit' => $edit,
			'view' => 'survei/edit'];
			$this->load->view('template', $data);
		}
	}

	




	public function cetak($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){

			$cetak = $this->db->get_where('tbl_survei',['id_survei' => $id]);

			$info = $this->db->get_where('tbl_sumber_info',['id_survei' => $id])->result();
			$info2 = $this->db->get_where('tbl_gambar_survei',['id_survei' => $id])->result();

			$data = ['title' => "Data Survey",
			'informasi' => $info,
			'kunjungan' => $info2,
			'ct'=> $cetak->row()];
			$this->load->view('survei/cetak-data', $data);
		}
	}

	// survei korban
	public function korban($id){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 4){



			$cetak = $this->db->get_where('tbl_pengajuan',['id_pengaju' => $id]);
			$data = ['title' => "Data Survey",
			'ct'=> $cetak->row(),
			'view' =>'survei/survey-korban'];
			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		if($this->session->userdata('akses') == 1){

			$where = ['id_survei'  => $id];

			$this->crud->delete_data($where,'tbl_survei');
			$this->session->set_flashdata('info',"Berhasil#Data Berhasil Di Hapus#1");
			redirect('survei');
		}

	}


	public function update_status(){
		if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3){

			$id = $this->input->post('id_');
			$status = $this->input->post('status');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$lokasi = $this->input->post('lokasi');
			$komentar = $this->input->post('komentar');


			if($status == '1'){

				$where = ['id_survei'  => $id];
				$update = ['status_berkas' => $status];

				$this->crud->update_data($where,$update,'tbl_survei');
				$this->session->set_flashdata('info',"Berhasil#Data Berhasil Di Update#1");
				redirect('survei');
			}elseif($status == '3'){

				$data = ['nama2' => $nama,
				'alamat2'=> $alamat,
				'tempatkejadian' =>$lokasi];

				$data2=['id_survei' => $id,
				'komentar' => $komentar,
				'status'=>$status,
			];


			$where  = ['id_survei'  => $id];
			$update = ['status_berkas' => $status];

			$this->crud->update_data($where,$update,'tbl_survei');
			$this->crud->insert_data($data,'tbl_pengajuan');
			$this->crud->insert_data($data2,'tbl_acckaper');
			$this->session->set_flashdata('info',"Berhasil#Data Berhasil Di Update#1");
			redirect('survei');



		}elseif($status == '2'){

			$data = ['nama2' => $nama,
			'alamat2'=> $alamat,
			'tempatkejadian' =>$lokasi];


			$where  = ['id_survei'  => $id];
			$update = ['status_berkas' => $status];

			$this->crud->update_data($where,$update,'tbl_survei');
			$this->session->set_flashdata('info',"Berhasil#Data Berhasil Di Update#1");
			redirect('survei');



		}


	}

}

function delete_($id){

	$this->db->where('id_sumber',$id);
	$query = $this->db->get('tbl_sumber_info');
	$row = $query->row();

	unlink("./tandatangan/$row->TandaTangan");

	$this->db->delete('tbl_sumber_info', array('id_sumber' => $id));

	redirect($_SERVER['HTTP_REFERER']);

}

function delete__($id){
	
	$this->db->where('id_gambar_survei',$id);
	$query = $this->db->get('tbl_gambar_survei');
	$row = $query->row();

	unlink("./signature/$row->Gambar");

	$this->db->delete('tbl_gambar_survei', array('id_gambar_survei' => $id));

	redirect($_SERVER['HTTP_REFERER']);

}












}


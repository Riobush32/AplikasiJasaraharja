<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('oklog') != TRUE) {
            redirect('login');
        }
        $this->load->model('M_dashboard', 'dashboard', TRUE);
        
    }

    public function index(){
        if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
            redirect('laporan/pengajuan');
        }
    }

 //cetak pengajuan
    public function pengajuan(){
        if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){

            if (isset($_GET['cari'])) {
                $dari    = date_to_en($this->input->get('dari', true));
                $sampai  = date_to_en($this->input->get('sampai', true));

                //cek tanggal nya, tgl dari harus lebih keci dari tgl sampai
                if (str_replace('-', '', $dari) > str_replace('-', '', $sampai)) {
                    $this->session->set_flashdata('pesan', 'Dari tanggal harus lebih keci dari sampai tanggal');
                    redirect('laporan/barangkeluar/');
                }
                $barang   = $this->dashboard->getLaporanPengajuan($dari, $sampai);
                $judul = "<h5> LAPORAN DATA PENGAJUAN <br/> DARI TANGGAL " . date_to_id($dari) . " S/D " . date_to_id($sampai);
            } else {
                $barang   = [];
                $bkeluar  = [];
                $judul    = '';
            }

            $data = ['title'        => "Laporan Data Pengajuan",
            'barang'       => $barang,
            'judul'        => $judul,
            'view' => 'laporan/v_pengajuan',];
            $this->load->view('template', $data);
        }

    }

    public function cetakpengajuan(){
        if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
            if (isset($_GET['print'])) {
                $dari    = date_to_en($this->input->get('dari', true));
                $sampai  = date_to_en($this->input->get('sampai', true));

                //cek tanggal nya, tgl dari harus lebih keci dari tgl sampai
                if (str_replace('-', '', $dari) > str_replace('-', '', $sampai)) {
                    $this->session->set_flashdata('pesan', 'Dari tanggal harus lebih keci dari sampai tanggal');
                    redirect('laporan/barangkeluar/');
                }
                $barang   = $this->dashboard->getLaporanPengajuan($dari, $sampai);
                $judul = "<h5> LAPORAN DATA PENGAJUAN <br/> DARI TANGGAL " . date_to_id($dari) . " S/D " . date_to_id($sampai);
            } else {
                $barang   = [];
                $bkeluar  = [];
                $judul    = '';
            }

            $data = ['title'        => "Laporan Data Pengajuan",
            'barang'       => $barang,
            'judul'        => $judul,];
            $this->load->view('laporan/cetak-pengajuan', $data);

        }
    }

    //cetak pengajuan
    public function survei(){
        if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
            if (isset($_GET['cari'])) {
                $dari    = date_to_en($this->input->get('dari', true));
                $sampai  = date_to_en($this->input->get('sampai', true));

                //cek tanggal nya, tgl dari harus lebih keci dari tgl sampai
                if (str_replace('-', '', $dari) > str_replace('-', '', $sampai)) {
                    $this->session->set_flashdata('pesan', 'Dari tanggal harus lebih keci dari sampai tanggal');
                    redirect('laporan/survei');
                }
                $barang   = $this->dashboard->getLaporanSurvei($dari, $sampai);
                $judul = "<h5> LAPORAN DATA Survei <br/> DARI TANGGAL " . date_to_id($dari) . " S/D " . date_to_id($sampai);
            } else {
                $barang   = [];
                $bkeluar  = [];
                $judul    = '';
            }

            $data = ['title'        => "Laporan Data Survei",
            'barang'       => $barang,
            'judul'        => $judul,
            'view' => 'laporan/v_survei',];
            $this->load->view('template', $data);

        }
    }

     //cetak pengajuan
    public function cetaksurvei(){
        if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 || $this->session->userdata('akses') == 3 || $this->session->userdata('akses') == 4){
            if (isset($_GET['print'])) {
                $dari    = date_to_en($this->input->get('dari', true));
                $sampai  = date_to_en($this->input->get('sampai', true));

                //cek tanggal nya, tgl dari harus lebih keci dari tgl sampai
                if (str_replace('-', '', $dari) > str_replace('-', '', $sampai)) {
                    $this->session->set_flashdata('pesan', 'Dari tanggal harus lebih keci dari sampai tanggal');
                    redirect('laporan/survei');
                }
                $barang   = $this->dashboard->getLaporanSurvei($dari, $sampai);
                $judul = "<h5> LAPORAN DATA Survei <br/> DARI TANGGAL " . date_to_id($dari) . " S/D " . date_to_id($sampai);
            } else {
                $barang   = [];
                $bkeluar  = [];
                $judul    = '';
            }

            $data = ['title'        => "Laporan Data Survei",
            'barang'       => $barang,
            'judul'        => $judul,
        ];
        $this->load->view('laporan/cetak-survei', $data);
    }
}
}




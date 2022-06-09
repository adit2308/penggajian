<?php

class LaporanPegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong></div>');
            redirect('Welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Laporan Data Pegawai";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/laporanPegawai');
        $this->load->view('templatesAdmin/footer');
    }
    public function cetakDataPegawai()
    {
        $data['title'] = "Cetak Data Pegawai";
        $data['pegawai'] = $this->PenggajianModel->get_data('data_pegawai')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/cetakDataPegawai', $data);
    }
}

<?php

class LaporanJabatan extends CI_Controller
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
        $data['title'] = "Laporan Data Jabatan";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/laporanJabatan');
        $this->load->view('templatesAdmin/footer');
    }
    public function cetakDataJabatan()
    {
        $data['title'] = "Cetak Data Jabatan";
        $data['jabatan'] = $this->PenggajianModel->get_data('data_jabatan')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/cetakDataJabatan', $data);
    }
}

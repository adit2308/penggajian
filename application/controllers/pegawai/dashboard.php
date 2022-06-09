<?php

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong></div>');
            redirect('Welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Dashboard"; //untuk title pada dasboard
        $id = $this->session->userdata('id_pegawai');
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai = '$id'")->result();

        // berfungsi untuk memanggil view, yang berguna untuk menata file url
        $this->load->view('templatesPegawai/header', $data);
        $this->load->view('templatesPegawai/sidebar');
        $this->load->view('Pegawai/dashboard', $data);
        $this->load->view('templatesPegawai/footer');
    }
}

<?php

class Dashboard extends CI_Controller
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
        $data['title'] = "Dashboard"; //untuk title pada dasboard

        $pegawai = $this->db->query("SELECT * FROM data_pegawai"); //berfungsi untuk memanggil data pegawai
        $data['pegawai'] = $pegawai->num_rows(); //berdasarkan baris data pegawai
        $admin = $this->db->query("SELECT * FROM data_pegawai WHERE hak_akses = '1'");
        $data['admin'] = $admin->num_rows();
        $jabatan = $this->db->query("SELECT * FROM data_jabatan");
        $data['jabatan'] = $jabatan->num_rows();
        $absensi = $this->db->query("SELECT * FROM data_absensi");
        $data['absensi'] = $absensi->num_rows();

        $id = $this->session->userdata('id_pegawai');
        $data['saya'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai = '$id'")->result();


        // berfungsi untuk memanggil view, yang berguna untuk menata file url
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templatesAdmin/footer');
    }
}

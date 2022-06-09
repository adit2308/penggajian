<?php
class SlipGaji extends CI_Controller
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
        $data['title'] = "Slip Gaji Pegawai";
        $data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/slipGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function cetakSlipGaji()
    {
        $data['title'] = "Cetak Slip Gaji";
        $nama = $this->input->POST('nama_pegawai');
        $bulan = $this->input->POST('bulan');
        $tahun = $this->input->POST('tahun');
        $bulantahun = $bulan . $tahun;

        $data['print_slip'] = $this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai, 
        data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.tj_transport, data_jabatan.uang_makan,
        data_absensi.alpha FROM data_pegawai
        INNER JOIN data_absensi ON data_absensi.nik = data_pegawai.nik
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan = data_pegawai.jabatan
        WHERE data_absensi.bulan='$bulantahun' AND data_absensi.nama_pegawai='$nama'")->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/cetakSlipGaji', $data);
    }
}

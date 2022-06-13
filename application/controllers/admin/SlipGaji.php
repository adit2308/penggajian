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
        $data['pegawai'] = $this->Penggajian_model->get_data('data_pegawai')->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/filterSlipGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function cetakSlipGaji()
    {
        $data['title'] = 'Cetak Slip Gaji';
        $data['potongan'] = $this->Penggajian_model->get_data('potongan_gaji')->result();
        $nama = $this->input->post('nama_pegawai');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $bulantahun = $bulan . $tahun;

        $data['print_slip'] = $this->db->query("SELECT data_pegawai.nik,data_pegawai.nama_pegawai,
            data_jabatan.nama_jabatan,data_jabatan.gaji_pokok,data_jabatan.tj_transport,data_jabatan.uang_makan,
            data_absensi.tanpa_keterangan,data_absensi.bulan FROM data_pegawai
            INNER JOIN data_absensi ON data_absensi.nik=data_pegawai.nik
            INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
            WHERE data_absensi.bulan='$bulantahun' AND data_absensi.nama_pegawai='$nama'")->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('admin/cetakSlipGaji', $data);
    }
}

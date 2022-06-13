<?php

class DataInputGaji extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Silahkan Login!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
					</button>
				</div>'
            );
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['title'] = "Input Gaji";

        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }

        $data['absensi'] = $this->db->query("SELECT data_absensi.*,data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin, data_pegawai.jabatan
            FROM data_absensi
            INNER JOIN data_pegawai ON data_absensi.nik = data_pegawai.nik
            INNER JOIN data_jabatan ON data_pegawai.jabatan = data_jabatan.nama_jabatan  
            WHERE data_absensi.bulan='$bulantahun'")->result();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataInputGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function inputGajiPegawai()
    {

        if ($this->input->post('submit', TRUE) == 'submit') {

            $post = $this->input->post();

            foreach ($post['bulan'] as $key => $value) {
                if ($post['bulan'][$key] != '' || $post['nik'][$key] != '') {
                    $simpan[] = array(
                        'bulan'                => $post['bulan'][$key],
                        'nik'                  => $post['nik'][$key],
                        'nama_pegawai'        => $post['nama_pegawai'][$key],
                        'jenis_kelamin'        => $post['jenis_kelamin'][$key],
                        'nama_jabatan'         => $post['nama_jabatan'][$key],
                        'tanpa_keterangan'     => $post['tanpa_keterangan'][$key],
                    );
                }
            }

            $this->Penggajian_model->insert_batch('data_absensi', $simpan);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                </button>
            </div>');

            redirect('admin/dataInputGaji');
        }


        $data['tittle'] = "Input Gaji Pegawai";
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
        }
        $data['input_absensi'] = $this->db->query("SELECT data_pegawai.*, data_jabatan.nama_jabatan FROM
            data_pegawai
            INNER JOIN data_jabatan ON data_pegawai.jabatan = data_jabatan.nama_jabatan
            WHERE NOT EXISTS (SELECT * FROM data_absensi WHERE bulan='$bulantahun' AND data_pegawai.nik = data_absensi.nik)
            ORDER BY data_pegawai.nama_pegawai ASC")->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formInputGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }



    public function deleteData($id)
    {
        $where = array('id_absensi' => $id);
        $this->Penggajian_model->delete_data($where, 'data_absensi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/dataAbsensi');
    }
}

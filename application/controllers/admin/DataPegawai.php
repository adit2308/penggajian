<?php

class DataPegawai extends CI_Controller
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
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->PenggajianModel->get_data('data_pegawai')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataPegawai', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Pegawai";
        $data['jabatan'] = $this->PenggajianModel->get_data('data_jabatan')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahPegawai', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $this->tambahData();
        } else {
            $nik            = $this->input->post('nik');
            $nama_pegawai   = $this->input->post('nama_pegawai');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $jabatan        = $this->input->post('jabatan');
            $tanggal_masuk  = $this->input->post('tanggal_masuk');
            $status         = $this->input->post('status');
            $hak_akses         = $this->input->post('hak_akses');
            $username         = $this->input->post('username');
            $password        = $this->input->post('password');


            $data = array(
                'nik'           => $nik,
                'nama_pegawai'  => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan'       => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status'        => $status,
                'hak_akses'        => $hak_akses,
                'username'        => $username,
                'password'        => $password,
            );

            $this->PenggajianModel->insert_data($data, 'data_pegawai');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/dataPegawai');
        }
    }
    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function updateData($id)
    {
        $data['title'] = 'Update Data Pegawai';
        $data['jabatan'] = $this->PenggajianModel->get_data('data_jabatan')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai='$id'")->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdatePegawai', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            redirect('admin/dataPegawai');
        } else {
            $id_pegawai     = $this->input->post('id_pegawai');
            $nik            = $this->input->post('nik');
            $nama_pegawai   = $this->input->post('nama_pegawai');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $jabatan        = $this->input->post('jabatan');
            $tanggal_masuk  = $this->input->post('tanggal_masuk');
            $status         = $this->input->post('status');
            $hak_akses         = $this->input->post('hak_akses');
            $username         = $this->input->post('username');
            $password        = $this->input->post('password');


            $data = array(
                'nik'           => $nik,
                'nama_pegawai'  => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan'       => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status'        => $status,
                'hak_akses'     => $hak_akses,
                'username'      => $username,
                'password'      => $password,
            );

            $where = array(
                'id_pegawai' => $id_pegawai
            );
            // disini kita akan mengupdate data_pegawai, yang dimana data tersebut berasal dari $data=array, sesuai dengan lokasi idnya yaitu $where
            $this->PenggajianModel->update_data('data_pegawai', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong>
            </div>');
            redirect('admin/dataPegawai');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('hak_akses', 'hak akses', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_pegawai' => $id);
        $this->PenggajianModel->delete_data($where, 'data_pegawai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/dataPegawai');
    }
}

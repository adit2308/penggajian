<?php

class DataJabatan extends CI_Controller
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
        $data['title'] = "Data Jabatan";
        $data['jabatan'] = $this->PenggajianModel->get_data('data_jabatan')->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataJabatan', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Jabatan";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/tambahDataJabatan', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $this->tambahData();
        } else {
            $nama_jabatan = $this->input->post('nama_jabatan');
            $gaji_pokok = $this->input->post('gaji_pokok');
            $tj_transport = $this->input->post('tj_transport');
            $uang_makan = $this->input->post('uang_makan');

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama_jabatan' => $nama_jabatan,
                'gaji_pokok' => $gaji_pokok,
                'tj_transport' => $tj_transport,
                'uang_makan' => $uang_makan,
            );

            $this->PenggajianModel->insert_data($data, 'data_jabatan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/dataJabatan');
        }
    }

    public function updateData($id)
    {
        $data['jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Data Jabatan";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/updateDataJabatan', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataJabatan');
        } else {
            $id             = $this->input->post('id_jabatan');
            $nama_jabatan   = $this->input->post('nama_jabatan');
            $gaji_pokok     = $this->input->post('gaji_pokok');
            $tj_transport   = $this->input->post('tj_transport');
            $uang_makan     = $this->input->post('uang_makan');

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama_jabatan' => $nama_jabatan,
                'gaji_pokok' => $gaji_pokok,
                'tj_transport' => $tj_transport,
                'uang_makan' => $uang_makan,
            );
            $where = array(
                'id_jabatan' => $id
            );

            $this->PenggajianModel->update_data('data_jabatan', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataJabatan');
        }
    }

    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function _rules()
    {
        $this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'required');
        $this->form_validation->set_rules('gaji_pokok', 'gaji pokok', 'required');
        $this->form_validation->set_rules('tj_transport', 'tunjangan transportasi', 'required');
        $this->form_validation->set_rules('uang_makan', 'uang makan', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_jabatan' => $id);
        $this->PenggajianModel->delete_data($where, 'data_jabatan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/dataJabatan');
    }
}
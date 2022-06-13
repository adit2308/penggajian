<?php

class DataPortfolio extends CI_Controller
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
        $data['title'] = "Edit Portfolio";

        //Load model
        $this->load->model('Penggajian_model', 'penggajian');

        $data['portfolio'] = $this->penggajian->getAllPortfolio();
        $data['portfolio1'] = $this->penggajian->getAllPortfolio1();
        $data['portfolio2'] = $this->penggajian->getAllPortfolio2();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataPortfolio', $data);
        $this->load->view('templatesAdmin/footer');
    }





    public function updateData1($id)
    {
        $data['portfolio1'] = $this->db->query("SELECT * FROM portfolio1 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Portfolio";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdatePortfolio1', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi1()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Penggajian_model->update_data('portfolio1', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataPortfolio');
        }
    }

    public function updateData2($id)
    {
        $data['portfolio2'] = $this->db->query("SELECT * FROM portfolio2 WHERE id_portfolio='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Edit Portfolio";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdatePortfolio2', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi2()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/dataPortfolio');
        } else {
            $id             = $this->input->post('id_portfolio');
            $nama_portfolio = $this->input->post('nama_portfolio');
            $deskripsi = $this->input->post('deskripsi');
            $content = $this->input->post('content');
            $photo              = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']  = './assets/portfolio';
                $config['allowed_types']  = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'nama_portfolio' => $nama_portfolio,
                'deskripsi' => $deskripsi,
                'content' => $content,
                'photo' => $photo,
            );
            $where = array(
                'id_portfolio' => $id
            );

            $this->Penggajian_model->update_data('portfolio2', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/dataPortfolio');
        }
    }

    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function _rules()
    {
        $this->form_validation->set_rules('nama_portfolio', 'nama portfolio', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskrips', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
    }
}

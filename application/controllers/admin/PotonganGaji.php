<?php

class PotonganGaji extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Potongan Gaji";
        $data['potgaji'] = $this->Penggajian_model->get_data('potongan_gaji')->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/potonganGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }


    public function updateData($id)
    {
        $data['potgaji'] = $this->db->query("SELECT * FROM potongan_gaji WHERE id_potongan='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Jenis Potongan Gaji";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdatePotonganGaji', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation

        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambah_data
            redirect('admin/potonganGaji');
        } else {
            $id             = $this->input->post('id_potongan');
            $potongan = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            //setelah datanya dipanggil dengan method post, lalu disimpan di variable data
            $data = array(
                'potongan' => $potongan,
                'jml_potongan' => $jml_potongan,
            );
            $where = array(
                'id_potongan' => $id
            );

            $this->Penggajian_model->update_data('potongan_gaji', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/potonganGaji');
        }
    }

    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function _rules()
    {
        $this->form_validation->set_rules('potongan', 'jenis potongan', 'required');
        $this->form_validation->set_rules('jml_potongan', 'jumlah potongan', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_potongan' => $id);
        $this->Penggajian_model->delete_data($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/potonganGaji');
    }
}

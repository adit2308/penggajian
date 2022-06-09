<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->_rules();
		//function ini berfungsi untuk melakukan form_validation
		if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke formLogin
			$data['title'] = "Form Login";
			$data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
			$this->load->view('templatesAdmin/header', $data);
			$this->load->view('formLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->penggajianModel->cek_login($username, $password);
			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username Atau Password Salah!</strong></div>');
				redirect('Welcome');
			} else {
				$this->session->set_userdata('hak_akses', $cek->hak_akses); //menyimpan session yang login
				$this->session->set_userdata('nama_pegawai', $cek->nama_pegawai);
				$this->session->set_userdata('id_pegawai', $cek->id_pegawai);

				switch ($cek->hak_akses) {
					case 1:
						redirect('admin/dashboard');
						break;
					case 2:
						redirect('pegawai/dashboard');
						break;
					default:
						break;
				}
			}
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}

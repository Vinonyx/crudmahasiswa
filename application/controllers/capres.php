<?php
defined('BASEPATH') or exit('No direct script access allowed');

class capres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Capres_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Calon Presiden";
        $data['capres'] = $this->Capres_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("capres/vw_capres", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Calon Presiden";
        $data['prodi'] = $this->Capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['capres'] = $this->Capres_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("capres/vw_detail_capres", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Capres_model->delete($id);
        redirect('capres');
    }

    function upload()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayat_penyakit' => $this->input->post('riwayat_penyakit')
        ];
        $this->Capres_model->insert($data);
        redirect('capres');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['capres'] = $this->Capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_ubah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'umur' => $this->input->post('umur'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayat_penyakit' => $this->input->post('riwayat_penyakit')
        ];
        $id = $this->input->post('id');
        $this->Capres_model->update(['id' => $id], $data);
        redirect('capres');
    }
}
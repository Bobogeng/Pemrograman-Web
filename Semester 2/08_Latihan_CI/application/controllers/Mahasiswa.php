<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $mahasiswa = $this->mhs->getAll();
        $data['mahasiswa'] = $mahasiswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model mahasiswa
        $this->load->model('Mahasiswa_model', 'mhs');
        $mahasiswa = $this->mhs->getById($id);
        $data['mahasiswa'] = $mahasiswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }
}

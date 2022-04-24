<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn');
        $dosen = $this->dsn->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        $this->load->model('dosen_model', 'dsn');
        $dosen = $this->dsn->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}

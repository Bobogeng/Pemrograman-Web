<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mtk');
        $matakuliah = $this->mtk->getAll();
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mtk1');
        $this->mtk1->id = 1;
        $this->mtk1->kode = '010001';
        $this->mtk1->nama = 'Pemrograman Web';
        $this->mtk1->sks = '3';
        $this->load->model('matakuliah_model', 'mtk2');
        $this->mtk2->id = 2;
        $this->mtk2->kode = '020001';
        $this->mtk2->nama = 'Jaringan Komputer';
        $this->mtk2->sks = '2';
        $list_mtk = [$this->mtk1, $this->mtk2];
        $data['list_mtk'] = $list_mtk;
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');
    }
}

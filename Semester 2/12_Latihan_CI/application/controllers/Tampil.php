<?php
class Tampil extends CI_Controller {
    public function index()
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $mahasiswa = $this->mhs->getAll();
        $data['mahasiswa'] = $mahasiswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function dosen()
    {
        $this->load->model('Dosen_model', 'dsn');
        $dosen = $this->dsn->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function matkul()
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $matakuliah = $this->mtk->getAll();
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layouts/footer');
    }
}
?>
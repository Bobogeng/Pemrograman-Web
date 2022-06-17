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
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');

        $data = array('nim' => $_nim, 'nama' => $_nama, 'gender' => $_gender, 'tmp_lahir' => $_tmp_lahir, 'tgl_lahir' => $_tgl_lahir, 'ipk' => $_ipk);

        $this->mhs->save($data);

        redirect('mahasiswa', 'refresh');
    }
    public function update($_id)
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');

        $data = array('nim' => $_nim, 'nama' => $_nama, 'gender' => $_gender, 'tmp_lahir' => $_tmp_lahir, 'tgl_lahir' => $_tgl_lahir, 'ipk' => $_ipk, 'id' => $_id);

        $this->mhs->update($data);

        redirect('mahasiswa', 'refresh');
    }
    public function edit($id)
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $checked = 'checked';
        $mahasiswa = $this->mhs->getById($id);
        $data = array('mahasiswa' => $mahasiswa, 'checked' => $checked);
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $data['id'] = $id;
        $this->mhs->delete($data);
        redirect('mahasiswa', 'refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('/login');
        }
    }
    public function upload() {
        $_idmahasiswa = $this->input->post('idmahasiswa');
        $this->load->model('mahasiswa_model', 'mhs');
        $mahasiswa = $this->mhs->getById($_idmahasiswa);
        $data['mahasiswa'] = $mahasiswa;

        $config['upload_path'] = './uploads/photos/mahasiswa';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $mahasiswa->id;

        // menginisialisasi file upload
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }

        // kirim dan render ke detail
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('Dosen_model', 'dsn');
        $dosen = $this->dsn->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        $this->load->model('Dosen_model', 'dsn');
        $dosen = $this->dsn->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('dosen/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Dosen_model', 'dsn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

        $data = array('nama' => $_nama, 'gender' => $_gender, 'tmp_lahir' => $_tmp_lahir, 'tgl_lahir' => $_tgl_lahir, 'nidn' => $_nidn, 'pendidikan' => $_pendidikan);

        $this->dsn->save($data);

        redirect('dosen', 'refresh');
    }
    public function update($_id)
    {
        $this->load->model('Dosen_model', 'dsn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

        $data = array('nama' => $_nama, 'gender' => $_gender, 'tmp_lahir' => $_tmp_lahir, 'tgl_lahir' => $_tgl_lahir, 'nidn' => $_nidn, 'pendidikan' => $_pendidikan, 'id' => $_id);

        $this->dsn->update($data);

        redirect('dosen', 'refresh');
    }
    public function edit($id)
    {
        $this->load->model('Dosen_model', 'dsn');
        $checked = 'checked';
        $dosen = $this->dsn->getById($id);
        $data = array('dosen' => $dosen, 'checked' => $checked);
        $this->load->view('layouts/header');
        $this->load->view('dosen/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Dosen_model', 'dsn');
        $data['id'] = $id;
        $this->dsn->delete($data);
        redirect('dosen', 'refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('/login');
        }
    }
    public function upload() {
        $_iddosen = $this->input->post('iddosen');
        $this->load->model('dosen_model', 'dsn');
        $dosen = $this->dsn->getById($_iddosen);
        $data['dosen'] = $dosen;

        $config['upload_path'] = './uploads/photos/dosen';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $dosen->id;

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
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
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
}

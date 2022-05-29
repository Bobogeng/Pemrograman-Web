<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $matakuliah = $this->mtk->getAll();
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data = array('nama' => $_nama, 'sks' => $_sks, 'kode' => $_kode);

        $this->mtk->save($data);

        redirect('matakuliah', 'refresh');
    }
    public function update($_id)
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data = array('nama' => $_nama, 'sks' => $_sks, 'kode' => $_kode, 'id' => $_id);

        $this->mtk->update($data);

        redirect('matakuliah', 'refresh');
    }
    public function edit($id)
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $checked = 'checked';
        $matakuliah = $this->mtk->getById($id);
        $data = array('matakuliah' => $matakuliah, 'checked' => $checked);
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Matakuliah_model', 'mtk');
        $data['id'] = $id;
        $this->mtk->delete($data);
        redirect('matakuliah', 'refresh');
    }
}

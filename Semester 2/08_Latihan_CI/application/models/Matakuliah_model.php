<?php
class Matakuliah_model extends CI_Model
{
    public $id, $nama, $sks, $kode;
    public function getAll()
    {
        // menampilkan seluruh data yang ada di database
        // menampilkan data berdasarkan id menggunakan class query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
}

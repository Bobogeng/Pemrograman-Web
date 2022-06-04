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
    public function getById($id)
    {
        // Menampilkan data beradasarkan id
        // Menampilkan data beradasarkan id menggunakan class query builder
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
    public function save($data)
    {
        $sql = "INSERT INTO matakuliah (nama, sks, kode) VALUES (?, ?, ?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE matakuliah SET nama=?, sks=?, kode=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data)
    {
        $sql = "DELETE FROM matakuliah WHERE id=?";
        $this->db->query($sql, $data);
    }
}

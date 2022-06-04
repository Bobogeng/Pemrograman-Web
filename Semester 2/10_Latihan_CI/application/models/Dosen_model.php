<?php
class Dosen_model extends CI_Model
{
    public $id, $nidn, $nama, $gender, $pendidikan, $tmp_lahir, $tgl_lahir;
    public function getAll()
    {
        // menampilkan seluruh data yang ada di database
        // menampilkan data berdasarkan id menggunakan class query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id)
    {
        // Menampilkan data beradasarkan id
        // Menampilkan data beradasarkan id menggunakan class query builder
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
    public function save($data)
    {
        $sql = "INSERT INTO dosen (nama, gender, tmp_lahir, tgl_lahir, nidn, pendidikan) VALUES (?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE dosen SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, nidn=?, pendidikan=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data)
    {
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $data);
    }
}

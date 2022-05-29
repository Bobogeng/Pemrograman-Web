<?php
class Mahasiswa_model extends CI_Model
{
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;
    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll()
    {
        // menampilkan seluruh data yang ada di database
        // menampilkan data berdasarkan id menggunakan class query builder
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById($id)
    {
        // Menampilkan data beradasarkan id
        // Menampilkan data beradasarkan id menggunakan class query builder
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }
    public function save($data)
    {
        $sql = "INSERT INTO mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, ipk) VALUES (?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE mahasiswa SET nim=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, ipk=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data)
    {
        $sql = "DELETE FROM mahasiswa WHERE id=?";
        $this->db->query($sql, $data);
    }
}

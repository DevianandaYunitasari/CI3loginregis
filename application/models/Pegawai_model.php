<?php

class Pegawai_model extends CI_model {
    public function getAllPegawai()
    {
        return $this->db->get('f35_user')->result_array();
    }
    public function validateLogin($username, $pass)
    {
        // Gantikan 'users' dengan nama tabel yang sesuai di database Anda
        $query = $this->db->get_where('f35_user', ['username' => $username, 'pass' => $pass]);

        if ($query->num_rows() > 0) {
            return true; // Login berhasil
        } else {
            return false; // Login gagal
        }
    }
    public function searchData($keyword)
    {
        // Lakukan pencarian data pegawai berdasarkan kata kunci
        $this->db->like('nama', $keyword);
        $this->db->or_like('username', $keyword);
        $query = $this->db->get('f35_user');

        return $query->result_array();
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_model extends CI_Model {

    public function saveUser($nama, $username, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
        );

      $this->db->insert('devel_userlog', $data);
    }

}

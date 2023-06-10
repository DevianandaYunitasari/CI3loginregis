<?php

class Home extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model('Pegawai_model');
    }
    public function index()
    {
        $head['title'] = 'Login Page';
        $this->load->view('templates/header', $head);
        $this->load->view('test');
        $this->load->view('templates/footer');
    }
    public function checkLogin()
{
    $username = $this->input->post('username');
    $pass = md5($this->input->post('pass'));

    $isLoginValid = $this->Pegawai_model->validateLogin($username, $pass);

    if ($isLoginValid) {
        echo 'Login berhasil';
    } else {
        echo 'Login gagal';
    }
}
}
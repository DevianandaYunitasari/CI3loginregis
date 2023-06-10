<?php

class Regis extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Regis_model');
    
    }
    public function index()
    {
        $this->load->library('session');
        $data['title'] = 'Registrasi';
 

        // $data['regis'] = $this->Regis_model->getAllRegis();
        $this->load->view('templates/header', $data);
        $this->load->view('regis/index', $data);
        $this->load->view('templates/footer');
        $this->load->model('Regis_model');
    }
    public function registerUser()
    {
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[devel_userlog.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run() == true)
	   	{
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->Regis_model->saveUser($nama, $username, $password,);
    $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
    redirect('home');
}
else
{
    $this->session->set_flashdata('error', validation_errors());
    redirect('register');
}
}
}
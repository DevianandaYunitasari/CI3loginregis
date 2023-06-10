<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getAllPegawai();
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {
        $keyword = $this->input->get('keyword'); // Mengambil kata kunci pencarian dari query string

        // Panggil model untuk melakukan pencarian data
        $data['pegawai'] = $this->Pegawai_model->searchData($keyword);

        $data['title'] = 'Hasil Pencarian';
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'agus';
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('utama/main', $data);
        // $this->load->view('templates/footer');
    }
}

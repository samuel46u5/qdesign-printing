<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('admin/index', $data);
        // $this->load->view('templates/footer');
    }
}

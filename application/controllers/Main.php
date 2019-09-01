<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function home()
    {

        $data['title'] = 'agus';
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('FrontEnd/main', $data);
        // $this->load->view('templates/footer');
    }

    public function refresh_menu()
    {
        $this->load->view('Dashboard/menu');
    }
}

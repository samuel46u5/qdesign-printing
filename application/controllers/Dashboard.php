<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array());
        $this->load->database();
    }

    function index()
    {
        redirect('d/Home');
    }
}

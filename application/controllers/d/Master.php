<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('master_model'));
    }

    public function customer()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Master';
        $data['subtitle'] = 'Customer';
        // agar menyala di menu

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['customer'] = $this->master_model->get_Customer();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/master/customer', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function KategoriMesin()
    { }
}

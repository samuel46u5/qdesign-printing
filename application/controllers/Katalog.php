<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //ini cukup dipangil sekali Master_Model
        // $this->load->model('Master_Model');
        is_logged_in();
    }
    public function kategori()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Katalog';
        $data['subtitle'] = 'Kategori';
        // agak menyala di menu
        // die;

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('katalog/kategori', $data);
        $this->load->view('templates/footer');
    }
}

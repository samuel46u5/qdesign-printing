<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    //untuk proteksi agar user tidak bisa masuk sembaranagan sebelum login
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    //untuk proteksi agar user tidak bisa masuk sembaranagan sebelum login


    public function index()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Dashboard';
        // agak menyala di menu


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('adm_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function menu()
    {
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // echo 'selamat datang ' . $data['user']['nama'];

        $data['menu'] = $this->db->get('adm_menu')->result_array();

        // menganti error message , custome error message
        $this->form_validation->set_message('required', 'Menu harus diisi');

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            //tambah data menu
            $this->db->insert('adm_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', 'Menu berhasil ditambah');
            redirect('admin/menu');
        }
    }
}

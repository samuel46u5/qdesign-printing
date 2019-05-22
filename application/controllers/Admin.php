<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     //ini cukup dipangil sekali Master_Model
    //     // $this->load->model('Menu_Model');
    //     is_logged_in();
    // }
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
        // die;

        $data['menu'] = $this->db->get('adm_menu')->result_array();

        // menganti error message , custome error message
        $this->form_validation->set_message('required', 'Menu harus diisi');
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer');
        } else {
            //tambah data menu
            $data = [
                'menu' => $this->input->post('menu'),
                'icon' => $this->input->post('icon')
            ];

            $this->db->insert('adm_menu', $data);
            $this->session->set_flashdata('message', 'Menu berhasil ditambah');

            redirect('admin/menu');
        }
    }

    public function delete_menu()
    {

        $id = $this->input->get('id');
        $menu = $this->input->get('menu');
        // var_dump($id);
        // die;
        $where = array('id' => $id);
        $dihapus = $this->Menu_Model->delete_data('adm_menu', $where);
        if ($dihapus >= 1) {
            // helper_log('Data supplier dengan ID "' . $id_supplier . '" telah dihapus');
            $this->session->set_flashdata('message', 'Menu ' . $menu . ' berhasil dihapus');
            redirect(base_url('admin/menu'));
        } else {
            $this->session->set_flashdata('message', 'Menu ' . $menu . ' gagal dihapus');
        }
    }
}

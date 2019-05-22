<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //ini cukup dipangil sekali Master_Model
        $this->load->model('Admin_Model');
        is_logged_in();
    }
    public function index()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Dashboard';
        // agak menyala di menu


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function submenu()
    {
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Sub Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // echo 'selamat datang ' . $data['user']['nama'];
        // die;

        $data['subMenu'] = $this->Admin_Model->getSubMenu();
        $data['menu'] = $this->db->get('adm_menu')->result_array();


        $this->form_validation->set_rules('title',  'Title',  'required');
        $this->form_validation->set_rules('menu_id',  'Menu',  'required');
        $this->form_validation->set_rules('url',  'URL',  'required');
        $this->form_validation->set_rules('icon',  'Icon',  'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('adm_sub_menu', $data);
            $this->session->set_flashdata('message',  ' <div class="alert alert-danger" role="alert ">new submenu Added </div>');
            redirect('admin/submenu');
        }
    }

    function update_submenu()
    {

        // $this->form_validation->set_rules('title',  'Title',  'required');
        // $this->form_validation->set_rules('menu_id',  'Menu',  'required');
        // $this->form_validation->set_rules('url',  'URL',  'required');
        // $this->form_validation->set_rules('icon',  'Icon',  'required');

        // $this->load->model("Menu_Model");
        $id = $this->input->post('id');
        $menu_id = $this->input->post('menu_id2');
        $title = $this->input->post('title');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $is_active = $this->input->post('is_active2');



        if (is_null($is_active)) {
            $is_active = "0";
        } else $is_active = "1";


        $data = array(
            'id' => $id,
            'menu_id' => $menu_id,
            'title' => $title,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active,
        );

        $where = array(
            'id' => $id
        );
        // helper_log('Data supplier dengan ID "' . $id_supplier . '" telah diubah');
        $this->Menu_Model->update_data($where, $data, 'adm_sub_menu');
        $this->session->set_flashdata('message', 'SubMenu berhasil diubah');
        redirect('admin/submenu');
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
        $dihapus = $this->Admin_Model->delete_data('adm_menu', $where);
        if ($dihapus >= 1) {
            // helper_log('Data supplier dengan ID "' . $id_supplier . '" telah dihapus');
            $this->session->set_flashdata('message', 'Menu ' . $menu . ' berhasil dihapus');
            redirect(base_url('admin/menu'));
        } else {
            $this->session->set_flashdata('message', 'Menu ' . $menu . ' gagal dihapus');
        }
    }

    function update_menu()
    {

        $id = $this->input->post('id2');
        $menu = $this->input->post('menu2');
        $icon = $this->input->post('icon2');
        // var_dump($menu);
        // die;

        $data = array(
            'id' => $id,
            'menu' => $menu,
            'icon' => $icon
        );

        $where = array(
            'id' => $id
        );
        // helper_log('Data supplier dengan ID "' . $id_supplier . '" telah diubah');
        $this->Admin_Model->update_data($where, $data, 'adm_menu');
        $this->session->set_flashdata('message', 'Menu berhasil diubah');
        redirect('admin/menu');
    }
}

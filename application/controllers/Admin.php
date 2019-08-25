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


    public function menu_refresh()
    {
        // $data['title'] = 'Admin';
        // $data['subtitle'] = 'Dashboard';
        // $this->load->view('Dashboard/menu', $data);
    }

    public function index()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Dashboard';
        // agak menyala di menu


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('dashboard/templates/header', $data);
        // $this->load->view('dashboard/templates/sidebar', $data);
        // $this->load->view('dashboard/admin/index', $data);
        // $this->load->view('dashboard/templates/footer');



        // landing page
        $this->load->view('dashboard/home', $data);
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
            // $this->load->view('dashboard/templates/header', $data);
            // $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/admin/submenu', $data, array());
            // $this->load->view('dashboard/templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('adm_sub_menu', $data);
            $this->session->set_flashdata('sukses', 'Data sub menu : ' . $data['title'] . ' berhasil ditambah');
            redirect('admin/submenu');
        }
    }


    public function delete_submenu()   //Created a controller class //
    {

        $id = $this->input->get('id');     //  get the requested in a variable
        $title = $this->input->get('title');

        if ($this->Admin_Model->hapus_subMenu($id)) //send the parameter $id in Managecat  there I have created a function name deleteRecord
        {
            $this->session->set_flashdata('sukses', 'Data sub menu : ' . $title . ' berhasil dihapus');
            redirect('admin/submenu');
        }
    }



    function update_submenu()
    {

        // $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        // $this->form_validation->set_rules('url', 'URL', 'required');
        // $this->form_validation->set_rules('icon', 'Icon', 'required');

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
        $this->Admin_Model->update_data($where, $data, 'adm_sub_menu');
        $this->session->set_flashdata('sukses', 'Sub menu berhasil diubah');
        redirect('dashboard/admin/submenu');
    }


    public function role()
    {
        $data['title'] = 'Admin';
        $data['subtitle'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('adm_role')->result_array();

        // $this->load->view('dashboard/templates/header', $data);
        // $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/admin/role', $data);
        // $this->load->view('dashboard/templates/footer');
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
            // $this->load->view('dashboard/templates/header', $data);
            // $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/admin/menu', $data);
            // $this->load->view('dashboard/templates/footer');
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



    function submenu_ajax()
    {

        // $list = $this->Admin_Model->get_datatables();
        $list = $this->Admin_Model->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->menu_id;
            $row[] = $field->title;
            $row[] = $field->url;
            $row[] = $field->icon;
            $row[] = $field->is_active;




            if ($field->is_active == "1") {
                $row[] = "&nbsp; &nbsp;<span class ='fa fa-check'> </span>";
            } else {
                $row[] = "&nbsp; &nbsp;<span class ='fa fa-ban'> </span>";
            }

            $row[] = "<a id='edit' href='#' data-id=' $field->id' data-toggle='modal' data-target='#ubah-data'><span class='fa fa-edit'></span>&nbsp;</a>";

            // $row[] = "<a id='edit'  data-toggle='modal' data-target='#ubah-data'> <span class='fa fa-edit'></span>&nbsp;</a>" . "<a id='edit'  data-toggle='modal' data-target='#ubah-data'> <span class='fa fa-edit'></span>&nbsp;</a>";



            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Admin_Model->count_all(),
            "recordsFiltered" => $this->Admin_Model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function submenu_ajax1()
    {
        /*Menagkap semua data yang dikirimkan oleh client*/

        /*Sebagai token yang yang dikrimkan oleh client, dan nantinya akan
        server kirimkan balik. Gunanya untuk memastikan bahwa user mengklik paging
        sesuai dengan urutan yang sebenarnya */
        $draw = $_REQUEST['draw'];

        /*Jumlah baris yang akan ditampilkan pada setiap page*/
        $length = $_REQUEST['length'];

        /*Offset yang akan digunakan untuk memberitahu database
        dari baris mana data yang harus ditampilkan untuk masing masing page
        */
        $start = $_REQUEST['start'];

        /*Keyword yang diketikan oleh user pada field pencarian*/
        $search = $_REQUEST['search']["value"];


        /*Menghitung total desa didalam database*/
        $total = $this->db->count_all_results("adm_sub_menu");

        /*Mempersiapkan array tempat kita akan menampung semua data
        yang nantinya akan server kirimkan ke client*/
        $output = array();

        /*Token yang dikrimkan client, akan dikirim balik ke client*/
        $output['draw'] = $draw;

        /*
        $output['recordsTotal'] adalah total data sebelum difilter
        $output['recordsFiltered'] adalah total data ketika difilter
        Biasanya kedua duanya bernilai sama, maka kita assignment
        keduaduanya dengan nilai dari $total
        */
        $output['recordsTotal'] = $output['recordsFiltered'] = $total;

        /*disini nantinya akan memuat data yang akan kita tampilkan
        pada table client*/
        $output['data'] = array();


        /*Jika $search mengandung nilai, berarti user sedang telah
        memasukan keyword didalam filed pencarian*/
        if ($search != "") {
            $this->db->like("title", $search);
        }


        /*Lanjutkan pencarian ke database*/
        $this->db->limit($length, $start);
        /*Urutkan dari alphabet paling terkahir*/
        $this->db->order_by('title', 'DESC');
        $query = $this->db->get('adm_sub_menu');


        /*Ketika dalam mode pencarian, berarti kita harus mengatur kembali nilai
        dari 'recordsTotal' dan 'recordsFiltered' sesuai dengan jumlah baris
        yang mengandung keyword tertentu
        */
        if ($search != "") {
            $this->db->like("title", $search);
            $jum = $this->db->get('adm_sub_menu');
            $output['recordsTotal'] = $output['recordsFiltered'] = $jum->num_rows();
        }


        $nomor_urut = $start + 1;
        foreach ($query->result_array() as $sub_menu) {
            $output['data'][] = array($nomor_urut, $sub_menu['title']);
            $nomor_urut++;
        }

        echo json_encode($output);
    }
}

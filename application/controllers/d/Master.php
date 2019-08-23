<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('master_model'));
        // is_logged_in();
    }

    public function customer()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Master';
        $data['subtitle'] = 'Customer';
        // agar menyala di menu

        $data['jenis_customer'] = $this->master_model->get_Jenis_Customer();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['customer'] = $this->master_model->get_Customer();

        // $this->load->view('dashboard/templates/header', $data);
        // $this->load->view('dashboard/templates/sidebar', $data);
        // $this->load->view('dashboard/master/customer', $data);
        // $this->load->view('dashboard/templates/footer');


        $this->load->view('dashboard/master/customer', $data);
    }

    public function do_upload_customer()
    {
        $data = array(
            'jenis_customer' => htmlspecialchars($this->input->post('jenis_customer')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'kota' => htmlspecialchars($this->input->post('kota')),
            'contact' => htmlspecialchars($this->input->post('contact')),
            'hp' => htmlspecialchars($this->input->post('hp')),
            'email' => htmlspecialchars($this->input->post('email')),
            'aktif' => 1
        );
        // var_dump($data);
        // die;
        $this->master_model->simpan_Customer($data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil ditambahkan');
    }

    function do_update_customer()
    {
        $id = $this->input->post('id_customer');
        $data = array(
            'jenis_customer' => htmlspecialchars($this->input->post('jenis_customer')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'kota' => htmlspecialchars($this->input->post('kota')),
            'contact' => htmlspecialchars($this->input->post('contact')),
            'hp' => htmlspecialchars($this->input->post('hp')),
            'email' => htmlspecialchars($this->input->post('email')),
            'aktif' => htmlspecialchars($this->input->post('aktif'))
        );

        $this->master_model->update_Customer($id, $data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil diubah');
    }


    function do_delete_customer() //hapus data customer
    {
        $id_customer = $this->input->post('id_customer');

        $this->master_model->delete_customer($id_customer);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil dihapus');
    }


    public function KategoriMesin()
    { }
}

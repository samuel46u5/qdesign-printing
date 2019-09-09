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

    function do_update_kategori_mesin()
    {
        $id = $this->input->post('id_kategori');

        $data = array(
            'kategori' => htmlspecialchars($this->input->post('kategori')),
            'aktif' => htmlspecialchars($this->input->post('aktif')),
            'id_mesin_default' => htmlspecialchars($this->input->post('id_mesin_default'))

        );
        // var_dump($data);
        // die;

        $this->master_model->update_kategori_mesin($id, $data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('kategori') . ' berhasil diubah');
    }




    function do_delete_customer() //hapus data customer
    {
        $id_customer = $this->input->post('id_customer');

        $this->master_model->delete_customer($id_customer);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil dihapus');
    }

    function do_delete_kategori_mesin() //hapus data customer
    {
        $id_kategori = $this->input->post('id_kategori');

        $this->master_model->delete_kategori_mesin($id_kategori);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('kategori') . ' berhasil dihapus');
    }


    public function supplier()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Master';
        $data['subtitle'] = 'Supplier';
        // agar menyala di menu


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->master_model->getAllSupplier();

        // $this->load->view('dashboard/templates/header', $data);
        // $this->load->view('dashboard/templates/sidebar', $data);
        // $this->load->view('dashboard/master/customer', $data);
        // $this->load->view('dashboard/templates/footer');


        $this->load->view('dashboard/master/supplier', $data);
    }

    public function do_upload_supplier()
    {
        $data = array(
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
        $this->master_model->simpan_supplier($data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil ditambahkan');
    }

    function do_update_supplier()
    {
        $id = $this->input->post('id_supplier');
        $data = array(
            'nama' => htmlspecialchars($this->input->post('nama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'kota' => htmlspecialchars($this->input->post('kota')),
            'contact' => htmlspecialchars($this->input->post('contact')),
            'hp' => htmlspecialchars($this->input->post('hp')),
            'email' => htmlspecialchars($this->input->post('email')),
            'aktif' => htmlspecialchars($this->input->post('aktif'))
        );

        $this->master_model->update_Supplier($id, $data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil diubah');
    }

    function do_delete_supplier() //hapus data customer
    {
        $id_supplier = $this->input->post('id_supplier');

        $this->master_model->delete_supplier($id_supplier);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama') . ' berhasil dihapus');
    }

    public function Tinta()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Master';
        $data['subtitle'] = 'Tinta';
        // agar menyala di menu


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->master_model->getAllSupplier();
        $data['warna'] = $this->master_model->get_Warna();
        $data['tinta'] = $this->master_model->get_Tinta();

        $this->load->view('dashboard/master/tinta', $data);
    }

    public function do_upload_tinta()
    {
        $data = array(
            'nama_tinta' =>  htmlspecialchars($this->input->post('nama_tinta')),
            'keterangan' =>  htmlspecialchars($this->input->post('keterangan')),
            'id_supplier' =>  htmlspecialchars($this->input->post('id_supplier')),
            'harga_tinta' =>  htmlspecialchars($this->input->post('harga_tinta')),
            'isi' =>  htmlspecialchars($this->input->post('isi')),
            'stok' =>  htmlspecialchars($this->input->post('stok')),
            'hargaml' =>  htmlspecialchars($this->input->post('hargaml')),
            'aktif' =>  '1',
            'hpp' =>  htmlspecialchars($this->input->post('hpp')),
            'id_warna' =>  $this->input->post('id_warna')
        );

        $this->master_model->simpan_tinta($data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama_tina') . ' berhasil ditambahkan');
    }

    function do_update_tinta()
    {
        $id = $this->input->post('id_tinta');

        $data = array(
            'nama_tinta' =>  htmlspecialchars($this->input->post('nama_tinta')),
            'keterangan' =>  htmlspecialchars($this->input->post('keterangan')),
            'id_supplier' =>  htmlspecialchars($this->input->post('id_supplier')),
            'harga_tinta' =>  htmlspecialchars($this->input->post('harga_tinta')),
            'isi' =>  htmlspecialchars($this->input->post('isi')),
            'stok' =>  htmlspecialchars($this->input->post('stok')),
            'hargaml' =>  htmlspecialchars($this->input->post('hargaml')),
            'keterangan' =>  htmlspecialchars($this->input->post('keterangan')),
            'aktif' =>  '1',
            'hpp' =>  htmlspecialchars($this->input->post('hpp')),
            'id_warna' =>  $this->input->post('id_warna')
        );

        $this->master_model->update_tinta($id, $data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama_tinta') . ' berhasil diubah');
    }

    function do_delete_tinta() //hapus data customer
    {
        $id_tinta = $this->input->post('id_tinta');

        $this->master_model->delete_tinta($id_tinta);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('nama_tinta') . ' berhasil dihapus');
    }



    public function KategoriMesin()
    {
        // ini harus diisi sesuai didatabase
        $data['title'] = 'Master';
        $data['subtitle'] = 'Kategori Mesin';
        // agar menyala di menu

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori_mesin'] = $this->master_model->getAllKategoriMesin();
        $data['mesin'] = $this->master_model->get_Mesin();

        $this->load->view('dashboard/master/kategori_mesin', $data);
    }

    public function do_upload_kategori_mesin()
    {
        $data = array(
            'kategori' => htmlspecialchars($this->input->post('kategori')),
            'id_mesin_default' => htmlspecialchars($this->input->post('id_mesin_default')),
            'aktif' => 1
        );
        // var_dump($data);
        // die;
        $this->master_model->simpan_kategori_mesin($data);
        $this->session->set_flashdata('message', 'Data ' . $this->input->post('kategori') . ' berhasil ditambahkan');
    }
}

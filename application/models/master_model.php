<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Bangkok');
class Master_Model extends CI_Model
{

    // public function hapus_supplier($id)
    // {  //query delete from ... where id= ...
    //     $this->load->database();
    //     $this->db->where('id_supplier', $id_supplier);
    //     $this->db->delete('supplier');
    //     return true;
    // }

    // function get_barang($kobar)
    // {
    //     $hsl = $this->db->query("SELECT * FROM tbl_barang where barang_id='$kobar'");
    //     return $hsl;
    // }

    private $db2;

    public function __construct()
    {
        // parent::__construct();
        // $this->db2 = $this->load->database('data_printing', TRUE);
    }

    function get_produk_detail($id)
    {
        $query = "SELECT P.*, B.nama_bahan, D.divisi, B.lebar, B.panjang FROM produk_cetakan AS P Inner Join divisi_mesin AS D ON P.id_divisi_mesin = D.id_divisi_mesin Inner Join bahan_cetakan AS B ON P.id_bahan = B.id_bahan  where id_produk = '$id'";
        // $query = "select * from produk_cetakan where id_produk = '$id'";
        return $this->db->query($query)->row();
    }



    function get_Jenis_Customer()
    {
        $query = "select * from jenis_customer";
        return $this->db->query($query)->result_array();
    }

    function simpan_Customer($data)
    {
        $this->db->insert('customer', $data);
        $this->db->insert_id();
    }

    function simpan_kategori_mesin($data)
    {
        $this->db->insert('kategori_mesin', $data);
        $this->db->insert_id();
    }



    function simpan_tinta($data)
    {
        $this->db->insert('tinta', $data);
        $this->db->insert_id();
    }

    function simpan_supplier($data)
    {
        $this->db->insert('supplier', $data);
        $this->db->insert_id();
    }

    function update_Customer($id, $data)
    {
        $this->db->where('id_customer', $id);
        $this->db->update('customer', $data);
    }

    function update_kategori_mesin($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori_mesin', $data);
    }

    function delete_kategori_mesin($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori_mesin');
    }


    function update_tinta($id, $data)
    {
        $this->db->where('id_tinta', $id);
        $this->db->update('tinta', $data);
    }

    function update_Supplier($id, $data)
    {
        $this->db->where('id_supplier', $id);
        $this->db->update('supplier', $data);
    }

    function delete_customer($id)
    {
        $this->db->where('id_customer', $id);
        $this->db->delete('customer');
    }

    function delete_tinta($id)
    {
        $this->db->where('id_tinta', $id);
        $this->db->delete('tinta');
    }

    function delete_supplier($id)
    {
        $this->db->where('id_supplier', $id);
        $this->db->delete('supplier');
    }


    function get_Customer2()
    {

        $otherdb = $this->load->database('data_printing', TRUE); // the TRUE paramater tells CI that you'd like to return the database object.

        $query = $otherdb->select('*')->get('customer');
        var_dump($query);
        die;

        // $query = "select * from customer";
        // return $this->db2->query($query)->result_array();
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }

    function get_Customer()
    {
        // $query = "select c.*, j.jenis from customer c, jenis_customer j where c.jenis_customer = j.id_jenis_cust";
        $query = "select c.*, j.jenis from customer c, jenis_customer j where c.jenis_customer = j.id_jenis_cust";
        return $this->db->query($query)->result_array();
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }
    function get_produk_cetakan()
    {

        $query = 'SELECT P.*, B.nama_bahan, D.divisi, B.lebar, B.panjang FROM produk_cetakan AS P Inner Join divisi_mesin AS D ON P.id_divisi_mesin = D.id_divisi_mesin Inner Join bahan_cetakan AS B ON P.id_bahan = B.id_bahan';

        return $this->db->query($query)->result_array();
    }

    function get_Divisi_Mesin()
    {
        // $query = 'select * from divisi_mesin';
        $query = "select *,IFNULL( (select nama_mesin from mesin where id_mesin = D.id_mesin_default ) ,' - ') default_mesin from divisi_mesin D";


        return $this->db->query($query)->result_array();
    }

    function get_Mesin()
    {
        $query = 'select * from mesin';

        return $this->db->query($query)->result_array();
    }

    function get_Bahan_cetakan()
    {
        $query = 'SELECT BC.*,S.nama FROM bahan_cetakan AS BC Inner Join supplier AS S ON BC.id_supplier = S.id_supplier';
        return $this->db->query($query)->result_array();
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }
    function get_Tinta()
    {
        $query = 'SELECT T.*, S.nama, W.kode_warna FROM supplier AS S Inner Join tinta AS T ON T.id_supplier = S.id_supplier Inner Join warna AS W ON T.id_warna = W.id_warna';

        return $this->db->query($query)->result_array();
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }
    function get_Warna()
    {

        $query = 'SELECT * from warna';


        return $this->db->query($query)->result_array();
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }


    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_data($tabelname, $where)
    {
        $delete = $this->db->delete($tabelname, $where);
        return $delete;
    }


    //Supplier
    public function getAllSupplier()
    {
        $query = "select * from supplier";
        return $this->db->query($query)->result_array();
    }

    function delete($id)
    {
        $this->db->where("id_supplier", $id);
        $this->db->delete("supplier");
    }



    public function getAllKategoriMesin()
    {
        // $query = "select *,IFNULL( (select nama_mesin from mesin where id_mesin = D.id_mesin_default ) ,' - ') default_mesin from divisi_mesin D";
        $query = "select * from kategori_mesin";
        return $this->db->query($query)->result_array();
    }

    // function getJenisCustomer()
    // {
    //     $query = $this->db->query("SELECT * FROM jenis_customer");
    //     var_dump($query);
    //     die;
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
}

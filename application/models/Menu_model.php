<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Menu_Model extends CI_Model
{
    public function find_menu($id)
    {
        $hasil = $this->db->where('id', $id)
            ->limit(1)
            ->get('adm_menu');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
    public function getSubMenu()
    {
        $query = "SELECT `adm_sub_menu`.* , `adm_menu`.`menu` 
                    FROM `adm_sub_menu` JOIN `adm_menu`
                    ON `adm_sub_menu`.`menu_id` = `adm_menu`.`id`";

        return $this->db->query($query)->result_array();
    }

    public function hapus_subMenu($id)
    {  //query delete from ... where id= ...
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('adm_sub_menu');
        return true;
    }

    public function create($data_menu)
    {
        //queery insert into
        $this->db->insert('product', $data_menu);
    }
    public function hapus($id)
    {  //query delete from ... where id= ...
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('adm_menu');
        return true;
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
}

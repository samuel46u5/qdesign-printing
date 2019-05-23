<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin_Model extends CI_Model
{

    // var $table = 'adm_sub_menu'; //nama tabel dari database
    var $table = 'adm_sub_menu';
    var $column_order = array(null, 'ti', 'title', 'url', 'icon', 'is_active'); //field yang ada di table user
    var $column_search = array('title', 'url'); //field yang diizin untuk pencarian 
    var $order = array('menu_id' => 'asc'); // default order 



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

    public function getSubMenu()
    {
        $query = "SELECT `adm_sub_menu`.* , `adm_menu`.`menu` 
                    FROM `adm_sub_menu` JOIN `adm_menu`
                    ON `adm_sub_menu`.`menu_id` = `adm_menu`.`id`";

        return $this->db->query($query)->result_array();
    }

    // ajax

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
            {
                if ($_POST['search']['value']) // if datatable send POST for search
                    {

                        if ($i === 0) // first loop
                            {
                                $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                                $this->db->like($item, $_POST['search']['value']);
                            } else {
                            $this->db->or_like($item, $_POST['search']['value']);
                        }

                        if (count($this->column_search) - 1 == $i) //last loop
                            $this->db->group_end(); //close bracket
                    }
                $i++;
            }

        if (isset($_POST['order'])) // here order processing
            {
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

<?php

function is_logged_in()
{
    $ci = get_instance();  //untuk memanggil ci didalam wpu helper

    if (!$ci->session->userdata('email')) {
        redirect('auth');
        //kalo belum login
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('adm_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        $userAccess = $ci->db->get_where('adm_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();  //untuk memanggil ci didalam wpu helper

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('adm_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

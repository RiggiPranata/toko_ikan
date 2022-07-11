<?php

class Model_Admin extends CI_Model
{
    function select_menu()
    {
        $this->db->where(array('menu_id' => 1));
        $query = $this->db->get('submenu')->result_array();
        return $query;
    }
}

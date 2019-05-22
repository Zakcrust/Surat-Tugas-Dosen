<?php

class Input_data extends CI_Model
{
    function cek_data_dosen($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function inputData($table,$arr)
    {
        $this->db->insert($table, $arr);
    }
}
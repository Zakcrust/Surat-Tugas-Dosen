<?php

class M_data_dosen extends CI_Model
{
    function cek_data_dosen($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
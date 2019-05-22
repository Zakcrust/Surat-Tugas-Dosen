<?php

class M_data_dosen extends CI_Model
{
    function cek_data_dosen($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function input_data_dosen($nip,$nama)
    {
        $sql = "INSERT INTO 'DATA_DOSEN'('NAMA','PASSWORD') VALUES (null,?,?)";
        $this->db->query($sql,$nip,$nama);
    }
}
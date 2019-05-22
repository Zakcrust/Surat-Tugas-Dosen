<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('DATA_DOSEN');
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

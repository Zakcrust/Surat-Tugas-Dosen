<?php

class M_data extends CI_Model
{
    function tampil_data($table)
    {
        return $this->db->get($table);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }	

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}

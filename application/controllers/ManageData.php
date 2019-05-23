<?php

class ManageData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }


    function edit($id,$column,$table,$view)
    {
        $where = array($column => $id);
        $data[$table] = $this->m_data->edit_data($where, $table)->result();
        $this->load->view($view, $data);
    }

    function hapus( $id, $column, $table, $view)
    {
        $where = array($column => $id);
        $this->m_data->hapus_data($where, $table);
        redirect(base_url($view));
    }

}

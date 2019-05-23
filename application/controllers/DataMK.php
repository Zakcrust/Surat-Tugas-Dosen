<?php

class DataMK extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index()
    {
        $table = 'DATA_MK';
        $data['DATA_MK'] = $this->m_data->tampil_data($table)->result();
        $this->load->view('data_mk', $data);
    }

    function edit($ID_MK)
    {
        $where = array('ID_MK' => $ID_MK);
        $data['DATA_MK'] = $this->m_data->edit_data($where, 'DATA_MK')->result();
        $this->load->view('update_mk', $data);
    }

    function hapus($ID_MK)
    {
        $where = array('ID_MK' => $ID_MK);
        $this->m_data->hapus_data($where, 'DATA_MK');
        redirect(base_url('DataMK'));
    }
}
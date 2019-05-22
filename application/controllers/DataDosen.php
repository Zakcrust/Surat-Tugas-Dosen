<?php

class DataDosen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index()
    {
        $data['DATA_DOSEN'] = $this->m_data->tampil_data()->result();
        $this->load->view('data_dosen', $data);
    }

    function edit()
    {

    }

    function hapus($ID_DOSEN)
    {
        $where = array('ID_DOSEN' => $ID_DOSEN);
        $this->m_data->hapus_data($where, 'DATA_DOSEN');
        redirect(base_url('DataDosen'));
    }
}
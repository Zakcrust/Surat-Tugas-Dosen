<?php

class SearchData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function search()
    {
        $namaDosen = $this->input->post('nama_dosen');
        $query['DATA_DOSEN'] = $this->db->get_where('DATA_DOSEN',$namaDosen);
    }
}

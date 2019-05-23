<?php

class SearchData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        if (!isset($this->session->status)) redirect(base_url("Login"));
    }

    
    function search()
    {
        $namaDosen    = $this->input->post('nama_dosen');
        $data['DATA_DOSEN'] = $this->m_data->search($namaDosen,'NAMA_DOSEN','DATA_DOSEN')->result();
        $this->load->view('search_result',$data);
    }
}

<?php
class ManageData extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        if (!isset($this->session->status)) redirect(base_url("Login"));
    }

    function prosesCetak($ID_DOSEN)
    {
        $where = array('ID_MK' => $ID_DOSEN);
        $data['DATA_DOSEN'] = $this->m_data->edit_data($where,'DATA_DOSEN')->result();

        $this->load->view('input_surat', $data);
        
    }
}

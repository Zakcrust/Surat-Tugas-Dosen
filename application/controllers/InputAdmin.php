<?php

class InputAdmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($this->session->status)) redirect(base_url("Login"));
    }

    function submitData()
    {
        $this->load->model('Input_data');
        $nip = $this->input->post('nip');
        $nama_dosen = $this->input->post('nama_dosen');
        $arr = array (
            'NIP' => $nip,
            'NAMA_DOSEN' => $nama_dosen
        );
        $table = 'DATA_DOSEN';
        $this->Input_data->inputData($table,$arr);
        redirect(base_url('DataDosen'));
    }

}
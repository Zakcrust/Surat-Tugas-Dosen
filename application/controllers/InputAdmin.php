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
        $kode_dosen = $this->input->post('kode_dosen');
        $nidn = $this->input->post('nidn');
        $arr = array (
            'NIP' => $nip,
            'NAMA_DOSEN' => $nama_dosen,
            'KODE_DOSEN' => $kode_dosen,
            'NIDN'       => $nidn
        );
        $table = 'DATA_DOSEN';
        $this->Input_data->inputData($table,$arr);
        redirect(base_url('DataDosen'));
    }

}
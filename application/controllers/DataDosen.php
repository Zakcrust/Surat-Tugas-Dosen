<?php

class DataDosen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        if (!isset($this->session->status)) redirect(base_url("Login"));
    }

    function index()
    {
        $table = 'DATA_DOSEN';
        $data['DATA_DOSEN'] = $this->m_data->tampil_data($table)->result();
        $this->load->view('data_dosen', $data);
    }

    function submitData()
    {
        $nip = $this->input->post('nip');
        $nama_dosen = $this->input->post('nama_dosen');
        $kode_dosen = $this->input->post('kode_dosen');
        $nidn = $this->input->post('nidn');
        $arr = array(
            'NIP' => $nip,
            'NAMA_DOSEN' => $nama_dosen,
            'KODE_DOSEN' => $kode_dosen,
            'NIDN'       => $nidn
        );
        $table = 'DATA_DOSEN';
        $this->m_data->inputData($table, $arr);
        redirect(base_url('DataDosen'));
    }

    function edit($ID_DOSEN)
    {
        $where = array('ID_DOSEN' => $ID_DOSEN);
        $data['DATA_DOSEN'] = $this->m_data->edit_data($where, 'DATA_DOSEN')->result();
        $this->load->view('update_dosen', $data);
    }

    function hapus($ID_DOSEN)
    {
        $where = array('ID_DOSEN' => $ID_DOSEN);
        $this->m_data->hapus_data($where, 'DATA_DOSEN');
        redirect(base_url('DataDosen'));
    }

    function update()
    {
        $id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $namaDosen = $this->input->post('nama_dosen');
        $kode_dosen = $this->input->post('kode_dosen');
        $nidn = $this->input->post('NIDN');
        $data = array(
            'NAMA_DOSEN' => $namaDosen,
            'NIP'        => $nip,
            'KODE_DOSEN' => $kode_dosen,
            'NIDN'       => $nidn
        );

        $where = array(
            'ID_DOSEN' => $id
        );

        $this->m_data->update_data($where, $data, 'DATA_DOSEN');
        redirect(base_url('DataDosen'));
    }
}
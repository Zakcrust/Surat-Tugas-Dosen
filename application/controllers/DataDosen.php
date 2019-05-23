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

        $data = array(
            'NAMA_DOSEN' => $namaDosen,
            'NIP' => $nip,
        );

        $where = array(
            'ID_DOSEN' => $id
        );

        $this->m_data->update_data($where, $data, 'DATA_DOSEN');
        redirect(base_url('DataDosen'));
    }
}
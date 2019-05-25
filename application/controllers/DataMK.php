<?php

class DataMK extends CI_Controller
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
        $table = 'DATA_MK';
        $data['DATA_MK'] = $this->m_data->tampil_data($table)->result();
        $this->load->view('data_mk', $data);
    }

    function edit($ID_MK)
    {
        $where = array('ID_MK' => $ID_MK);
        $data['DATA_DOSEN'] = $this->m_data->tampil_data('DATA_DOSEN')->result();
        $data['DATA_MK'] = $this->m_data->edit_data($where, 'DATA_MK')->result();

        $this->load->view('update_mk', $data);
    }

    function hapus($ID_MK)
    {
        $where = array('ID_MK' => $ID_MK);
        $this->m_data->hapus_data($where, 'DATA_MK');
        redirect(base_url('DataMK'));
    }


    function submitData()
    {
        $this->load->model('Input_data');
        $idDosen = $this->input->post('nama_dosen');
        $namaMK = $this->input->post('nama_mk');
        $jurusan = $this->input->post('jurusan');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $kurikulum = $this->input->post('kurikulum');
        $kelas = $this->input->post('kelas');
        $hari = $this->input->post('hari');
        $jamMulai = $this->input->post('jam_mulai');
        $jamSelesai = $this->input->post('jam_selesai');
        $ruang = $this->input->post('ruang');
        $arr = array(
            'ID_DOSEN' => $idDosen,
            'NAMA_MK' => $namaMK,
            'JURUSAN' => $jurusan,
            'SKS' => $sks,
            'SEMESTER' => $semester,
            'KURIKULUM' => $kurikulum,
            'KELAS'       => $kelas,
            'HARI'        => $hari,
            'JAM_MULAI'   => $jamMulai,
            'JAM_SELESAI' => $jamSelesai,
            'RUANG'       => $ruang
        );
        $table = 'DATA_MK';
        $this->m_data->inputData($table, $arr);
        redirect(base_url('DataMK'));
    }


    function update()
    {
        $id = $this->input->post('id_mk');
        $idDosen = $this->input->post('nama_dosen');
        $namaMK = $this->input->post('nama_mk');
        $jurusan = $this->input->post('jurusan');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $kurikulum = $this->input->post('kurikulum');
        $kelas = $this->input->post('kelas');
        $hari = $this->input->post('hari');
        $jamMulai = $this->input->post('jam_mulai');
        $jamSelesai = $this->input->post('jam_selesai');
        $ruang = $this->input->post('ruang');
        $arr = array(
            'ID_DOSEN' => $idDosen,
            'NAMA_MK' => $namaMK,
            'JURUSAN' => $jurusan,
            'SKS' => $sks,
            'SEMESTER' => $semester,
            'KURIKULUM' => $kurikulum,
            'KELAS'       => $kelas,
            'HARI'        => $hari,
            'JAM_MULAI'   => $jamMulai,
            'JAM_SELESAI' => $jamSelesai,
            'RUANG'       => $ruang
        );

        $where = array(
            'ID_MK' => $id
        );

        $this->m_data->update_data($where, $arr, 'DATA_MK');
        redirect(base_url('DataMK'));
    }

}
<?php
    class InputMK extends CI_Controller
    {

        function submitData()
        {
        $this->load->model('Input_data');
        $idDosen = $this->input->post('nama_dosen');
        $namaMK = $this->input->post('nama_mk');
        $jurusan = $this->input->post('jurusan');
        $sks = $this->input->post('sks');
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
            'KURIKULUM' => $kurikulum,
            'KELAS'       => $kelas,
            'HARI'        => $hari,
            'JAM_MULAI'   => $jamMulai,
            'JAM_SELESAI' => $jamSelesai,
            'RUANG'       => $ruang
        );
        $table = 'DATA_MK';
        $this->Input_data->inputData($table,$arr);
        redirect(base_url('DataMK'));
        }

        function flashInput($admin)
        {
        $this->load->library('session');
        $this->load->helper('url');

        //add flash data 
        $this->session->set_flashdata('adminFlash', $admin);

        //redirect to home page 
        redirect(base_url('main/inputMK'));

        }
        
    }
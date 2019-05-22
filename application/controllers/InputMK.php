<?php
    class InputMK extends CI_Controller
    {

        function submitData()
        {
        $this->load->model('Input_data');
        $namaMK = $this->input->post('nama_mk');
        $jurusan = $this->input->post('jurusan');
        $sks = $this->input->post('sks');
        $kurikulum = $this->input->post('kurikulum');
        $arr = array(
            'NAMA_MK' => $namaMK,
            'JURUSAN' => $jurusan,
            'SKS' => $sks,
            'KURIKULUM' => $kurikulum
        );
        $table = 'DATA_MK';
        $this->Input_data->inputData($table,$arr);
        echo "data berhasil disubmit";
        }
        
    }
<?php

class InputAdmin extends CI_Controller
{
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
        echo "data berhasil disubmit";
    }

}
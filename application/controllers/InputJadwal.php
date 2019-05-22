<?php
class InputJadwal extends CI_Controller
{

    function submitData()
    {
        $this->load->model('Input_data');
        $kelas = $this->input->post('kelas');
        $hari = $this->input->post('hari');
        $jamMulai = $this->input->post('jam_mulai');
        $jamSelesai = $this->input->post('jam_selesai');
        $ruang = $this->input->post('ruang');
        $arr = array(
            'KELAS'       => $kelas,
            'HARI'        => $hari,
            'JAM_MULAI'   => $jamMulai,
            'JAM_SELESAI' => $jamSelesai,
            'RUANG'       => $ruang
        );
        $table = 'DATA_JADWAL';
        $this->Input_data->inputData($table, $arr);
        echo "data berhasil disubmit";
    }
}

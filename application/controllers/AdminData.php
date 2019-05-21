<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminData extends CI_Controller {
    function checkData()
    {
        $nama_dosen = $this->input->post('nama_dosen');
        $periode_kuliah = $this->input->post('periode_kuliah');
    }
}

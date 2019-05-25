<?php
class ManageCetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');

        if (!isset($this->session->status)) redirect(base_url("Login"));
    }

    function prosesCetak($ID_DOSEN)
    {
        $where = array('ID_DOSEN' => $ID_DOSEN);
        $data['DATA_DOSEN'] = $this->m_data->edit_data($where,'DATA_DOSEN')->result();
        
        $this->load->view('input_surat', $data);
    }

    function cetak()
    {
        $idDosen      = $this->input->post('id_dosen');
        $tanggalSurat = $this->input->post('tanggal_surat');
        $periode      = $this->input->post('periode');
        $arr = array (
            'ID_DOSEN'      => $idDosen,
            'TANGGAL_SURAT' => $tanggalSurat,
            'PERIODE'       => $periode
        );
        $where = array ('ID_DOSEN' => $idDosen);
        $data['DATA_MK'] = $this->m_data->edit_data($where,'DATA_MK')->result();
        $data['DATA_DOSEN'] = $this->m_data->edit_data($where, 'DATA_MK')->result();
        $this->load->view('surat',$data);
        
        echo "<script>window.print();</script>";
    }
}

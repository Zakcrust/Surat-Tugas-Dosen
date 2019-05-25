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
        $awalSem      = $this->input->post('awal_sem');
        $akhirSem     = $this->input->post('akhir_sem');
        $akhirSAP     = $this->input->post('akhir_sap');
        $wadek3       = $this->input->post('wadek_3');
        $nipWadek3    = $this->input->post('nip_wadek_3');
        $arr = array (
            'ID_DOSEN'      => $idDosen,
            'TANGGAL_SURAT' => $tanggalSurat,
            'PERIODE'       => $periode,
            'AWAL_SEM'      => $awalSem,
            'AKHIR_SEM'     => $akhirSem,
            'AKHIR_SAP'     => $akhirSAP,
            'WADEK_3'       => $wadek3,
            'NIP_WADEK_3'   => $nipWadek3
        );
        $where = array ('ID_DOSEN' => $idDosen);
        $this->m_data->inputData('DATA_SURAT',$arr);
        $data['DATA_MK'] = $this->m_data->edit_data($where,'DATA_MK')->result();
        $data['DATA_DOSEN'] = $this->m_data->edit_data($where, 'DATA_MK')->result();
        $data['DATA_SURAT'] = $this->db->select("*")->limit(1)->order_by('ID_SURAT', "DESC")->get("DATA_SURAT")->result();
        $this->load->view('surat',$data);
        
        echo "<script>window.print();</script>";
    }
}

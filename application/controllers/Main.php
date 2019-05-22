<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}

	public function mainMenu()
	{
		$this->load->view('main_menu');
    }
    
    public function searchResult()
    {
        $this->load->view('search_result');
    }

    public function reportPage()
    {
        $this->load->view('report_page');
	}
	
	public function cariDosen()
	{
		$this->load->view('cari_dosen');
	}

	public function inputJadwal()
	{
		$this->load->view('input_jadwal');
	}

	public function inputDosen()
	{
		$this->load->view('input_dosen');
	}

	public function inputMK()
	{
		$this->load->view('input_mk');
	}

	public function detailSurat()
	{
		$this->load->view('detail_surat');
	}
	
}

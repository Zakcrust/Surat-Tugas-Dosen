<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        $this->load->library('session');
        $this->load->view('main');
    }

    function flashLogin()
    {
        //Load session library 
        $this->load->library('session');
        $this->load->helper('url');

        //add flash data 
        $this->session->set_flashdata('loginFail', 'Username/password salah');

        //redirect to home page 
        redirect('login');
    }

    function onLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("ADMIN", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url('main/mainMenu'));
        } else {
            $this->flashLogin();
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
<?php

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }


    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->m_login->proses_login($username, $password);
    }
}

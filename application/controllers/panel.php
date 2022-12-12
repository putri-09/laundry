<?php
defined('BASEPATH') or exit('No direct script access allowed');

class panel extends CI_ControLLer
{
    public function index()
    {
        $this->load->view('backend/login');
    }
}

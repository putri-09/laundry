<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Dasboard extends CI_ControLLer
{
    public function index()
    {
        $this->load->view('backend/dashboard');
    }
}

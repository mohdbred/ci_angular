<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function main()
    {
        $this->load->view('dashboard/main');
    }

    public function home()
    {
        $this->load->view('dashboard/home');
    }
}

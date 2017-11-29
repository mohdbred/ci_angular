<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mainview extends CI_Controller {

    public function index() {
        $this->load->view('mainview');
    }

    public function main() {
        $this->load->view('mainview/main');
    }

    public function home() {
        $this->load->view('mainview/home');
    }

    public function get_news_home_data() {
        //Getting Home Data From Helper
        $res = get_news_api_home_data();
        print_r($res);
//        exit;
//        return $res;
    }

}

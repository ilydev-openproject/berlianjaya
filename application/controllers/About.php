<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('agen_model');
        $this->load->model('kota_model');
    }

    public function index()
    {
        $this->load->view('about');
    }
}
        
    /* End of file  About.php */

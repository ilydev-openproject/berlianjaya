<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
    }
    public function index()
    {
        $this->load->view('admin/dashboard');
    }
}
        
    /* End of file  dashboard.php */

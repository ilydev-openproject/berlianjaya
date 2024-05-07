<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('Visitor_model');
    }
    public function index()
    {
        $data['visitor_data'] = $this->Visitor_model->get_visitor_data();
        $data['chart_data'] = $this->Visitor_model->get_data_by_hour();
        $this->load->view('admin/dashboard', $data);
    }
}
        
    /* End of file  dashboard.php */

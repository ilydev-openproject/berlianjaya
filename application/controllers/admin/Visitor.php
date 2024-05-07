<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visitor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model');
    }

    public function index()
    {
        // Tambahkan pengunjung
        $this->Visitor_model->add_visitor();

        // Ambil jumlah total pengunjung
        $data['visitor_count'] = $this->Visitor_model->get_visitor_count();

        // Tampilkan view dengan data jumlah pengunjung
        $this->load->view('visitor_count', $data);
    }
}
        
    /* End of file  Visitor.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Agen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('agen_model');
        $this->load->model('kota_model');
    }

    public function index()
    {
        $data['agen'] = $this->agen_model->get_agen();
        $data['kota'] = $this->kota_model->get_kota();
        $data['perkota'] = $this->kota_model->get_kota();
        // $data['agen_k'] = $this->kota_model->get_agen_by_kota();
        $this->load->view('agen/index.php', $data);
    }
}
        
    /* End of file  Agen.php */

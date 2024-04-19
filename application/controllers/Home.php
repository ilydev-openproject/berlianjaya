<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tiket_model');
        $this->load->model('agen_model');
    }

    public function index()
    {
        $data['kota'] = $this->tiket_model->get_kota();
        // $data['daerah'] = $this->tiket_model->get_daerah();
        $this->load->view('index.php', $data);
    }

    public function landing()
    {
        // Ambil data dari form
        $asal_id = $this->input->get('asal');
        $tujuan_id = $this->input->get('tujuan');
        $tanggal = $this->input->get('tanggal');

        // Ambil data kota untuk asal dan tujuan
        $data_kota = $this->tiket_model->get_kota_by_id_multiple($asal_id, $tujuan_id);

        // Data kota asal dan tujuan
        $data['asal'] = $data_kota['asal'];
        $data['tujuan'] = $data_kota['tujuan'];
        $data['tanggal'] = $tanggal;

        // Ambil daerah asal dan tujuan dari form
        $daerah_asal_id = $this->input->get('daerah_asal');
        $daerah_tujuan_id = $this->input->get('daerah_tujuan');

        // Jika daerah asal dan tujuan sama, kirimkan pesan error
        if ($daerah_asal_id == $daerah_tujuan_id) {
            $data['error_message'] = 'Daerah asal dan tujuan tidak boleh sama';
        }

        // Data daerah asal dan tujuan
        $data['daerah_asal'] = $daerah_asal_id;
        $data['daerah_tujuan'] = $daerah_tujuan_id;

        $data['agen'] = $this->agen_model->get_agen_by_kota($asal_id);
        $data['kota'] = $this->tiket_model->get_kota();
        $data['kelas'] = $this->tiket_model->get_kelas();

        // Load view
        $this->load->view('agen/landing', $data);
    }
}
        
    /* End of file  Weton.php */

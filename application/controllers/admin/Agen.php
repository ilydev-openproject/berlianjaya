<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Agen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('agen_model');
    }

    public function index()
    {
        $data['agen'] = $this->agen_model->get_agen();
        $this->load->view('admin/agen/index', $data);
    }

    public function add()
    {
        $data['kota'] = $this->agen_model->get_kota();
        $this->load->view('admin/agen/add', $data);
    }

    public function add_process()
    {
        $post = $this->input->post();
        $data = [
            'nama_agen' =>  $post['nama_agen'],
            'id_kota' =>  $post['id_kota'],
            'titik' =>  $post['titik'],
            'wa' =>  $post['wa'],
        ];

        if (!empty($_FILES['foto_agen']['name'])) {

            $config['file_name'] = 'agen-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/agen/foto-agen/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_agen')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_agen'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    // if (file_exists("./public/assets/img/agen/foto-agen/" . $post['oldfoto'])) {
                    //     unlink("./public/assets/img/agen/foto-agen/" . $post['oldfoto']);
                    // }
                }
            }
        }

        // Memasukkan data agen
        $this->db->insert('agen', $data);

        $this->session->set_flashdata('success', "Berhasil disimpan");

        redirect('admin/agen');
    }

    public function edit_agen($id_agen)
    {
        $data['agen'] = $this->agen_model->get_agen_by_id($id_agen);
        $data['kota'] = $this->agen_model->get_kota();
        $this->load->view('admin/agen/edit', $data);
    }

    public function edit_process($id_agen)
    {
        $post = $this->input->post();
        $data = [
            'nama_agen' =>  $post['nama_agen'],
            'id_kota' =>  $post['id_kota'],
            'titik' =>  $post['titik'],
            'wa' =>  $post['wa'],
        ];

        if (!empty($_FILES['foto_agen']['name'])) {

            $config['file_name'] = 'agen-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/agen/foto-agen/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_agen')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_agen'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    if (file_exists("./public/assets/img/agen/foto-agen/" . $post['oldfoto'])) {
                        unlink("./public/assets/img/agen/foto-agen/" . $post['oldfoto']);
                    }
                }
            }
        }

        // Memasukkan data agen
        $this->db->where('agen.id_agen', $id_agen);
        $this->db->update('agen', $data);

        $this->session->set_flashdata('success', "Berhasil disimpan");

        redirect('admin/agen');
    }
}
        
    /* End of file  agen1.php */

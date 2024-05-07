<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('testi_model');
    }

    public function index()
    {
        $data['testi'] = $this->testi_model->get_testi();
        $this->load->view('admin/testimoni/index', $data);
    }

    public function add()
    {
        $data['testi'] = $this->testi_model->get_testi();
        $this->load->view('admin/testimoni/add', $data);
    }

    public function add_process()
    {
        $post = $this->input->post();

        $data = array(
            'nama_testi' => $post['nama_testi'],
            'desc_testi' => $post['desc_testi'],
            'rating' => $post['rating'],
        );

        if (!empty($_FILES['foto_testi']['name'])) {

            $config['file_name'] = 'testi-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/testi/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_testi')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_testi'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    // Tambahkan logika untuk menghapus gambar lama jika diperlukan
                }
            } else {
                // Jika upload gagal, tampilkan pesan kesalahan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', "Upload gagal: $error");
                redirect('admin/testimoni/add'); // Redirect kembali ke halaman tambah dengan pesan kesalahan
            }
        }

        $this->db->insert('testimoni', $data);
        $this->session->set_flashdata('s_success', "Testimoni berhasil disimpan");

        redirect('admin/testimoni/');
    }

    public function edit_testi($id_testi)
    {
        $data['testi'] = $this->testi_model->get_testi_by_id($id_testi);
        $this->load->view('admin/testimoni/edit_testi', $data);
    }

    public function edit_process($id_testi)
    {
        $post = $this->input->post();

        $data = array(
            'nama_testi' => $post['nama_testi'],
            'desc_testi' => $post['desc_testi'],
            'rating' => $post['rating'],
        );

        if (!empty($_FILES['foto_testi']['name'])) {

            $config['file_name'] = 'testi-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/testi/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_testi')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_testi'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    if (file_exists("./public/assets/img/testi/" . $post['oldfoto'])) {
                        unlink("./public/assets/img/testi/" . $post['oldfoto']);
                    }
                }
            } else {
                // Jika upload gagal, tampilkan pesan kesalahan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', "Upload gagal: $error");
                redirect('admin/testimoni/add'); // Redirect kembali ke halaman tambah dengan pesan kesalahan
            }
        }

        $this->db->where('id_testimoni', $id_testi);
        $this->db->update('testimoni', $data);
        $this->session->set_flashdata('s_success', "Testimoni berhasil diedit");

        redirect('admin/testimoni/');
    }

    public function del_testi($id_testi)
    {
        $this->db->where('id_testimoni', $id_testi);
        $this->db->delete('testimoni');
        $this->session->set_flashdata('s_success', "Testimoni berhasil di hapus");

        redirect('admin/testimoni');
    }
}
        
    /* End of file  Testimoni.php */

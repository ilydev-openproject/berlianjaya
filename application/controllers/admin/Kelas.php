<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('kelas_model');
    }

    public function index()
    {
        $data['kelas'] = $this->kelas_model->get_kelas();
        $this->load->view('admin/kelas/index', $data);
    }

    public function add()
    {
        $this->load->view('admin/kelas/add');
    }

    public function add_process()
    {
        $post = $this->input->post();
        $data = array(
            'nama_kelas' => $post['nama_kelas'],
            'jumlah_seat' => $post['jumlah_seat'],
            'fasilitas' => $post['fasilitas'],
        );

        $this->db->insert('kelas', $data);
        $this->session->set_flashdata('s_success', "Berhasil disimpan");

        redirect('admin/kelas/add');
    }


    public function edit($id_kelas)
    {
        $data['kelas'] = $this->kelas_model->get_kelas_by_id($id_kelas);
        $this->load->view('admin/kelas/edit', $data);
    }

    public function edit_process()
    {
        $post = $this->input->post();
        $data = array(
            'nama_kelas' => $post['nama_kelas'],
            'jumlah_seat' => $post['jumlah_seat'],
            'fasilitas' => $post['fasilitas'],
            'id_kelas' => $post['id_kelas'],
        );

        $this->db->where('id_kelas', $post['id_kelas']);
        $this->db->Update('kelas', $data);
        $this->session->set_flashdata('s_success', "Berhasil diedit");


        redirect('admin/kelas/');
    }

    public function del($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas');
        $this->session->set_flashdata('s_success', "Berhasil dihapus");

        redirect('admin/kelas');
    }
}
        
    /* End of file  kelas.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('pos_model');
    }

    public function index()
    {
        $data['pos'] = $this->pos_model->get_pos();
        $this->load->view('admin/pos/index', $data);
    }

    public function add()
    {
        $data['daerah'] = $this->pos_model->get_daerah();
        $this->load->view('admin/pos/add', $data);
    }

    public function add_process()
    {
        $post = $this->input->post();
        $data = array(
            'nama_pos' => $post['nama_pos'],
            'kota' => $post['kota'],
            'titik' => $post['titik'],
            'id_daerah' => $post['id_daerah'],
        );

        $this->db->insert('pos', $data);
        $this->session->set_flashdata('s_success', "Berhasil disimpan");

        redirect('admin/pos/add');
    }


    public function edit($id_pos)
    {
        $data['pos'] = $this->pos_model->get_pos_by_id($id_pos);
        $data['daerah'] = $this->pos_model->get_daerah();
        $this->load->view('admin/pos/edit', $data);
    }

    public function edit_process()
    {
        $post = $this->input->post();
        $data = array(
            'nama_pos' => $post['nama_pos'],
            'jumlah_seat' => $post['jumlah_seat'],
            'fasilitas' => $post['fasilitas'],
            'id_pos' => $post['id_pos'],
        );

        $this->db->where('id_pos', $post['id_pos']);
        $this->db->Update('pos', $data);
        $this->session->set_flashdata('s_success', "Berhasil diedit");


        redirect('admin/pos/');
    }

    public function del($id_pos)
    {
        $this->db->where('id_pos', $id_pos);
        $this->db->delete('pos');
        $this->session->set_flashdata('s_success', "Berhasil dihapus");

        redirect('admin/pos');
    }
}
        
    /* End of file  pos.php */

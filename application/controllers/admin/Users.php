<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('user_model');
    }
    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('admin/users/index', $data);
    }

    public function add()
    {
        $data['role'] = $this->user_model->get_role();
        $this->load->view('admin/users/add', $data);
    }

    public function add_process()
    {
        $post = $this->input->post();
        $data = array(
            'username' => $post['username'],
            'password' => $post['password'],
            'nama_user' => $post['nama_user'],
            'id_role' => $post['id_role'],
        );

        $this->db->insert('users', $data);
        $this->session->set_flashdata('s_success', "Berhasil disimpan");

        redirect('admin/users/add');
    }

    public function edit($id_user)
    {
        $data['role'] = $this->user_model->get_role();
        $data['user'] = $this->user_model->get_users_by_id($id_user);
        $this->load->view('admin/users/edit', $data);
    }

    public function edit_p()
    {
        $data['role'] = $this->user_model->get_role();
        $this->load->view('admin/users/edit_p', $data);
    }

    public function edit_p_process($id_user)
    {
        $post = $this->input->post();
        $data = [
            'nama_user' =>  $post['nama_user'],
            'username' =>  $post['username'],
            'id_role' =>  $post['id_role'],
        ];

        if ($post['password'] != "") {
            $data['password'] = $post['password'];
        }

        if (!empty($_FILES['foto_user']['name'])) {

            $config['file_name'] = 'user-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/user/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_user')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_user'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    if (file_exists("./public/assets/img/user/" . $post['oldfoto'])) {
                        unlink("./public/assets/img/user/" . $post['oldfoto']);
                    }
                }
            }
        }

        // Memasukkan data blog
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);

        $this->session->set_flashdata('success', "Berhasil disimpan");
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url('admin/dashboard');

        redirect($referer);
    }

    public function del_user($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('users');
        $this->session->set_flashdata('s_success', "Berhasil dihapus");

        redirect('admin/users');
    }
}
        
    /* End of file  users.php */

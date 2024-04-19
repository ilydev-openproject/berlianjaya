<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['role'] = $this->user_model->get_role();
        $this->load->view('admin/role/index', $data);
    }

    public function del_role($id_role)
    {
        $this->db->where('id_role', $id_role);
        $this->db->delete('role');

        $this->session->set_flashdata('succes', "Berhasi di hapus");


        redirect('role');
    }
}
        
    /* End of file  role.php */

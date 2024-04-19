<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->session->sess_destroy();
        $this->load->view('admin/auth/login.php');
    }

    public function login_process()
    {
        $username =  $this->input->post('username');
        $password =  $this->input->post('password');

        $user = $this->db->get_where('users', array('username' => $username))->row();
        if ($user) {
            // Verifikasi password
            if ($password === $user->password) {
                // Password cocok, set session
                $userdata = array(
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'status' => 'login', // Perbarui status menjadi 'login'
                    // Tambahkan data lain yang ingin disimpan dalam sesi
                );

                $this->session->set_userdata($userdata);
                // Perbarui nilai status menjadi 'login'
                $this->db->where('id_user', $user->id_user)->update('users', ['status' => 'login']);
                $this->session->set_flashdata('success', 'Berhasil Login');
                redirect('admin/dashboard');
            } else {
                // Password salah, tampilkan pesan error
                $this->session->set_flashdata('error', 'Password Salah');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('error', "Username salah");
            redirect('auth/login');
        }
    }

    public function logout()
    {
        // Perbarui nilai status menjadi 'logout'
        $user_id = $this->session->userdata('id_user');
        $this->db->where('id_user', $user_id)->update('users', ['status' => 'logout']);
        // Hapus semua data dari session
        $this->session->sess_destroy();
        // Redirect ke halaman login setelah logout
        redirect('auth/login');
    }
}
        
    /* End of file  auth.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rute extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_auth();
        $this->load->model('rute_model');
        $this->load->model('kota_model');
    }

    public function index()
    {
        $data['rute'] = $this->rute_model->get_rute();
        $this->load->view('admin/rute/index', $data);
    }

    public function add()
    {
        $data['kelas'] = $this->rute_model->get_kelas();
        $data['pos'] = $this->rute_model->get_pos();
        $this->load->view('admin/rute/add', $data);
    }

    public function add_process()
    {
        $post = $this->input->post();

        $data_rute = array(
            'kode_rute' => $post['kode_rute'],
            'crew' => $post['crew'],
            'sopir1' => $post['sopir1'],
            'sopir2' => $post['sopir2'],
            'nopol' => $post['nopol'],
            'nopol' => $post['nopol'],
            'jadwal' => $post['jadwal'],
            'id_kelas' => $post['id_kelas'],
            'harga' => $post['harga'],
        );

        $this->db->insert('rute', $data_rute);

        // Mengambil ID yang baru saja dimasukkan
        $new_id = $this->db->insert_id();

        // Simpan data pos
        foreach ($post['id_pos'] as $id_pos) {
            $data_pos = array(
                'id_pos' => $id_pos,
                'id_rute' => $new_id,
            );

            $this->db->insert('package_rute', $data_pos);
        }

        $this->session->set_flashdata('s_success', "Berhasil disimpan");
        redirect('admin/rute/');
    }

    public function edit($id_rute)
    {
        $data['kelas'] = $this->rute_model->get_kelas();
        $data['pos'] = $this->rute_model->get_pos();
        $data['rute'] = $this->rute_model->get_rute_by_id($id_rute);
        $data['package'] = $this->rute_model->get_package($id_rute);
        $this->load->view('admin/rute/edit', $data);
    }

    public function edit_process()
    {
        $post = $this->input->post();

        // Pastikan bahwa $post['id_rute'] adalah nilai tunggal
        $id_rute = $post['id_rute'];

        $data_rute = array(
            'kode_rute' => $post['kode_rute'],
            'crew' => $post['crew'],
            'sopir1' => $post['sopir1'],
            'sopir2' => $post['sopir2'],
            'nopol' => $post['nopol'],
            'jadwal' => $post['jadwal'],
            'id_kelas' => $post['id_kelas'],
            'harga' => $post['harga'],
        );

        $this->db->where('id_rute', $id_rute);
        $this->db->update('rute', $data_rute);


        // Hapus data pos sebelumnya untuk id_rute tertentu
        $this->db->where('id_rute', $post['id_rute']);
        $this->db->delete('package_rute');

        // Mengambil ID yang baru saja dimasukkan
        $new_id = $post['id_rute'];
        // Simpan data pos
        foreach ($post['id_pos'] as $id_pos) {
            $data_pos = array(
                'id_pos' => $id_pos,
                'id_rute' => $new_id,
            ); // tambahkan kondisi untuk menentukan baris yang akan di-update
            $this->db->insert('package_rute', $data_pos);
        }

        $this->session->set_flashdata('s_success', "Berhasil disimpan");
        redirect('admin/rute/');
    }

    public function add_kota()
    {
        $data['daerah'] = $this->rute_model->get_daerah();
        $this->load->view('admin/rute/add_kota', $data);
    }

    public function data_kota()
    {
        $data['kota'] = $this->rute_model->get_kota();
        $this->load->view('admin/rute/data_kota', $data);
    }

    public function add_kota_process()
    {
        $post = $this->input->post();

        $data = array(
            'nama_kota' => $post['nama_kota'],
            'id_daerah' => $post['id_daerah'],
        );

        if (!empty($_FILES['foto_kota']['name'])) {

            $config['file_name'] = 'kota-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/kota/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_kota')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_kota'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    // if (file_exists("./public/assets/img/kota/foto-kota/" . $post['oldfoto'])) {
                    //     unlink("./public/assets/img/kota/foto-kota/" . $post['oldfoto']);
                    // }
                }
            }
        }

        $this->db->insert('kota', $data);
        $this->session->set_flashdata('s_success', "Kota berhasil disimpan");

        redirect('admin/rute/data_kota');
    }

    public function check_nama_kota()
    {
        // Ambil data POST dari AJAX request
        $nama_kota = $this->input->post('nama_kota');

        // Lakukan pengecekan langsung di controller
        $kota_exists = $this->db->get_where('kota', array('nama_kota' => $nama_kota))->row();

        // Kirim response ke AJAX
        if ($kota_exists) {
            echo 'exists';
        } else {
            echo 'not_exists';
        }
    }

    public function edit_kota($id_kota)
    {
        $data['kota'] = $this->kota_model->get_kota_by_id($id_kota);
        $data['daerah'] = $this->kota_model->get_daerah();
        $this->load->view('admin/rute/kota_edit', $data);
    }

    public function edit_kota_process($id_kota)
    {
        $post = $this->input->post();
        $data = [
            'nama_kota' =>  $post['nama_kota'],
            'id_daerah' =>  $post['id_daerah'],
            'foto_kota' =>  $post['foto_kota'],
        ];

        if (!empty($_FILES['foto_kota']['name'])) {

            $config['file_name'] = 'kota-' . rand(0, 100) . rand(0, 100) . '-' . date('ymds');
            $config['upload_path'] = './public/assets/img/kota/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_kota')) {
                $file = $this->upload->data();
                $foto = $file['file_name'];
                $data['foto_kota'] = $foto;
                if (!empty($post['oldfoto']) && $post['oldfoto'] !== 'default.jpg') {
                    if (file_exists("./public/assets/img/kota/" . $post['oldfoto'])) {
                        unlink("./public/assets/img/kota/" . $post['oldfoto']);
                    }
                }
            }
        }

        // Memasukkan data agen
        $this->db->where('kota.id_kota', $id_kota);
        $this->db->update('kota', $data);

        $this->session->set_flashdata('success', "Berhasil disimpan");

        redirect('admin/rute/data_kota');
    }


    public function del_kota($id_kota)
    {
        $this->db->where('id_kota', $id_kota);
        $this->db->delete('kota');
        $this->session->set_flashdata('s_success', "Kota berhasil di hapus");

        redirect('admin/rute/data_kota');
    }
}
        
    /* End of file  Rute.php */

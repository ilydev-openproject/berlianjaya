<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    public function add_visitor()
    {
        // Set zona waktu PHP sesuai dengan kebutuhan aplikasi
        date_default_timezone_set('Asia/Jakarta');

        // Sekarang PHP akan menggunakan zona waktu 'Asia/Jakarta' untuk semua operasi waktu

        $this->db->query("SET time_zone = '+07:00'");
        $data = array(
            'visit_date' => date('Y-m-d'),
            'visit_time' => date('G:i:s'), // Format waktu yang benar
        );
        $this->db->insert('visitor', $data);
    }


    public function get_visitor_data()
    {
        $query = $this->db->get('visitor');
        return $query->result_array();
    }

    public function get_data_by_hour()
    {
        // Ambil data jumlah pengunjung berdasarkan jam kunjungan
        $query = $this->db->query("SELECT HOUR(visit_time) AS hour, COUNT(*) AS count FROM visitor GROUP BY HOUR(visit_time)");
        return $query->result_array();
    }
}
                        
/* End of file Visitor.php */

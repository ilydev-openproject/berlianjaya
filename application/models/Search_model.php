<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model
{

    public function searchData($keyword)
    {
        $this->db->like('nama_kota', $keyword); // Sesuaikan field_name dengan nama kolom di tabel database Anda
        $query = $this->db->get('kota'); // Gantilah your_table dengan nama tabel yang digunakan

        return $query->result();
    }
}
                        
/* End of file Search_model.php */

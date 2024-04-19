<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tiket_model extends CI_Model
{

    public function get_kota()
    {
        return $this->db->get('kota')->result_array();
    }

    public function get_kota_by_id($id)
    {
        // Ambil data kota berdasarkan id_kota yang diberikan
        $this->db->where('id_kota', $id);
        return $this->db->get('kota')->row_array();
    }

    public function get_kota_by_id_multiple($id_asal, $id_tujuan)
    {
        // Ambil data kota untuk asal
        $kota_asal = $this->get_kota_by_id($id_asal);

        // Ambil data kota untuk tujuan
        $kota_tujuan = $this->get_kota_by_id($id_tujuan);

        return array('asal' => $kota_asal, 'tujuan' => $kota_tujuan);
    }
    public function get_kelas()
    {
        return $this->db->get('kelas')->result_array();
    }
}
                        
/* End of file tiket_model.php */

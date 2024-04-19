<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Agen_model extends CI_Model
{

    public function get_agen()
    {
        $this->db->select('agen.*, kota.*');
        $this->db->from('agen');
        $this->db->join('kota', 'agen.id_kota = kota.id_kota', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_agen_by_id($id_agen)
    {
        $this->db->select('agen.*, kota.*');
        $this->db->from('agen');
        $this->db->where('agen.id_agen', $id_agen);
        $this->db->join('kota', 'agen.id_kota = kota.id_kota', 'left');
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_agen_by_kota($asal_id)
    {
        $this->db->select('agen.*, kota.*');
        $this->db->from('agen');
        $this->db->where('kota.id_kota', $asal_id);
        $this->db->join('kota', 'agen.id_kota = kota.id_kota', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_kota()
    {
        return $this->db->get('kota')->result_array();
    }
}
                        
/* End of file Agen_model.php */

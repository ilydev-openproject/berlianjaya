<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rute_model extends CI_Model
{

    public function get_rute()
    {
        $this->db->select('rute.*, kelas.*');
        $this->db->from('rute');
        $this->db->join('kelas', 'rute.id_kelas = kelas.id_kelas', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_daerah()
    {
        return $this->db->get('daerah')->result_array();
    }

    public function get_kota()
    {
        $this->db->select('kota.*, daerah.*');
        $this->db->from('kota');
        $this->db->join('daerah', 'daerah.id_daerah = kota.id_daerah', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_rute_by_id($id_rute)
    {
        $this->db->select('rute.*, kelas.*');
        $this->db->from('rute');
        $this->db->where('rute.id_rute', $id_rute);
        $this->db->join('kelas', 'rute.id_kelas = kelas.id_kelas', 'left');
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_kelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function get_pos()
    {
        return $this->db->get('pos')->result_array();
    }

    public function get_package($id_rute)
    {
        $this->db->select(' package_rute.*, pos.*, rute.*');
        $this->db->from('package_rute');
        $this->db->where('package_rute.id_rute', $id_rute);
        $this->db->join('rute', 'package_rute.id_rute = rute.id_rute', 'left');
        $this->db->join('pos', 'package_rute.id_pos = pos.id_pos', 'left');
        $this->db->order_by('id_package', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}
                        
/* End of file Rute_model.php */

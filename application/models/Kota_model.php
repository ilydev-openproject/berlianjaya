<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kota_model extends CI_Model
{

    public function get_kota()
    {
        return $this->db->get('kota')->result_array();
    }

    public function get_kota_by_id($id_kota)
    {
        return $this->db->where('id_kota', $id_kota)->get('kota')->row_array();
    }

    public function get_daerah()
    {
        return $this->db->get('daerah')->result_array();
    }
}
                        
/* End of file Kota_model.php */

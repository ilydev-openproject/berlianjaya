<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

    public function get_kelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function get_kelas_by_id($id_kelas)
    {
        return $this->db->where('kelas.id_kelas', $id_kelas)->get('kelas')->row_array();
    }
}
                        
/* End of file kelas_model.php */

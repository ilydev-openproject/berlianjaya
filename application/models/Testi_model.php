<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testi_model extends CI_Model
{

    public function get_testi()
    {
        return $this->db->get('testimoni')->result_array();
    }

    public function get_testi_by_id($id_testi)
    {
        return $this->db->where('id_testimoni', $id_testi)->get('testimoni')->row_array();
    }
}
                        
/* End of file Testi_model.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pos_model extends CI_Model
{

    public function get_pos()
    {
        $this->db->select('pos.*, daerah.*');
        $this->db->from('pos');
        $this->db->join('daerah', 'daerah.id_daerah = pos.id_daerah', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_pos_by_id($id_pos)
    {
        $this->db->select('pos.*, daerah.*');
        $this->db->from('pos');
        $this->db->join('daerah', 'daerah.id_daerah = pos.id_daerah', 'left');
        $this->db->where('id_pos', $id_pos);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_daerah()
    {
        return $this->db->get('daerah')->result_array();
    }
}
                        
/* End of file pos_model.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{

    public function get_role()
    {
        $this->db->select('users.*, role.*');
        $this->db->from('role');
        $this->db->join('users', 'users.id_role = role.id_role', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }
}
                        
/* End of file role_model.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function get_users()
    {
        $this->db->select('users.*, role.*');
        $this->db->from('users');
        $this->db->join('role', 'users.id_role = role.id_role', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_users_by_id($id_user)
    {
        $this->db->select('users.*, role.*');
        $this->db->from('users');
        $this->db->join('role', 'users.id_role = role.id_role', 'left');
        $this->db->where('users.id_user', $id_user);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get_role()
    {
        return $this->db->get('role')->result_array();
    }
}
                        
/* End of file User_model.php */

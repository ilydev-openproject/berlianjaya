<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    public function insertVisitor($data)
    {
        $this->db->insert('visitor_data', $data);
    }
}
                        
/* End of file Visitor_model.php */

// application/hooks/Visitor_hook.php
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_hook
{
    public function record_visit()
    {
        $CI = &get_instance();
        $CI->load->model('Visitor_model');
        $CI->Visitor_model->add_visitor();
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function index()
    {
        $this->load->view('blog/index');
    }
    public function detail()
    {
        $this->load->view('blog/detail');
    }
}
        
    /* End of file  Blog.php */

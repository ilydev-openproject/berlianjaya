<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

    public function search_tiket()
    {
        $keyword = $this->input->post('keyword'); // Ambil kata kunci dari permintaan POST

        $data['results'] = $this->YourModel->searchData($keyword); // Gantilah YourModel dan searchData dengan model dan method yang sesuai

        // $this->load->view('search_results', $data); // Tampilkan view dengan hasil pencarian
    }
}
        
    /* End of file  search.php */

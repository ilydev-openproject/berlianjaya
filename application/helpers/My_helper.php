<?php
function is_user_logged_in()
{
    $CI = &get_instance();
    $status = $CI->session->userdata('status');

    return $status === 'login';
}

function check_auth_user()
{
    if (!is_user_logged_in()) {
        $CI = &get_instance();
        $CI->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');

        redirect('auth/login');
    }
}

function check_auth()
{
    if (!is_user_logged_in()) {
        $CI = &get_instance();
        // $CI->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
        redirect('auth/login');
    }
}


function user_login()
{
    $ci = &get_instance();
    $id = $ci->session->userdata('id_user');
    $query = $ci->db->select("*")->from("users")->where('id_user', $id)->get();
    return $query->row();
}


if (!function_exists('tgl_id')) {
    function tgl_id($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $pecahkan = explode('-', $tanggal);

        // Ambil tahun
        $tahun = $pecahkan[0];

        // Ambil bulan
        $bulan = $bulan[(int)$pecahkan[1]];

        // Ambil tanggal
        $tanggal = $pecahkan[2];

        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }
}
                        
/* End of file my_helper.php */

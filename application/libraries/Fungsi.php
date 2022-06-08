<?php

class Fungsi
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
        // $this->ci->load->model('menu_model','menu');
    }

    function user_login()
    {
        $this->ci->load->model('menu_model', 'menu');
        $id_user = $this->ci->session->userdata('id');
        $user_data = $this->ci->menu->get($id_user)->row();
        return $user_data;
    }
    // function user_login1(){
    //     $this->ci->load->model('menu_model','menu');
    //     $id_user1 = $this->ci->session->userdata('id');
    //     $user_data1 = $this->ci->menu->getuserkecamatan($id_user1)->row();
    //     return $user_data1;
    // }
}

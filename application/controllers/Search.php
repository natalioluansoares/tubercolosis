<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model', 'menumenu');
    }
    function index()
    {
        $data['title'] = 'Judul Website Rumah Sakit';
        $data['judulwebsite'] = $this->db->get('judulwebsite')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('judulwebsite/sendemail', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kode = $this->input->post('kecamatan');
            $data = $this->menumenu->kodecari($kode);
            echo json_encode($data);
        }
    }
}

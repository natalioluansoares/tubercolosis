
<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('No direct script access allowed');

class Judulwebsite extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('menu_model', 'model');
    }

    public function index()
    {
        $data['title'] = 'Judul Website Rumah Sakit';
        $data['judulwebsite'] = $this->db->get('judulwebsite')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('judulwebsite/judulwebsite', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addjudulwebsite()
    {
        $kecamatan = $this->input->post('kecamatanid');
        $judul = $this->input->post('judul');
        $alamatwebsite = $this->input->post('alamatwebsite');
        $nomorhp = $this->input->post('nomorhp');
        $websiterumahsakit = $this->input->post('websiterumahsakit');
        $alamatemail = $this->input->post('alamatemail');

        $data = [
            'kecamatan' => $kecamatan,
            'judul' => $judul,
            'alamatwebsite' => $alamatwebsite,
            'tlpwebsite' => $nomorhp,
            'websiterumahsakit' => $websiterumahsakit,
            'alamatemail' => $alamatemail
        ];
        $this->db->insert('judulwebsite', $data);
        $this->session->set_flashdata('success', 'Data Judul Website Berhasil Ditambah');
        redirect('judulwebsite');
    }
}

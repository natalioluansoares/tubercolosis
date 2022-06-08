<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelurahan extends CI_Controller
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Kelurahan';
        $data['kelurahan'] = $this->model->getkelurahan();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kelurahan/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addkelurahan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Kelurahan';
        $this->form_validation->set_rules('kecamatan', 'Masukan Nama Kecamatan', 'required');
        $this->form_validation->set_rules('kelurahan', 'Masukan Nama Kelurahan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kelurahan/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kecamatan      = $this->input->post('kecamatan');
            $kelurahan      = $this->input->post('kelurahan');

            $data           = [
                'id_kecamatan'      => $kecamatan,
                'kelurahan'         => $kelurahan
            ];
            $this->db->insert('kelurahan', $data);
            $this->session->set_flashdata('success', 'Data Kelurahan Berhasil Disimpan');
            redirect('kelurahan');
        }
    }
    public function ubahkelurahan()
    {
        $id                        = $this->input->post('idkelurahan');
        $kecamatan                 = $this->input->post('kecamatan');
        $kelurahan                 = $this->input->post('kelurahan');

        $data   = [
            'id'                    => $id,
            'id_kecamatan'          => $kecamatan,
            'kelurahan'             => $kelurahan
        ];
        $this->db->where('id', $id);
        $this->db->update('kelurahan', $data);
        $this->session->set_flashdata('success', 'Data Kelurahan Berhasil Diubah');
        redirect('kelurahan');
    }
}

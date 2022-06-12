<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaranpasien extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        check_not_login();
        // check_admin();
        // check_dokter();
        $this->load->model('menu_model', 'model');
        $this->load->model('model_diagnosa', 'diagnosa');
    }
    public function index()
    {

        $data['title'] = 'Data Pendaftaran Pasien';
        $this->form_validation->set_rules('namadokter', 'Masukan Nama Dokter', 'required');
        $this->form_validation->set_rules('namapasien', 'Masukan Nama Pasien', 'required');
        $this->form_validation->set_rules('nomoreleitoral', 'Masukan Nomor Eleitoral', 'required');
        $this->form_validation->set_rules('umurpasien', 'Masukan Umur Pasien', 'required');
        $this->form_validation->set_rules('alamatpasien', 'Masukan Alamat Pasien', 'required');

        $data['dokter'] = $this->db->get('dokter_perawat_bidan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $namadokter             = $this->input->post('namadokter');
            $namapasien             = $this->input->post('namapasien');
            $jeniskelamin           = $this->input->post('jeniskelamin');
            $tanggallahirpasien        = $this->input->post('tanggallahirpasien');
            $nomoreleitoral         = $this->input->post('nomoreleitoral');
            $umurpasien             = $this->input->post('umurpasien');
            $alamatpasien           = $this->input->post('alamatpasien');

            $data                   = [
                'nama_dokter'      => $namadokter,
                'tanggal_lahir'     => $tanggallahirpasien,
                'namapasien'       => $namapasien,
                'nomor_KTP'        => $nomoreleitoral,
                'umurpasien'       => $umurpasien,
                'jenis_kelamin'    => $jeniskelamin,
                'tgl_diagnosa'     => time('d F Y'),
                'alamatpasien'     => $alamatpasien
            ];
            $this->db->insert('pendafaranpasien', $data);
            $this->session->set_flashdata('success', 'Data Pendaftaran Pasien Berhasil Disimpan');
            redirect('pendaftaranpasien');
        }
    }

    public function detailhasildiagosa()
    {
        $data['title'] = 'Data Diagnosa Pasien';
        $data['dia'] = $this->db->get('hasil_diagnosa_penyakit')->result_array();
        // $data['dia'] = $this->db->get('hasil_diagnosa_penyakit')->result_array();
        // var_dump($data['dia']);
        // die;
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/detaildiagnosa', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function detailhasilpendaftaran()
    {
        $data['title'] = 'Data Pendaftaran Pasien';
        $data['details'] = $this->model->pendaftaranpasie();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/detailpendaftaran', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }


    function upload_file()
    {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'doc|docx|pdf';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('resume')) {
            return $this->upload->data();
        } else {
            return $this->upload->display_errors();
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // check_not_login();
        // check_admin();
        // check_dokter();
        $this->load->model('model_diagnosa', 'model');
        $this->load->model('menu_model', 'modelmodel');
    }
    public function hasildiagnosa()
    {

        $this->model->getuser_gejala();
        $this->model->insertuser_gejala();
        $nama = $this->model->getaturan_hasil_diagnosa_penyakit();

        $usergejala = $this->model->aturan_hasil_diagnosa_penyakit();
        $this->db->insert_batch('aturan_hasil_diagnosa_penyakit', $usergejala);

        $this->model->insertHasil();
        $this->session->set_flashdata('success', 'Data Diagnosa Pasien Berhasil Disimpan');
        redirect('pendaftaranpasien');
    }

    public function relasidiagnosa()
    {
        $data['title'] = 'Data Diagnosa Pasien';
        $data['gejala'] = $this->db->get('gejala')->result_array();
        $data['solusi'] = $this->db->get('solusi')->result_array();
        $data['kabupaten2'] = $this->modelmodel->kabupaten_pasien();
        $data['kabupaten1'] = $this->db->get('kabupaten')->result_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('hasildiagnosapenyakitbc/inputdiagnosapenyakitbc', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    function kecamatan_pasien()
    {
        if ($this->input->post('kabupaten_id')) {
            echo $this->modelmodel->kecamatan_pasien($this->input->post('kabupaten_id'));
        }
    }

    function kelurahan_pasien()
    {
        if ($this->input->post('kecamatan_id')) {
            echo $this->modelmodel->kelurahan_pasien($this->input->post('kecamatan_id'));
        }
    }
    function rumahsakit_pasien()
    {
        if ($this->input->post('kelurahan_id')) {
            echo $this->modelmodel->rumahsakit_pasien($this->input->post('kelurahan_id'));
        }
    }
    function dokter_pasien()
    {
        if ($this->input->post('rumahsakit_id')) {
            echo $this->modelmodel->dokter_pasien($this->input->post('rumahsakit_id'));
        }
    }
    function konsultasi()
    {
        if ($this->input->post('dokter_id')) {
            echo $this->modelmodel->konsultasi($this->input->post('dokter_id'));
        }
    }
    function penyakit()
    {
        if ($this->input->post('konsultasi_id')) {
            echo $this->modelmodel->penyakit($this->input->post('konsultasi_id'));
        }
    }
    function obat()
    {
        if ($this->input->post('penyakit_id[]')) {
            echo $this->modelmodel->obat($this->input->post('penyakit_id[]'));
        }
    }
}
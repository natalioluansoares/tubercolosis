<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relasidiagnosa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_dokter();
        $this->load->model('relasi_D', 'menumenu');
    }
    public function index()
    {
        $data['title'] = 'Data Relasi Diagnosa';
        $data['penyakit'] = $this->db->get('penyakit')->result_array();
        $data['gejala'] = $this->db->get('gejala')->result_array();
        $data['solusi'] = $this->db->get('solusi')->result_array();
        $data['relasidiagnosa'] = $this->menumenu->relasi_diagnosa()->result_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/relasidiagnosa', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addrelasidiagnosa()
    {
        $this->menumenu->addrelasi_diagnosa();
        $this->session->set_flashdata('success', 'Data Relasi Diagnosa Berhasil Di Tambah');
        redirect('relasidiagnosa');
    }
    public function editrelasidiagnosa()
    {
        $this->menumenu->editrelasi_diagnosa();
        $this->session->set_flashdata('success', 'Data Relasi Diagnosa Berhasil Di Ubah');
        redirect('relasidiagnosa');
    }
    function gejala_pasien()
    {
        if ($this->input->post('penyakit_id')) {
            echo $this->menumenu->gejala_pasien($this->input->post('penyakit_id'));
        }
    }

    function solusi_pasien()
    {
        if ($this->input->post('penyakit_id')) {
            echo $this->menumenu->solusi_pasien($this->input->post('penyakit_id'));
        }
    }
    function obat_pasien()
    {
        if ($this->input->post('solusi_id')) {
            echo $this->menumenu->obat_pasien($this->input->post('solusi_id'));
        }
    }
    function keterangan_pasien()
    {
        if ($this->input->post('obat_id')) {
            echo $this->menumenu->keterangan_pasien($this->input->post('obat_id'));
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokterperawatbidan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        check_not_login();
        check_dokter();
        // check_already_login();
        $this->load->model('menu_model', 'dokter');
    }
    public function index()
    {
        $data['title']  = 'Data Dokter & Perawat';
        $data['dokterperawatbidan'] = $this->dokter->getdokterperawatbidan();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['rumahsakit'] = $this->db->get('rumahsakit')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }


    // DATA PENYAKIT
    public function penyakit()
    {
        $data['title']  = 'Data Penyakit';
        $data['penyakit'] = $this->dokter->getpenyakit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/penyakit', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addpenyakit()
    {
        $kodepenyakit      = $this->input->post('kodepenyakit');
        $namapenyakit      = $this->input->post('namapenyakit');

        $data           = [
            'kode_penyakit'             => $kodepenyakit,
            'nama_penyakit'             => $namapenyakit
        ];
        $this->db->insert('penyakit', $data);
        $this->session->set_flashdata('success', 'Data Penyakit Berhasil Di Tambah');
        redirect('dokterperawatbidan/penyakit');
    }

    public function ubahpenyakit()
    {
        $id                     = $this->input->post('idpenyakit');
        $kodepenyakit           = $this->input->post('kodepenyakit');
        $namapenyakit           = $this->input->post('namapenyakit');

        $data           = [
            'id'                        => $id,
            'kode_penyakit'             => $kodepenyakit,
            'nama_penyakit'             => $namapenyakit
        ];
        $this->db->where('id', $id);
        $this->db->update('penyakit', $data);
        $this->session->set_flashdata('success', 'Data Penyakit Berhasil Diubah');
        redirect('dokterperawatbidan/penyakit');
    }
    public function deletepenyakit()
    {
    }

    // DATA GEJALA
    public function gejala()
    {
        $data['title']  = 'Data Gejala';
        $data['gejala'] = $this->dokter->getgejala()->result_array();
        $data['penyakit'] = $this->db->get('penyakit')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/gejala', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addgejala()
    {
        $kodegejala         = $this->input->post('kodegejala');
        $namagejala         = $this->input->post('namagejala');
        $penyakit           = $this->input->post('penyakit');

        $data           = [
            'kodegejala'                => $kodegejala,
            'nama_gejala'               => $namagejala,
            'id_penyakit'               => $penyakit
        ];
        $this->db->insert('gejala', $data);
        $this->session->set_flashdata('success', 'Data Gejala Berhasil Di Tambah');
        redirect('dokterperawatbidan/gejala');
    }
    public function ubahgejala()
    {
        $idgejala           = $this->input->post('idgejala');
        $kodegejala         = $this->input->post('kodegejala');
        $namagejala         = $this->input->post('namagejala');
        $penyakit           = $this->input->post('penyakit');

        $data           = [
            'id'                        => $idgejala,
            'kodegejala'                => $kodegejala,
            'nama_gejala'               => $namagejala,
            'id_penyakit'               => $penyakit
        ];
        $this->db->where('id', $idgejala);
        $this->db->update('gejala', $data);
        $this->session->set_flashdata('success', 'Data Gejala Berhasil Diubah');
        redirect('dokterperawatbidan/gejala');
    }
    public function deletegejala()
    {
    }

    public function solusi()
    {
        $data['title']  = 'Data Solusi';
        $data['solusi'] = $this->dokter->getsolusi();
        $data['penyakit'] = $this->db->get('penyakit')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/solusi', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }

    public function addsolusi()
    {
        $kodesolusi         = $this->input->post('kodesolusi');
        $solusi             = $this->input->post('solusi');
        $namapenyakit         = $this->input->post('namapenyakit');

        $data               = [
            'kodesolusi'                => $kodesolusi,
            'isi_solusi'                => $solusi,
            'id_penyakit'               => $namapenyakit
        ];
        $this->db->insert('solusi', $data);
        $this->session->set_flashdata('success', 'Data Solusi Berhasil Di Tambah');
        redirect('dokterperawatbidan/solusi');
    }
    public function ubahsolusi()
    {
        $idsolusi           = $this->input->post('idsolusi');
        $kodesolusi         = $this->input->post('kodesolusi');
        $solusi             = $this->input->post('solusi');
        $namapenyakit       = $this->input->post('namapenyakit');

        $data               = [
            'id'                        => $idsolusi,
            'kodesolusi'                => $kodesolusi,
            'isi_solusi'                => $solusi,
            'id_penyakit'               => $namapenyakit
        ];
        $this->db->where('id', $idsolusi);
        $this->db->update('solusi', $data);
        $this->session->set_flashdata('success', 'Data Solusi Berhasil Diubah');
        redirect('dokterperawatbidan/solusi');
    }


    // cari Data Kecamatan
    public function caridata()
    {
        if (isset($_GET['term'])) {
            $result = $this->modelke->cari_kecamatan($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $nato[] = $row->kecamatan;
                echo json_decode($nato);
            }
        }
    }

    public function deleterumahsakit()
    {
    }


    public function downloadpasien()
    {
        $this->load->library('mypdf');
        $data['pendaf'] = $this->dokter->download();
        $this->mypdf->generate('Laporan/datapasiendokter', $data);
    }
    public function downloaddiagnosa()
    {
        $data['title'] = 'Download Data Diagnosa Pasien';
        $data['diagnosa'] = $this->dokter->datadiagnosa();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/downloaddiagnosa', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function aturangejala()
    {
        $data['title'] = 'Kirim Email Kepada Dokter';
        $data['geja'] = $this->db->get('gejala')->result_array();
        $data['user_gejala'] = $this->db->get('user_gejala')->result_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/aturan', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function aturan()
    {
        $data = [
            'usergejala'     => $this->input->post('gea')
        ];
        $this->db->insert('user_gejala', $data);
        $this->session->set_flashdata('success', 'Data Pendaftaran Pasien Berhasil Disimpan');
        redirect('dokterperawatbidan/aturan');
    }
    public function hasilpendaftaran()
    {
        $data['title'] = 'Hasil Pendafataran Pasien';
        $data['details'] = $this->dokter->pendaftaranpasie();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/detailpendaftaran', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function hasildiagnosa()
    {
        $data['title'] = 'Hasil Diagnosa Pasien';
        $data['details'] = $this->db->get('hasil_diagnosa_penyakit')->result_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/detaildiagnosa', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
}

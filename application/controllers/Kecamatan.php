<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('menu_model', 'menumenu');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Kecamatan';
        $data['kecamatan'] = $this->menumenu->getkecamatan();
        $data['kabupaten'] = $this->db->get('kabupaten')->result_array();
        $data['sumpenduduk'] = $this->menumenu->sum_kecamatan();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kecamatan/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addkecamatan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kabupaten', 'Masukan Nama Kabupaten', 'required');
        $this->form_validation->set_rules('kecamatan', 'Masukan Nama Kecamatan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kecamatan/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kabupaten                 = $this->input->post('kabupaten');
            $kecamatan                 = $this->input->post('kecamatan');
            $laki                      = $this->input->post('laki');
            $perempuan                 = $this->input->post('perempuan');
            $jumlahpenduduk            = ($laki + $perempuan);

            $data     = [
                'id_kabupaten'      => $kabupaten,
                'kecamatan'         => $kecamatan,
                'jumlah_laki_laki'  => $laki,
                'jumlah_perempuan'  => $perempuan,
                'jumlah_penduduk'   => $jumlahpenduduk
            ];
            $this->db->insert('kecamatan', $data);
            $this->session->set_flashdata('success', 'Data Kecamatan Berhasil Disimpan');
            redirect('kecamatan');
        }
    }
    public function ubahkecamatan()
    {
        $id                        = $this->input->post('idkecamatan');
        $kabupaten                 = $this->input->post('kabupaten');
        $kecamatan                 = $this->input->post('kecamatan');
        $laki                      = $this->input->post('laki');
        $perempuan                 = $this->input->post('perempuan');
        $jumlahpenduduk            = ($laki + $perempuan);

        $data   = [
            'id'                   => $id,
            'id_kabupaten'         => $kabupaten,
            'kecamatan'            => $kecamatan,
            'jumlah_laki_laki'     => $laki,
            'jumlah_perempuan'     => $perempuan,
            'jumlah_penduduk'      => $jumlahpenduduk
        ];
        $this->db->where('id', $id);
        $this->db->update('kecamatan', $data);
        $this->session->set_flashdata('success', 'Data Kecamatan Berhasil Diubah');
        redirect('kecamatan');
    }
}

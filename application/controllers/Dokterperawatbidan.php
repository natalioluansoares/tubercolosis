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
        $this->load->model('kecamatan_m', 'modelke');
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
    public function adddokterperawatbidan()
    {
        $data['title']  = 'Tambah Dokter & Perawat';
        $data['kecamat'] = $this->db->get('kecamatan')->result_array();
        $data['rumahsakit'] = $this->db->get('rumahsakit')->result_array();



        $data['dokter'] = $this->dokter->nato()->result_array();

        $this->form_validation->set_rules('namadokter',     'Masukan Nama Nama dokter',      'required');
        $this->form_validation->set_rules('tanggallahir',   'Masukan Tanggal Lahir Dokter',  'required');
        $this->form_validation->set_rules('umur',           'Masukan Umur Dokter',           'required');
        $this->form_validation->set_rules('nomorhp',        'Masukan Nomor HP Dokter',       'required');
        $this->form_validation->set_rules('alamat',         'Masukan Alamat Dokter',         'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/tambahdokter', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {

            $namadokter             = $this->input->post('namadokter');
            $jeniskelamin           = $this->input->post('jeniskelamin');
            $jenisdokter            = $this->input->post('jenisdokter');
            $tanggallahir           = $this->input->post('tanggallahir');
            $umur                   = $this->input->post('umur');
            $tempattinggal            = $this->input->post('kecamatan');
            $nomorhp                = $this->input->post('nomorhp');
            $rumahsakit             = $this->input->post('rumahsakit');
            $alamat                 = $this->input->post('alamat');

            $data           = [
                'nama_dokter'       => $namadokter,
                'jenis_kelamin'     => $jeniskelamin,
                'jenis_dokter'      => $jenisdokter,
                'tanggal_lahir'     => $tanggallahir,
                'umur'              => $umur,
                'namakecamatan'     => $tempattinggal,
                'nomor_hp'           => $nomorhp,
                'namarumahsakit'   => $rumahsakit,
                'alamat'            => $alamat
            ];
            $this->db->insert('dokter_perawat_bidan', $data);
            $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Ditambah');
            redirect('dokterperawatbidan');
        }
    }
    public function updatedokterperawatbidan($id)
    {

        $data['title']  = 'Update Dokter & Perawat';
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['rumahsakit'] = $this->db->get('rumahsakit')->result_array();
        $data['dokter'] = $this->dokter->getdokter($id)->row_array();
        // $data['dokter'] = $this->db->query("SELECT * FROM dokter_perawat_bidan WHERE id_dopebi='$id'")->row_array();
        // var_dump($data['dokter']);
        // die;
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/editdokter', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {

            $this->prosesdokterperawatbidan();
        }
    }

    public function prosesdokterperawatbidan()
    {

        $this->form_validation->set_rules('namadokter',     'Masukan Nama Nama dokter',      'required');
        $this->form_validation->set_rules('tanggallahir',   'Masukan Tanggal Lahir Dokter',  'required');
        $this->form_validation->set_rules('umur',           'Masukan Umur Dokter',           'required');
        $this->form_validation->set_rules('nomorhp',        'Masukan Nomor HP Dokter',       'required');
        $this->form_validation->set_rules('alamat',         'Masukan Alamat Dokter',         'required');

        $id                     = $this->input->post('idnamadokter');
        $namadokter             = $this->input->post('namadokter');
        $jeniskelamin           = $this->input->post('jeniskelamin');
        $jenisdokter            = $this->input->post('jenisdokter');
        $tanggallahir           = $this->input->post('tanggallahir');
        $umur                   = $this->input->post('umur');
        $tempattinggal          = $this->input->post('kecamatan');
        $nomorhp                = $this->input->post('nomorhp');
        $rumahsakit             = $this->input->post('rumahsakit');
        $alamat                 = $this->input->post('alamat');

        $data           = [
            'id_dopebi'         => $id,
            'nama_dokter'       => $namadokter,
            'jenis_kelamin'     => $jeniskelamin,
            'jenis_dokter'      => $jenisdokter,
            'tanggal_lahir'     => $tanggallahir,
            'umur'              => $umur,
            'namakecamatan'     => $tempattinggal,
            'nomor_hp'          => $nomorhp,
            'namarumahsakit'    => $rumahsakit,
            'alamat'            => $alamat
        ];

        $this->db->where('id_dopebi', $id);
        $this->db->update('dokter_perawat_bidan', $data);
        $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Diubah');
        redirect('dokterperawatbidan');
    }

    public function deletedokterpereawatbidan()
    {
    }
    // DATA JENISOBAT

    public function jenisobat()
    {
        $data['title']  = 'Data Jenis Obat Tubercolosis';
        $data['jenisobat'] = $this->dokter->getjenisobat();
        $data['solusi'] = $this->db->get('solusi')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/jenisobat', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addjenisobat()
    {
        $jenisobat          = $this->input->post('jenisobat');
        $solusi             = $this->input->post('solusi');

        $data           = [
            'nama_obat'              => $jenisobat,
            'id_solusi'              => $solusi
        ];
        $this->db->insert('jenis_obat', $data);
        $this->session->set_flashdata('success', 'Data Jenis Obat Berhasil Ditambah');
        redirect('dokterperawatbidan/jenisobat');
    }

    public function ubahjenisobat()
    {
        $id                    = $this->input->post('idjenisobat');
        $jenisobat             = $this->input->post('jenisobat');
        $solusi             = $this->input->post('solusi');
        $data           = [
            'id'                    => $id,
            'nama_obat'             => $jenisobat,
            'id_solusi'              => $solusi
        ];

        $this->db->where('id', $id);
        $this->db->update('jenis_obat', $data);
        $this->session->set_flashdata('success', 'Data Jenis Obat Berhasil Di Ubah');
        redirect('dokterperawatbidan/jenisobat');
    }
    public function deletejenisobat()
    {
    }
    public function keterangan()
    {
        $data['title']  = 'Data Keterangan Tubercolosis';
        $data['keterangan'] = $this->dokter->getketerangan()->result_array();
        // $data['keterangan'] = $this->db->get('keterangan')->result_array();
        $data['obat'] = $this->db->get('jenis_obat')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/keterangan', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addketerangan()
    {
        $keterangan = $this->input->post('keterangan');
        $obat       = $this->input->post('obat');

        $data       = [
            'keterangan'    => $keterangan,
            'id_obat'       => $obat
        ];
        $this->db->insert('keterangan', $data);
        $this->session->set_flashdata('success', 'Data Keterangan Berhasil Di Tambah');
        redirect('dokterperawatbidan/keterangan');
    }

    public function editketerangan()
    {
        $idketerangan   = $this->input->post('idketerangan');
        $keterangan     = $this->input->post('keterangan');
        $obat           = $this->input->post('obat');
        $data       = [
            'id'            => $idketerangan,
            'keterangan'    => $keterangan,
            'id_obat'       => $obat
        ];
        $this->db->where('id', $idketerangan);
        $this->db->update('keterangan', $data);
        $this->session->set_flashdata('success', 'Data Keterangan Berhasil Di Ubah');
        redirect('dokterperawatbidan/keterangan');
    }
    public function deleteketerangan()
    {
    }

    // DATA KONSULTASI
    public function konsultasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Konsultasi Penyakit';
        $data['konsultasi'] = $this->dokter->getkonsultasi();
        $data['dokter'] = $this->db->get('dokter_perawat_bidan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/konsultasi', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addkonsultasi()
    {
        $konsultasi      = $this->input->post('konsultasi');
        $namadokter      = $this->input->post('namadokter');

        $data           = [
            'nama_konsultasi'       => $konsultasi,
            'id_dokter'             => $namadokter
        ];
        $this->db->insert('konsultasi', $data);
        $this->session->set_flashdata('success', 'Data Konsultasi Berhasil Disimpan');
        redirect('dokterperawatbidan/konsultasi');
    }

    public function ubahkonsultasi()
    {
        $id                     = $this->input->post('idkonsultasi');
        $konsultasi             = $this->input->post('konsultasi');
        $namadokter             = $this->input->post('namadokter');

        $data           = [
            'id'                    => $id,
            'nama_konsultasi'       => $konsultasi,
            'id_dokter'             => $namadokter
        ];

        $this->db->where('id', $id);
        $this->db->update('konsultasi', $data);
        $this->session->set_flashdata('success', 'Data Konsultasi Berhasil Diubah');
        redirect('dokterperawatbidan/konsultasi');
    }

    public function deletekonsultasi()
    {
    }

    // DATA PENYAKIT
    public function penyakit()
    {
        $data['title']  = 'Data Penyakit';
        $data['penyakit'] = $this->dokter->getpenyakit();
        $data['konsultasi'] = $this->db->get('konsultasi')->result_array();

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


    // DATA RUMA SAKIT
    public function rumahsakit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Rumah Sakit';
        $data['rumahsakit'] = $this->dokter->getrumahsakit();
        $data['kelurahan'] = $this->db->get('kelurahan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/rumahsakit', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addrumahsakit()
    {
        $koderumahsakit      = $this->input->post('koderumahsakit');
        $namarumahsakit      = $this->input->post('namarumahsakit');
        $kelurahan           = $this->input->post('kelurahan');

        $data           = [
            'kode_rumahsakit'       => $koderumahsakit,
            'nama_rumahsakit'       => $namarumahsakit,
            'id_kelurahan'          => $kelurahan
        ];
        $this->db->insert('rumahsakit', $data);
        $this->session->set_flashdata('success', 'Data Rumah Sakit Berhasil Di Tambah');
        redirect('dokterperawatbidan/rumahsakit');
    }

    public function ubahrumahsakit()
    {
        $id                  = $this->input->post('idrumahsakit');
        $koderumahsakit      = $this->input->post('koderumahsakit');
        $namarumahsakit      = $this->input->post('namarumahsakit');
        $kelurahan           = $this->input->post('kelurahan');

        $data           = [
            'id'                    => $id,
            'kode_rumahsakit'       => $koderumahsakit,
            'nama_rumahsakit'       => $namarumahsakit,
            'id_kelurahan'          => $kelurahan
        ];

        $this->db->where('id', $id);
        $this->db->update('rumahsakit', $data);
        $this->session->set_flashdata('success', 'Data Rumah Sakit Berhasil Diubah');
        redirect('dokterperawatbidan/rumahsakit');
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

        $data['title'] = 'Download Data Pendaftaran Pasien';
        $data['details'] = $this->dokter->getpendaftaranpasie();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('dokterperawatbidan/detailpendaftaran', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
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
}

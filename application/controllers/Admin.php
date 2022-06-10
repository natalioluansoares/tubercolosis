<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('menu_model', 'model');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Data Register';

        $data['nato'] = $this->db->get('user')->result_array();
        $data['users'] = $this->db->get('user')->row_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }


    // DATA PENYAKIT
    public function penyakit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Penyakit';
        $data['penyakit'] = $this->model->getpenyakit();
        $data['konsultasi'] = $this->db->get('konsultasi')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/penyakit', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }

    // DATA DOKTER PERAWAT BIDAN
    public function dokterperawatbidan()
    {
        $data['title']  = 'Data Dokter & Perawat & Bidan';

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/dokterperawatbidan', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }



    // cari Data Kecamatan
    public function caridata()
    {
        if (isset($_GET['term'])) {
            $result = $this->adminke->cari_kecamatan($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $nato[] = $row->kecamatan;
                echo json_decode($nato);
            }
        }
    }

    public function deletedokterperawatbidan()
    {
    }

    // Download Data Pasien
    public function downloadpasien()
    {

        $data['title'] = 'Download Data Pendaftaran Pasien';
        $data['details'] = $this->model->getpendaftaranpasie();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/detailpendaftaran', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function downloaddiagnosa()
    {
        $data['title'] = 'Download Data Diagnosa Pasien';
        $data['diagnosa'] = $this->model->datadiagnosa();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/downloaddiagnosa', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }

    // Data Registrasi
    public function addregister()
    {
        $data['title'] = 'Tambahkan Data User';

        $this->form_validation->set_rules('lastname', 'Masukkan Last Name Anda', 'required|trim');
        $this->form_validation->set_rules('firstname', 'Masukkan First Name Anda', 'required|trim');
        $this->form_validation->set_rules('username', 'Masukkan Username Anda', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Masukkan Alamat Anda', 'required|trim');
        $this->form_validation->set_rules('email', 'Masukan Email Anda', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email Has Already Registered!'
        ]);

        $this->form_validation->set_rules('password1', ' Masukan Password Anda', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Dont Match!',
            'min_length' => 'Password Too Short!'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password Anda', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/tambahregister', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {

            $lastname           = htmlspecialchars($this->input->post('lastname', true));
            $firstname          = htmlspecialchars($this->input->post('firstname', true));
            $username           = htmlspecialchars($this->input->post('username', true));
            $email              = htmlspecialchars($this->input->post('email', true));
            $password           = sha1($this->input->post('password1'));
            $jeniskelamin       = $this->input->post('jeniskelamin');
            $level              = $this->input->post('level');
            $alamat             = $this->input->post('alamat');

            $data               = [
                'last_name'             => $lastname,
                'first_name'            => $firstname,
                'username'              => $username,
                'email'                 => $email,
                'password'              => $password,
                'jenis_kelamin'         => $jeniskelamin,
                'created_akun'          => time('d F Y'),
                'alamat'                => $alamat,
                'level'                 => $level,
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'Data User Berhasil Di Tambahkan');
            redirect('admin');
        }
    }
    public function editregister($id)
    {
        $data['title'] = 'Update Data ' . ucfirst($this->fungsi->user_login()->level);
        $data['register'] = $this->db->query("SELECT * FROM user WHERE id='$id'")->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/editregister', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $this->prosesregister();
        }
    }
    public function prosesregister()
    {
        $this->form_validation->set_rules('lastname', 'Masukkan Last Name Anda', 'required|trim');
        $this->form_validation->set_rules('firstname', 'Masukkan First Name Anda', 'required|trim');
        $this->form_validation->set_rules('username', 'Masukkan Username Anda', 'required|trim');
        $this->form_validation->set_rules('email', 'Masukan Email Anda', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email Has Already Registered!'
        ]);
        $this->form_validation->set_rules('password', ' Masukan Password Anda', 'required|trim|min_length[3]', [
            'matches' => 'Password Dont Match!',
            'min_length' => 'Password Too Short!'
        ]);
        $iduser              = $this->input->post('iduser');
        $lastname            = htmlspecialchars($this->input->post('lastname', true));
        $firstname           = htmlspecialchars($this->input->post('firstname', true));
        $username            = htmlspecialchars($this->input->post('username', true));
        $email               = htmlspecialchars($this->input->post('email', true));
        $password1           = sha1($this->input->post('password1'));
        $jeniskelamin        = $this->input->post('jeniskelamin');
        $level               = $this->input->post('level');
        $alamat              = $this->input->post('alamat');

        $data           = [
            'id'                    => $iduser,
            'last_name'             => $lastname,
            'first_name'            => $firstname,
            'username'              => $username,
            'email'                 => $email,
            'jenis_kelamin'         => $jeniskelamin,
            'password'              => $password1,
            'alamat'                => $alamat,
            'level'                 => $level,
        ];

        $this->db->where('id', $iduser);
        $this->db->update('user', $data);
        $this->session->set_flashdata('success', 'Data User Berhasil Di Ubah');
        redirect('admin');
    }
    public function changepassword()
    {
        $this->form_validation->set_rules(
            'password',
            'Masukan Password Baru',
            'required|trim|min_length[3]|matches[confpassword]',
            [
                'matches' => 'Password Dont Match!',
                'min_length' => 'Password Too Short!'
            ]
        );
        $this->form_validation->set_rules(
            'confpassword',
            'Masukan Confirm Password Baruu',
            'required|trim|min_length[3]|matches[password]'
        );

        $id             = $this->input->post('iduser');
        $password       = $this->input->post('password');

        $data = [
            'id'              => $id,
            'password'        => sha1($password)
        ];
        //  var_dump($data);
        // die;
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('success', 'Data User Berhasil Diubah');
        redirect('admin');
    }

    public function dokter()
    {
        $data['title']  = 'Data Dokter & Perawat';
        $data['dokter'] = $this->db->get('dokter_perawat_bidan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/dokter', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }

    public function adddokterperawatbidan()
    {
        $data['title']  = 'Tambah Dokter & Perawat';
        $data['dokter'] = $this->db->get('dokter_perawat_bidan')->result_array();

        $this->form_validation->set_rules('namadokter',     'Masukan Nama Nama dokter',      'required');
        $this->form_validation->set_rules('tanggallahir',   'Masukan Tanggal Lahir Dokter',  'required');
        $this->form_validation->set_rules('umur',           'Masukan Umur Dokter',           'required');
        $this->form_validation->set_rules('nomorhp',        'Masukan Nomor HP Dokter',       'required');
        $this->form_validation->set_rules('alamat',         'Masukan Alamat Dokter',         'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/tambahdokter', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {

            $namadokter             = $this->input->post('namadokter');
            $jeniskelamin           = $this->input->post('jeniskelamin');
            $jenisdokter            = $this->input->post('jenisdokter');
            $tanggallahir           = $this->input->post('tanggallahir');
            $umur                   = $this->input->post('umur');
            $nomorhp                = $this->input->post('nomorhp');
            $alamat                 = $this->input->post('alamat');

            $data           = [
                'nama_dokter'       => $namadokter,
                'jenis_kelamin'     => $jeniskelamin,
                'jenis_dokter'      => $jenisdokter,
                'tanggal_lahir'     => $tanggallahir,
                'umur'              => $umur,
                'nomor_hp'           => $nomorhp,
                'alamat'            => $alamat
            ];
            $this->db->insert('dokter_perawat_bidan', $data);
            $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Ditambah');
            redirect('admin/dokter');
        }
    }
    public function updatedokterperawatbidan($id)
    {

        $data['title']  = 'Update Dokter & Perawat';
        $data['dokter'] = $this->db->query("SELECT * FROM dokter_perawat_bidan WHERE id_dopebi='$id'")->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/editdokter', $data);
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
        $nomorhp                = $this->input->post('nomorhp');
        $alamat                 = $this->input->post('alamat');

        $data           = [
            'id_dopebi'         => $id,
            'nama_dokter'       => $namadokter,
            'jenis_kelamin'     => $jeniskelamin,
            'jenis_dokter'      => $jenisdokter,
            'tanggal_lahir'     => $tanggallahir,
            'umur'              => $umur,
            'nomor_hp'          => $nomorhp,
            'alamat'            => $alamat
        ];

        $this->db->where('id_dopebi', $id);
        $this->db->update('dokter_perawat_bidan', $data);
        $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Diubah');
        redirect('admin/dokter');
    }
}

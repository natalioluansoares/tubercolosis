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
        $this->load->model('kecamatan_m', 'adminke');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Data Register';
        if ((isset($_GET['kecamatan']) && $_GET['kecamatan'] != '')) {

            $kecamatan = $_GET['kecamatan'];
            $posto = $kecamatan;
        } else {

            $kecamatan = ('Masukan Kecamatan Anda');
            $posto = $kecamatan;
        }
        $data['nato'] = $this->db->query("SELECT * FROM user WHERE userkecamatan='$posto'")->result_array();
        $data['users'] = $this->db->get('user')->row_array();
        $data['Kecamatan'] = $this->db->get('kecamatan')->result_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function userList()
    {
        $postData = $this->input->post();

        // get data
        $data = $this->model->getUsers($postData);

        echo json_encode($data);
    }

    // berita anual
    public function anual()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Berita Anual';
        $data['beritaanual'] = $this->db->get('beritaanual')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        if ($this->input->post('search')) {
            $data['cari'] = $this->input->post('cari');
            $this->session->set_userdata('cari', $data['cari']);
        } else {
            $data['cari'] = $this->session->userdata('cari');
        }

        // config
        $this->db->like('namaterbit', $data['cari']);
        $this->db->or_like('alamat_berita', $data['cari']);
        $this->db->or_like('judulberitaanual', $data['cari']);
        $this->db->or_like('kodeberitaanual', $data['cari']);
        $this->db->from('beritaanual');

        $config['base_url'] = 'http://localhost/aplikasitutorialmenikmati/admin/anual';
        $config['total_rows'] = $this->db->count_all_results();
        // var_dump($config['total_rows']); die;
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 4;

        // Styling

        $config['full_tag_open'] = '<nav><ul class="pagination  active">';
        $config['full_tag_close'] = '</ul></nav>';

        // $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = ' <b style="font-family:Bernard MT Condensed; color:gray" class="text-primary">&raquo Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li></b>';

        $config['prev_link'] = ' <b style="font-family:Bernard MT Condensed; color:gray" class="text-primary">&laquo Back';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li></b>';

        $config['cur_tag_open'] = '<li class="page-link active><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        // $config['display_pages'] = FALSE;
        $config['attributes'] = array('class' => 'page-link');
        // initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['beritaanual'] = $this->model->paginationberitaanual($config['per_page'], $data['start'], $data['cari']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritaanual/beritaanual', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addberitaanual()
    {
        $data['title'] = 'Tambah Berita Anual';
        $this->form_validation->set_rules('kodeberita', 'Masukan Kode Berita', 'required');
        $this->form_validation->set_rules('judulberita', 'Masukan Judul Berita', 'required');
        $this->form_validation->set_rules('namaterbit', 'Masukan Nama Terbit', 'required');
        $this->form_validation->set_rules('alamatberita', 'Masukan Alamat Berita', 'required');
        $this->form_validation->set_rules('isiberita', 'Masukan Isi Berita', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritaanual/addberitaanual', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kodeberita = $this->input->post('kodeberita');
            $judulberita = $this->input->post('judulberita');
            $namaterbit = $this->input->post('namaterbit');
            $alamat = $this->input->post('alamatberita');
            $isiberita = $this->input->post('isiberita');
            $data = [
                'kodeberitaanual'       => $kodeberita,
                'judulberitaanual'      => $judulberita,
                'namaterbit'            => $namaterbit,
                'isi_berita'            => $isiberita,
                'alamat_berita'         => $alamat,
                'tanggal'               => time(),
            ];
            $this->db->insert('beritaanual', $data);
            $this->session->set_flashdata('success', 'Data Berita Anual Berhasil Disimpan');
            redirect('admin/anual');
        }
    }
    public function updateberitaanual($id)
    {
        $data['title'] = 'Update Berita Anual';
        $data['berita'] = $this->db->query("SELECT * FROM beritaanual WHERE id='$id'")->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritaanual/updateberitaanual', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $this->prosesberitaanual();
        }
    }
    public function prosesberitaanual()
    {
        $id             = $this->input->post('id');
        $kodeberita     = $this->input->post('kodeberita');
        $judulberita    = $this->input->post('judulberita');
        $namaterbit     = $this->input->post('namaterbit');
        $alamat         = $this->input->post('alamatberita');
        $isiberita      = $this->input->post('isiberita');
        $data = [
            'id'                    => $id,
            'kodeberitaanual'       => $kodeberita,
            'judulberitaanual'      => $judulberita,
            'namaterbit'            => $namaterbit,
            'isi_berita'            => $isiberita,
            'alamat_berita'         => $alamat,
            'tanggal'               => time(),
        ];

        $this->db->where('id', $id);
        $this->db->update('beritaanual', $data);
        $this->session->set_flashdata('success', 'Data Berita Anual Berhasil Diubah');
        redirect('admin/anual');
    }

    public function Deleteberitaanual()
    {
    }


    // BERITA MENSAL

    public function mensal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Berita Mensal';
        $data['beritamensal'] = $this->db->get('beritamensal')->result_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('nama_terbit', $data['keyword']);
        $this->db->from('beritamensal');

        $config['base_url'] = 'http://localhost/aplikasitutorialmenikmati/admin/mensal';
        $config['total_rows'] = $this->db->count_all_results();
        // var_dump($config['total_rows']); die;
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;

        // Styling

        $config['full_tag_open'] = '<nav><ul class="pagination  active">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-link active><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        // $config['display_pages'] = FALSE;
        $config['attributes'] = array('class' => 'page-link');
        // initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['beritamensal'] = $this->model->paginationberitamensal($config['per_page'], $data['start'], $data['keyword']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritamensal/beritamensal', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function tambahberitamensal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tambah Berita Mensal';

        $this->form_validation->set_rules('kodeberita', 'Masukan Kode Berita', 'required');
        $this->form_validation->set_rules('judulberita', 'Masukan Judul Berita', 'required');
        $this->form_validation->set_rules('namaterbit', 'Masukan Nama Terbit', 'required');
        $this->form_validation->set_rules('alamatberita', 'Masukan Alamat Berita', 'required');
        $this->form_validation->set_rules('isiberita', 'Masukan Isi Berita', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritamensal/addberitamensal', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kodeberita = $this->input->post('kodeberita');
            $judulberita = $this->input->post('judulberita');
            $namaterbit = $this->input->post('namaterbit');
            $alamat = $this->input->post('alamatberita');
            $isiberita = $this->input->post('isiberita');
            $data = [
                'kodeberitamensal'       => $kodeberita,
                'berita'                 => 'Berita Mensal',
                'judulberitamensal'      => $judulberita,
                'nama_terbit'            => $namaterbit,
                'isi_beritamensal'       => $isiberita,
                'alamat_berita'          => $alamat,
                'tanggal_berita'         => time(),
            ];
            $this->db->insert('beritamensal', $data);
            $this->session->set_flashdata('success', 'Data Berita Mensal Berhasil Di Tambah');
            redirect('admin/mensal');
        }
    }
    public function updateberitamensal($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Update Berita Mensal';
        $data['berita'] = $this->db->query("SELECT * FROM beritamensal WHERE id='$id'")->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('beritamensal/updateberitamensal', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $this->prosesberitamensal();
        }
    }
    public function prosesberitamensal()
    {
        $id             = $this->input->post('id');
        $kodeberita     = $this->input->post('kodeberita');
        $judulberita    = $this->input->post('judulberita');
        $namaterbit     = $this->input->post('namaterbit');
        $alamat         = $this->input->post('alamatberita');
        $isiberita      = $this->input->post('isiberita');
        $data = [
            'id'                    => $id,
            'kodeberitamensal'       => $kodeberita,
            'berita'                 => 'Berita Mensal',
            'judulberitamensal'      => $judulberita,
            'nama_terbit'            => $namaterbit,
            'isi_beritamensal'       => $isiberita,
            'alamat_berita'          => $alamat,
            'tanggal_berita'         => time(),
        ];

        $this->db->where('id', $id);
        $this->db->update('beritamensal', $data);
        $this->session->set_flashdata('success', 'Data Berita Mensal Berhasil Diubah');
        redirect('admin/mensal');
    }
    public function Deleteberitamensal()
    {
    }
    // BERITA SEMANAL


    // DATA KONSULTASI
    public function konsultasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Konsultasi Penyakit';
        $data['konsultasi'] = $this->model->getkonsultasi();
        $data['dokter'] = $this->db->get('dokter_perawat_bidan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/konsultasi', $data);
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
        redirect('admin/konsultasi');
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
        redirect('admin/konsultasi');
    }

    public function deletekonsultasi()
    {
    }

    // DATA JENIS OBAT
    public function jenisobat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Jenis Obat';
        $data['jenisobat'] = $this->model->getjenisobat();
        $data['penyakit'] = $this->db->get('penyakit')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/jenisobat', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addjenisobat()
    {
        $jenisobat          = $this->input->post('jenisobat');
        $namapenyakit       = $this->input->post('namapenyakit');

        $data           = [
            'nama_obat'              => $jenisobat,
            'id_penyakit'            => $namapenyakit
        ];
        $this->db->insert('jenis_obat', $data);
        $this->session->set_flashdata('success', 'Data Obat Berhasil Di Tambah');
        redirect('admin/jenisobat');
    }

    public function ubahjenisobat()
    {
        $id                    = $this->input->post('idjenisobat');
        $jenisobat             = $this->input->post('jenisobat');
        $namapenyakit          = $this->input->post('namapenyakit');

        $data           = [
            'id'                    => $id,
            'nama_obat'             => $jenisobat,
            'id_penyakit'           => $namapenyakit
        ];

        $this->db->where('id', $id);
        $this->db->update('jenis_obat', $data);
        $this->session->set_flashdata('success', 'Data Obat Berhasil Di Ubah');
        redirect('admin/jenisobat');
    }

    public function deletejenisobat()
    {
    }

    // DATA RUMAH SAKIT
    public function rumahsakit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Rumah Sakit';
        $data['rumahsakit'] = $this->model->getrumahsakit();
        $data['kelurahan'] = $this->db->get('kelurahan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/rumahsakit', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function addrumahsakit()
    {
        $this->form_validation->set_rules('koderumahsakit', 'Masukan Nama Koderumahsakit', 'required');
        $this->form_validation->set_rules('namarumahsakit', 'Masukan Nama Namarumahsakit', 'required');
        $this->form_validation->set_rules('kelurahan', 'Masukan Nama Kelurahan', 'required');

        $koderumahsakit      = $this->input->post('koderumahsakit');
        $namarumahsakit      = $this->input->post('namarumahsakit');
        $kelurahan           = $this->input->post('kelurahan');

        $data                = [
            'kode_rumahsakit'       => $koderumahsakit,
            'nama_rumahsakit'       => $namarumahsakit,
            'id_kelurahan'          => $kelurahan
        ];
        $this->db->insert('rumahsakit', $data);
        $this->session->set_flashdata('success', 'Data Rumah Sakit Berhasil Di Tambah');
        redirect('admin/rumahsakit');
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
        $this->session->set_flashdata('success', 'Data Rumah Sakit Berhasil Di Ubah');
        redirect('admin/rumahsakit');
    }

    public function deleterumahsakit()
    {
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
        $data['dokter'] = $this->model->getdokterperawatbidan();
        $data['nato'] = $this->db->get('kecamatan')->result_array();
        $data['rumahsakit'] = $this->db->get('rumahsakit')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/dokterperawatbidan', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function adddokterperawatbidan()
    {
        // $data['title']  ='Tambah Dokter & Perawat & Bidan';

        // $this->form_validation->set_rules('namadokter',     'Masukan Nama Nama dokter',      'required');
        // $this->form_validation->set_rules('tanggallahir',   'Masukan Tanggal Lahir Dokter',  'required');
        // $this->form_validation->set_rules('umur',           'Masukan Umur Dokter',           'required');
        // $this->form_validation->set_rules('nomorhp',        'Masukan Nomor HP Dokter',       'required');
        // $this->form_validation->set_rules('alamat',         'Masukan Alamat Dokter',         'required');

        // if($this->form_validation->run() == false){
        //     $this->load->view('templateadmin/header_admin',$data);
        //     $this->load->view('dokterperawatbidan/adddokterperawatbidan',$data);
        //     $this->load->view('templateadmin/sidebar_admin');
        //     $this->load->view('templateadmin/footer_admin');
        // }else{
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
            'namakecamatan'         => $tempattinggal,
            'nomor_hp'           => $nomorhp,
            'namarumahsakit'   => $rumahsakit,
            'alamat'            => $alamat
        ];
        // var_dump($data);
        // die;
        $this->db->insert('dokter_perawat_bidan', $data);
        $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Ditambah');
        redirect('admin/dokterperawatbidan');
    }

    public function updatedokterperawatbidan()
    {

        $id                     = $this->input->post('idnamadokter');
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
            'id_dopebi'                => $id,
            'nama_dokter'       => $namadokter,
            'jenis_kelamin'     => $jeniskelamin,
            'jenis_dokter'      => $jenisdokter,
            'tanggal_lahir'     => $tanggallahir,
            'umur'              => $umur,
            'namakecamatan'         => $tempattinggal,
            'nomor_hp'           => $nomorhp,
            'namarumahsakit'   => $rumahsakit,
            'alamat'            => $alamat
        ];
        $this->db->where('id_dopebi', $id);
        $this->db->update('dokter_perawat_bidan', $data);
        $this->session->set_flashdata('success', 'Data Dokter & Perawat & Bidan Berhasil Diubah');
        redirect('admin/dokterperawatbidan');
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
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
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
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
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
        // $data['diagnosa'] = $this->model->datadiagnosa();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        $this->form_validation->set_rules('lastname', 'Masukkan Last Name Anda', 'required|trim');
        $this->form_validation->set_rules('firstname', 'Masukkan First Name Anda', 'required|trim');
        $this->form_validation->set_rules('username', 'Masukkan Username Anda', 'required|trim');
        $this->form_validation->set_rules('email', 'Masukan Email Anda', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email Has Already Registered!'
        ]);

        $this->form_validation->set_rules('password', ' Masukan Password Anda', 'required|trim|min_length[3]|matches[confpassword]', [
            'matches' => 'Password Dont Match!',
            'min_length' => 'Password Too Short!'
        ]);
        $this->form_validation->set_rules('confpassword', 'Repeat Password Anda', 'required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('admin/editregister', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {

            $lastname           = htmlspecialchars($this->input->post('lastname', true));
            $firstname          = htmlspecialchars($this->input->post('firstname', true));
            $username           = htmlspecialchars($this->input->post('username', true));
            $email              = htmlspecialchars($this->input->post('email', true));
            $password           = sha1($this->input->post('password'));
            $jeniskelamin       = $this->input->post('jeniskelamin');
            $level              = $this->input->post('level');
            $status             = $this->input->post('status');
            $alamat             = $this->input->post('alamat');
            $kecamatan          = $this->input->post('kecamatan');

            $data               = [
                'last_name'             => $lastname,
                'first_name'            => $firstname,
                'username'              => $username,
                'email'                 => $email,
                'password'              => $password,
                'jenis_kelamin'         => $jeniskelamin,
                'created_akun'          => time('d F Y'),
                'status'                => $status,
                'alamat'                => $alamat,
                'level'                 => $level,
                'userkecamatan'         => $kecamatan
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'Data User Berhasil Di Tambahkan');
            redirect('admin');
        }
    }
    public function editregister($id)
    {
        $data['title'] = 'Update Data User';
        $data['diagnosa'] = $this->model->datadiagnosa();
        $data['keca'] = $this->db->get('kecamatan')->result_array();
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
        $iduser         = $this->input->post('iduser');
        $lastname         = htmlspecialchars($this->input->post('lastname', true));
        $firstname         = htmlspecialchars($this->input->post('firstname', true));
        $username         = htmlspecialchars($this->input->post('username', true));
        $email             = htmlspecialchars($this->input->post('email', true));
        $jeniskelamin   = $this->input->post('jeniskelamin');
        $level          = $this->input->post('level');
        $status         = $this->input->post('status');
        $alamat         = $this->input->post('alamat');

        $data           = [
            'id'                    => $iduser,
            'last_name'             => $lastname,
            'first_name'            => $firstname,
            'username'              => $username,
            'email'                 => $email,
            'jenis_kelamin'         => $jeniskelamin,
            'created_akun'             => time('d F Y'),
            'status'                => $status,
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

    // // Data Laporan Pasien
    // public function laporanpasien(){ 
    //     $this->load->library('mypdf');
    //     $data['pendaftaran'] = $this->db->query("SELECT * FROM pendafaranpasien WHERE id")->row_array();
    //     $this->mypdf->generate('Laporan/laporanpasien', $data);
    //     }
}

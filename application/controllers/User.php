<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        check_not_login();
        $this->load->model('menu_model', 'model');
    }
    public function index()
    {

        $data['title'] = 'Data User';
        $data['users'] = $this->db->get('user')->result_array();
        $data['users'] = $this->db->get('user')->row_array();
        $data['user2'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user1'] = $this->db->query("SELECT * FROM user WHERE id")->row_array();
        // $data['user1'] = $this->model->get()->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function anualberita()
    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Berita Anual';
        $data['berita'] = $this->db->get('beritaanual')->result_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('namaterbit', $data['keyword']);
        $this->db->from('beritaanual');

        $config['base_url'] = 'http://localhost/aplikasitutorialmenikmati/user/anualberita';
        $config['total_rows'] = $this->db->count_all_results();
        // var_dump($config['total_rows']); die;
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 4;

        // Styling

        $config['full_tag_open'] = '<nav><ul class="pagination  active">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
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
        $data['berita'] = $this->model->paginationberitaanual($config['per_page'], $data['start'], $data['keyword']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/anualberita', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function bacaberita($id)
    {
        $data['title'] = 'Berita';
        $data['beritaanual'] = $this->db->query("SELECT * FROM beritaanual WHERE id='$id'")->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/bacaberitaanual', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function changepassword()
    {
        $data['title'] = 'Change Password Baru';
        $data['users'] = $this->db->get('user')->row_array();
        $this->form_validation->set_rules(
            'passwordbaru',
            'Masukan Password Baruu',
            'required|trim|min_length[3]|matches[confpassword]',
            [
                'matches' => 'Password Dont Match!',
                'min_length' => 'Password Too Short!'
            ]
        );
        $this->form_validation->set_rules(
            'confpassword',
            'Masukan Confirm Password Baruu',
            'required|trim|min_length[3]|matches[passwordbaru]'
        );


        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $id             = $this->input->post('id');
            $password       = $this->input->post('passwordbaru');

            $data = [
                'id'              => $id,
                'password'        => sha1($password)
            ];

            $this->db->where('id', $id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('success', 'Data Alamat & Status Berhasil Diubah');
            redirect('user');
        }
    }
    public function alamatstatus()
    {
        $data['title'] = 'Alamat & Status';
        $data['users'] = $this->db->get('user')->row_array();
        $this->form_validation->set_rules('alamat', 'Masukan Alamat Tinggal Anda', 'trim|required');
        $this->form_validation->set_rules('status', 'Masukan Status Anda', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $id     = $this->input->post('id');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');

            $data = [
                'id'        => $id,
                'alamat'    => $alamat,
                'status'    => $status
            ];
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('success', 'Data Alamat & Status Berhasil Diubah');
            redirect('user');
        }
    }
    public function processedit()
    {
        $data['title'] = 'Data User';
        $data['users'] = $this->db->get('user')->row_array();
        $this->form_validation->set_rules('username', 'Masukan Username Anda', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function edit()
    {
        $id         = $this->input->post('id');

        // Cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/foto/profile';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                // Ganti gambar
                $old_image = ['user']['foto'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/foto/profile/' . $old_image);
                } else {
                }

                // Upload gambar
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
                echo $this->upload->dispay_errors();
            }
        }

        $data = [
            'id'            => $id,
            'foto'           => $upload_image
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('success', 'Data Alamat & Status Berhasil Diubah');
        redirect('user');
    }

    // Data Laporan Pasien
    public function downloadlaporanpasien($id)
    {
        $this->load->library('mypdf');
        $data['pendaftaran'] = $this->model->downloadpendaftaran($id);
        $this->mypdf->generate('Laporan/laporanpasien', $data);
    }
}

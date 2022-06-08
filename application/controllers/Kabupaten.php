<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabupaten extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('menu_model', 'model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'Data Kabupaten';
        $data['kabupaten'] = $this->db->get('kabupaten')->result_array();
        $this->load->library('pagination');

        if ($this->input->post('kabupaten')) {
            $data['input'] = $this->input->post('input');
            $this->session->set_userdata('input', $data['input']);
        } else {
            $data['input'] = $this->session->userdata('input');
        }

        // config
        $this->db->like('kabupaten', $data['input']);
        $this->db->from('kabupaten');

        $config['base_url'] = 'http://localhost/aplikasitutorialmenikmati/kabupaten/index';
        $config['total_rows'] = $this->db->count_all_results();
        // var_dump($config['total_rows']); die;
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

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
        $data['kabupaten'] = $this->model->paginationkabupaten($config['per_page'], $data['start'], $data['input']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kabupaten/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
        }
    }
    public function kabupaten()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('')
        $data['title']  = 'Data Kabupaten';
        $this->form_validation->set_rules('kabupaten', 'Masukan Nama Kabupaten', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('kabupaten/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kabupaten  = $this->input->post('kabupaten');
            $data       = [
                'kabupaten'   => $kabupaten
            ];
            $this->db->insert('kabupaten', $data);
            $this->session->set_flashdata('success', 'Data Kabupaten Berhasil Disimpan');
            redirect('kabupaten');
        }
    }
    public function updatekabupaten()
    {
        $id               = $this->input->post('idkabupaten');
        $kabupaten        = $this->input->post('kabupaten');

        $data   = [
            'id'            => $id,
            'kabupaten'     => $kabupaten
        ];
        $this->db->where('id', $id);
        $this->db->update('kabupaten', $data);
        $this->session->set_flashdata('success', 'Data Kabupaten Berhasil Diubah');
        redirect('kabupaten');
    }

    public function deletekabupaten()
    {
    }
}

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
        $this->form_validation->set_rules('kodepasien', 'Masukan Kode Pasien', 'required');
        $this->form_validation->set_rules('tanggaldiagnosa', 'Masukan Nama Tanggal Diagnosa', 'required');
        $this->form_validation->set_rules('namapasien', 'Masukan Nama Pasien', 'required');
        $this->form_validation->set_rules('nomoreleitoral', 'Masukan Nomor Eleitoral', 'required');
        $this->form_validation->set_rules('umurpasien', 'Masukan Umur Pasien', 'required');
        $this->form_validation->set_rules('tanggallahirpasien', 'Masukan Tanggal Lahir Pasien', 'required');
        $this->form_validation->set_rules('alamatpasien', 'Masukan Alamat Pasien', 'required');

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/index', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            $kodepasien             = $this->input->post('kodepasien');
            $tanggaldiagnosa        = $this->input->post('tanggaldiagnosa');
            $namapasien             = $this->input->post('namapasien');
            $nomoreleitoral         = $this->input->post('nomoreleitoral');
            $umurpasien             = $this->input->post('umurpasien');
            $jeniskelamin           = $this->input->post('jeniskelamin');
            $tanggallahirpasien     = $this->input->post('tanggallahirpasien');
            $alamatpasien           = $this->input->post('alamatpasien');

            $data                   = [
                'kodepasien'       => $kodepasien,
                'tgl_diagnosa'     => $tanggaldiagnosa,
                'namapasien'       => $namapasien,
                'nomor_KTP'        => $nomoreleitoral,
                'umurpasien'       => $umurpasien,
                'jenis_kelamin'    => $jeniskelamin,
                'tanggal_lahir'    => $tanggallahirpasien,
                'alamatpasien'     => $alamatpasien
            ];
            $this->db->insert('pendafaranpasien', $data);
            $this->session->set_flashdata('success', 'Data Pendaftaran Pasien Berhasil Disimpan');
            redirect('pendaftaranpasien/detailhasilpendaftaran');
        }
    }

    public function detailhasildiagosa()
    {
        $data['title'] = 'Data Diagnosa Pasien';
        $data['dia'] = $this->model->joindatadiagnosa();
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

    public function sendemail()
    {
        $data['title'] = 'Kirim Email Kepada Dokter';
        if ($this->form_validation->run() == false) {
            $this->load->view('templateadmin/header_admin', $data);
            $this->load->view('pendafataranpasien/sendemail', $data);
            $this->load->view('templateadmin/sidebar_admin');
            $this->load->view('templateadmin/footer_admin');
        } else {
            // $this->send();
        }
    }
    // public function send()
    // {
    //     $subject = 'Application for Programmer Registration By - ' . $this->input->post("name");
    //     $programming_languages = implode(", ", $this->input->post("programming_languages"));
    //     $file_data = $this->upload_file();
    //     if (is_array($file_data)) {
    //         $message = '
    //             <h3 align="center">Programmer Details</h3>
    //                 <table border="1" width="100%" cellpadding="5">
    //                 <tr>
    //                 <td width="30%">Name</td>
    //                 <td width="70%">' . $this->input->post("name") . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Address</td>
    //                 <td width="70%">' . $this->input->post("address") . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Email Address</td>
    //                 <td width="70%">' . $this->input->post("email") . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Progamming Language Knowledge</td>
    //                 <td width="70%">' . $programming_languages . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Experience Year</td>
    //                 <td width="70%">' . $this->input->post("experience") . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Phone Number</td>
    //                 <td width="70%">' . $this->input->post("mobile") . '</td>
    //                 </tr>
    //                 <tr>
    //                 <td width="30%">Additional Information</td>
    //                 <td width="70%">' . $this->input->post("additional_information") . '</td>
    //                 </tr>
    //                 </table>
    //             ';

    //         $config = array(
    //             'protocol'  => 'smtp',
    //             'smtp_host' => 'smtpout.secureserver.net',
    //             'smtp_port' => 80,
    //             'smtp_user' => 'xxxxxxxxxx',
    //             'smtp_pass' => 'xxxxxxxxxx',
    //             'mailtype'  => 'html',
    //             'charset'  => 'iso-8859-1',
    //             'wordwrap'  => TRUE
    //         );
    //         //$file_path = 'uploads/' . $file_name;
    //         $this->load->library('email', $config);
    //         $this->email->set_newline("\r\n");
    //         $this->email->from($this->input->post("email"));
    //         $this->email->to('natalioluansoares1997@gmail.com.net');
    //         $this->email->subject($subject);
    //         $this->email->message($message);
    //         $this->email->attach($file_data['full_path']);
    //         if ($this->email->send()) {
    //             if (delete_files($file_data['file_path'])) {
    //                 $this->session->set_flashdata('success', 'Application Sended');
    //                 redirect('pendaftaranpasien');
    //             }
    //         } else {
    //             if (delete_files($file_data['file_path'])) {
    //                 $this->session->set_flashdata('success', 'There is an error in email send');
    //                 redirect('pendaftaranpasien');
    //             }
    //         }
    //     } else {
    //         $this->session->set_flashdata('success', 'There is an error in attach file');
    //         redirect('pendaftaranpasien');
    //     }
    // }
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

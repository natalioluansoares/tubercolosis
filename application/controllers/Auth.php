<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		// $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('menu_model', 'menumenu');
		$this->load->model('autocompleto', 'completo');
	}
	public function index()
	{
		check_already_login();
		$data['title']  = 'Data Konsultasi Penyakit';
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/index', $data);
			$this->load->view('templates/auth_footer');
		} else {
		}
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->menumenu->login($post);
?>
			<link rel="stylesheet" href="<?= base_url() ?>assets/tutorialcssjsadmin/sweetalert2/sweetalert.min.css">
			<script src="<?= base_url() ?>assets/tutorialcssjsadmin/sweetalert2/sweetalert2.all.min.js"></script>

			<body></body>
			<?php
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id' => $row->id,
					'level'	  => $row->level
				);
				$this->session->set_userdata($params);
			?>
				<script>
					Swal.fire({
						icon: 'success',
						title: 'Success',
						text: 'Selamat Datang:<?= ucfirst($this->fungsi->user_login()->username) ?>, Anda Sudah Berhasil Login'
					}).then((result) => {
						window.location = '<?= site_url('dashboard') ?>';
					})
				</script>
			<?php
			} else {
			?>
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Failure',
						text: 'Login Gagal, Username | Password Salah'
					}).then((result) => {
						window.location = '<?= site_url('auth') ?>';
					})
				</script>
<?php
			}
		}
	}

	public function register()
	{
		$data['title']  	= 'Data Konsultasi Penyakit';
		$data['judulwebs']	= $this->db->get('judulwebsite')->result_array();


		$this->form_validation->set_rules('lastname', 'Masukkan Last Name Anda', 'required|trim');
		$this->form_validation->set_rules('firstname', 'Masukkan First Name Anda', 'required|trim');
		$this->form_validation->set_rules('username', 'Masukkan Username Anda', 'required|trim');
		$this->form_validation->set_rules('email', 'Masukan Email Anda', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This Email Has Already Registered!'
		]);

		$this->form_validation->set_rules('password1', ' Masukan Password Anda', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password Dont Match!',
			'min_length' => 'Password Too Short!'
		]);
		$this->form_validation->set_rules('password2', 'Repeat Password Anda', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/register', $data);
			$this->load->view('templates/auth_footer');
		} else {
			$lastname 			= htmlspecialchars($this->input->post('lastname', true));
			$firstname 			= htmlspecialchars($this->input->post('firstname', true));
			$username 			= htmlspecialchars($this->input->post('username', true));
			$email 				= htmlspecialchars($this->input->post('email', true));
			$password1  		= sha1($this->input->post('password1'));
			$level 				= $this->input->post('level');
			$kecamatan 			= $this->input->post('kecamatan');
			$judul 				= $this->input->post('judul');
			$alamatwebsite 		= $this->input->post('alamatwebsite');
			$tlpwebsite 		= $this->input->post('tlpwebsite');
			$websiterumahsakit 	= $this->input->post('websiterumahsakit');
			$alamatemail 		= $this->input->post('alamatemail');

			$data = [
				'last_name'			=> $lastname,
				'first_name'    	=> $firstname,
				'username'    		=> $username,
				'email'    			=> $email,
				'password'    		=> $password1,
				'level'    			=> $level,
				'created_akun' 		=> time('d F Y'),
				'foto'    			=> 'default.jpg',
				'userkecamatan'     => $kecamatan,
				'judul' 			=> $judul,
				'alamatwebsite' 	=> $alamatwebsite,
				'tlpwebsite' 		=> $tlpwebsite,
				'websiterumahsakit' => $websiterumahsakit,
				'alamatemail' 		=> $alamatemail
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('success', 'Akun Anda Berhasil Di Regis');
			redirect('auth');
		}
	}

	public function userList()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->completo->getUsers($postData);

		echo json_encode($data);
	}

	public function logout()
	{
		$params = array('id', 'level');
		$this->session->unset_userdata($params);
		redirect('auth');
	}
}



?>
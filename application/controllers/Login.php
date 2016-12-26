<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->library(array('form_validation','session'));
		$this->load->database();
		$this->load->helper('url');
	}

	function index(){
		$session = $this->session->userdata('isLogin');

			if($session == false)
			{
				redirect('login/login_form');
			}else{
				redirect('site/dashboard');
			}
	}

	function login_form(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

			if($this->form_validation->run()==false)
			{
				$this->load->view('site/login');
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$cek = $this->M_login->getUser($username, $password, 1);

				if($cek <> 0){
					$this->session->set_userdata('isLogin', TRUE);
					$this->session->set_userdata('username', $username);
					redirect('site/dashboard');
				}else{
					?>
					<scipt>
						alert('Gagal Login: Cek username dan password anda!');
						history.go(-1);
					</scipt>
					<?php
				}
			}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('frontend/');
	}
	
}

?>
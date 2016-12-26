<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_user');
        $this->output->set_template('admin');
        $this->load->library(array('form_validation'));

        if($this->session->userdata('isLogin') == TRUE)
		{
			$this->load->model('M_login');
		}else{
			redirect('login/');
		}
	}

	function index(){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$data['user'] = $this->M_user->show()->result();
		$this->load->view('user/index', $data);
	}

	function create(){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$this->load->view('user/create', $data);
	}

	function save(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if($this->form_validation->run()==false)
			{
				$user = $this->session->userdata('username');
				$data['level'] = $this->session->userdata('level');
				$data['pengguna'] = $this->M_login->dataUser($user);
				
				$this->load->view('user/create');
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama 	  = $this->input->post('nama');
				$level    = $this->input->post('level');
				$status   = 1;
				
				$data = array(
					'username' => $username,
					'password' => $password,
					'nama' => $nama,
					'level' => $level,
					'status' => $status
					);
				$this->M_user->input_data('user',$data);
				redirect('user/index', $data);
			}
	}

	function delete($username){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		if($data['level'] != 1){
			redirect('user/index');
		}else{
			$where = array('username' => $$username);
			$this->M_user->delete('topic', $where);
			redirect('user/index');
		}
	}

	function edit($username){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('username' => $username);
		$data['user'] = $this->M_user->edit('user', $where)->result();
		$this->load->view('user/edit',$data);
	}

	function update(){
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if($this->form_validation->run()==false)
			{
				$user = $this->session->userdata('username');
				$data['level'] = $this->session->userdata('level');
				$data['pengguna'] = $this->M_login->dataUser($user);
				
				$this->load->view('user/edit');
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama 	  = $this->input->post('nama');
				$level    = $this->input->post('level');
				$status   = 1;
				
				$data = array(
					'username' => $username,
					'password' => $password,
					'nama' => $nama,
					'level' => $level,
					'status' => $status
					);

				$where = array(
					'username' => $username
				);

				$this->M_user->update('user', $where, $data);
				redirect('user/index');
			}

		}
}
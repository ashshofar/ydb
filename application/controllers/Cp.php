<?php 

class Cp extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_cp');
        $this->output->set_template('admin');
        error_reporting(E_ALL ^(E_NOTICE | E_WARNING));

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
		
		$data['cp'] = $this->M_cp->showdata();
		$this->load->view('cp/index', $data);
	}

	function create(){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);
		
		$this->load->view('cp/create', $data);
	}

	function save(){
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$organizationid = $this->input->post('organizationid');
		
		$data = array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'organizationid' => $organizationid
			);

		$this->M_cp->input_data('cp',$data);
		redirect('cp/index');
	}

	function delete($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		if($data['level'] != 1){
			redirect('cp/index');
		}else{
			$where = array('id_cp' => $id);
			$this->M_cp->delete('cp', $where);
			redirect('cp/index');
		}
	}

	function edit($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_cp' => $id);
		$data['cp'] = $this->M_cp->edit('cp', $where)->result();
		$this->load->view('cp/edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$organizationid = $this->input->post('organizationid');
		
		$data = array(
			'id_cp' => $id,
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'organizationid' => $organizationid
		);

		$where = array(
			'id_cp' => $id
		);

		$this->M_cp->update('cp', $where, $data);
		redirect('cp/index');
	}
}
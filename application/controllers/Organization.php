<?php 

class Organization extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_organization');
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

		$data['organization'] = $this->M_organization->showdata();
		$this->load->view('organization/index', $data);
	}

	function create(){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$data['topic'] = $this->M_organization->getalltopic();
		$this->load->view('organization/create', $data);
	}

	function createcontact($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();
		$this->load->view('organization/contactadd', $data);
	}

	function save(){
		$name = $this->input->post('name');
		$programme = $this->input->post('programme');
		$topicid = $this->input->post('topicid');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$instagram = $this->input->post('instagram');
		
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 5000;
		$nmfile = "file_".time();
		$config['file_name'] = $nmfile;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if($_FILES['logo']['name']){
			if($this->upload->do_upload('logo')){
				$gbr = $this->upload->data();
				$data = array(
					'nameo' => $name,
					'programme' => $programme,
					'topicid' => $topicid,
					'address' => $address,
					'phoneo' => $phone,
					'emailo' => $email,
					'website' => $website,
					'facebook' => $facebook,
					'twitter' => $twitter,
					'instagram' => $instagram,
					'logo' => $gbr['file_name']
					);

				$this->M_organization->input_data('organization',$data);
				redirect('organization/index');
			}else{
				redirect('organization/create');
			}
		}else{
			$data = array(
					'nameo' => $name,
					'programme' => $programme,
					'topicid' => $topicid,
					'address' => $address,
					'phoneo' => $phone,
					'emailo' => $email,
					'website' => $website,
					'facebook' => $facebook,
					'twitter' => $twitter,
					'instagram' => $instagram
					);

			$this->M_organization->input_data('organization',$data);
			redirect('organization/index');
		}

		
		
	}

	function changelogo($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();
		$this->load->view('organization/editlogo',$data);
	}

	function changelogosave(){
		$id = $this->input->post('id');

		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 5000;
		$nmfile = "file_".time();
		$config['file_name'] = $nmfile;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if($_FILES['logo']['name']){
			if($this->upload->do_upload('logo')){
				$gbr = $this->upload->data();
				$data = array(
					'logo' => $gbr['file_name']
				);

				$where = array(
					'id_organization' => $id
				);

				$this->M_organization->update('organization', $where, $data);
				redirect('organization/index');
			}else{
				redirect('organization/editlogo');
			}
		}
	}

	function delete($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		if($data['level'] != 1){
			redirect('organization/index');
		}else{
			$where = array('id_organization' => $id);
			$this->M_organization->delete('organization', $where);
			redirect('organization/index');	
		}		
	}

	function edit($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$data['topic'] = $this->M_organization->getalltopic();
		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();
		$this->load->view('organization/edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$programme = $this->input->post('programme');
		$topicid = $this->input->post('topicid');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$instagram = $this->input->post('instagram');
		
		$data = array(
			'id_organization' => $id,
			'nameo' => $name,
			'programme' => $programme,
			'topicid' => $topicid,
			'address' => $address,
			'phoneo' => $phone,
			'emailo' => $email,
			'website' => $website,
			'facebook' => $facebook,
			'twitter' => $twitter,
			'instagram' => $instagram
		);

		$where = array(
			'id_organization' => $id
		);

		$this->M_organization->update('organization', $where, $data);
		redirect('organization/index');
	}

	function profile($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();
		$this->load->view('organization/profile',$data);
	}

	function contact($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();

		$wherecp = array('organizationid' => $id);
		$data['cp'] = $this->M_organization->edit('cp', $wherecp)->result();

		$this->load->view('organization/contact', $data);
	}
}
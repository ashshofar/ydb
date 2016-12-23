<?php 

class Frontend extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_organization');
		error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
        $this->output->set_template('frontend');
	}

	function index(){
		$data['organization'] = $this->M_organization->showdata();
		$data['topic'] = $this->M_organization->getalltopic();

		$this->load->view('frontend/index', $data);
	}

	function create(){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$this->load->view('topic/create', $data);
	}

	function save(){
		$topic = $this->input->post('topic');
		$detail = $this->input->post('detail');
		
		$data = array(
			'topic' => $topic,
			'detail' => $detail
			);
		$this->M_topic->input_data('topic',$data);
		redirect('topic/index');
	}

	function delete($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		if($data['level'] != 1){
			redirect('topic/index');
		}else{
			$where = array('id_topic' => $id);
			$this->M_topic->delete('topic', $where);
			redirect('topic/index');
		}
	}

	function edit($id){
		$user = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->M_login->dataUser($user);

		$where = array('id_topic' => $id);
		$data['topic'] = $this->M_topic->edit('topic', $where)->result();
		$this->load->view('topic/edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$topic = $this->input->post('topic');
		$detail = $this->input->post('detail');
		
		$data = array(
			'id_topic' => $id,
			'topic' => $topic,
			'detail' => $detail
		);

		$where = array(
			'id_topic' => $id
		);

		$this->M_topic->update('topic', $where, $data);
		redirect('topic/index');
	}
}
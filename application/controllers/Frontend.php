<?php 

class Frontend extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_organization');
		$this->load->model('M_cp');
		error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
        $this->output->set_template('frontend');
	}

	function index(){
		$data['organization'] = $this->M_organization->showdata();
		$data['topic'] = $this->M_organization->getalltopic();

		$this->load->view('frontend/index', $data);
	}

	function filter(){
		$topic = $this->input->post('topicid');
		$data['topic'] = $this->M_organization->getalltopic();

		$where = array(
			'topicid' => $topic
		);

		$data['organization'] = $this->M_organization->filtershowdata($where);
		$this->load->view('frontend/index', $data);
	}

	function profile($id){
		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();
		$this->load->view('frontend/profile',$data);
	}

	function contact($id){
		$where = array('id_organization' => $id);
		$data['organization'] = $this->M_organization->edit('organization', $where)->result();

		$wherecp = array('organizationid' => $id);
		$data['cp'] = $this->M_organization->edit('cp', $wherecp)->result();

		$this->load->view('frontend/contact', $data);
	}

	function contactlist(){
		$data['cp'] = $this->M_cp->showdata();
		$data['organization'] = $this->M_cp->getallorganization();
		$this->load->view('frontend/contactlist', $data);
	}

	function filtercontactlist(){
		$contactlist = $this->input->post('organizationid');
		$data['organization'] = $this->M_cp->getallorganization();

		$where = array(
			'organizationid' => $contactlist
		);

		$data['cp'] = $this->M_cp->filtershowdata($where);
		$this->load->view('frontend/contactlist', $data);
	}

}
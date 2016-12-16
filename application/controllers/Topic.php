<?php 

class Topic extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_topic');
        $this->output->set_template('admin');
	}

	function index(){
		//$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('topic/index');
	}
}
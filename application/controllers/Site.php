<?php 

class Site extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_site');
        $this->output->set_template('admin');
        $this->load->library(array('session'));

        if($this->session->userdata('isLogin') == TRUE)
		{
			$this->load->model('M_login');
			}else{
				redirect('login/');
		}
	}

	function dashboard(){
		
			$user = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			$data['pengguna'] = $this->M_login->dataUser($user);

			$data['topic'] = $this->M_site->counttopic();
			$data['organization'] = $this->M_site->countorganization();
			$data['cp'] = $this->M_site->countcp();
			$this->load->view('site/dashboard', $data);
		
	}

	
}
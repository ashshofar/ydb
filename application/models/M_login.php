<?php 

class M_login extends CI_Model{
	
	function __construct(){
		parent::__construct();		
	}

	function getUser($username, $password, $status){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status', $status);
		$query = $this->db->get();

		return $query->num_rows();
	}

	function dataUser($username){
		$this->db->select('username');
		$this->db->select('nama');
		$this->db->select('level'); 
		$this->db->where('username', $username);
		$query = $this->db->get('user');

		return $query->row();
	}
}
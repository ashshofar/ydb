<?php 

class M_topic extends CI_Model{
	function tampil_data(){
		return $this->db->get('topic');
	}
}
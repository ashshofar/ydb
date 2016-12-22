<?php 

class M_user extends CI_Model{
	
	function show(){
		return $this->db->get('user');
	}

	function input_data($table, $data){
		$this->db->insert($table, $data);
	}

	function delete($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($table, $where){		
		return $this->db->get_where($table, $where);
	}

	function update($table, $where, $data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
<?php 

class M_site extends CI_Model{
	
	function counttopic(){
		$query = $this->db->query("SELECT COUNT(topic) FROM topic");
		
		if($query->num_rows() > 0){
			return $query->row();
		}
		
	}

	function countorganization(){
		$query = $this->db->query("SELECT COUNT(nameo) FROM  organization");
		
		if($query->num_rows() > 0){
			return $query->row();
		}
	}

	function countcp(){
		$query = $this->db->query("SELECT COUNT(name) FROM cp");
		
		if($query->num_rows() > 0){
			return $query->row();
		}
	}

	function show(){
		return $this->db->get('topic');
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
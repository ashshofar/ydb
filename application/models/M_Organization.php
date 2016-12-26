<?php 

class M_organization extends CI_Model{
	
	function show(){
		return $this->db->get('organization');
	}

	function showdata(){
		$this->db->select('*');
		$this->db->from('organization');
		$this->db->join('topic', 'organization.topicid = topic.id_topic');

		$query = $this->db->get();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$organization[] = $data;
				}
			return $organization;
			}
	}

	function filtershowdata($topic){
		$this->db->select('*');
		$this->db->from('organization');
		$this->db->where($topic);
		$this->db->join('topic', 'organization.topicid = topic.id_topic');

		$query = $this->db->get();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$organization[] = $data;
				}
			return $organization;
			}
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

	function getalltopic(){
		$query = $this->db->query('SELECT * FROM topic ORDER BY topic ASC');
		return $query->result();
	}

}
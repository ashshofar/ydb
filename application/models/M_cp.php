<?php 

class M_cp extends CI_Model{
	
	function show(){
		return $this->db->get('cp');
	}

	function showdata(){
		$this->db->select('*');
		$this->db->from('cp');
		$this->db->join('organization', 'cp.organizationid = organization.id_organization');

		$query = $this->db->get();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$cp[] = $data;
				}
			return $cp;
			}
	}

	function filtershowdata($organization){
		$this->db->select('*');
		$this->db->from('cp');
		$this->db->where($organization);
		$this->db->join('organization', 'cp.organizationid = organization.id_organization');

		$query = $this->db->get();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$cp[] = $data;
				}
			return $cp;
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

	function getallorganization(){
		$query = $this->db->query('SELECT * FROM organization ORDER BY nameo ASC');
		return $query->result();
	}
}
<?php
class update_model extends CI_Model{
	// Function To Fetch All Students Record
	function show_students(){
		$query = $this->db->get('student');
		$query_result = $query->result();
		return $query_result;
	}
	// Function To Fetch Selected Student Record
	function show_student_id($data){
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('StdId', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	// Update Query For Selected Student
	function update_student_id($id,$data){
		$this->db->where('StdId', $id);
		$this->db->update('student', $data);
	}
}
?>
<?php
class viewModel extends CI_Model {
 
 function viewStudents(){
	  $this->db->select("StdId,FirstName,MiddleName,LastName,Gender,DOB"); 
	  $this->db->from('student');
	  $query = $this->db->get();
	  return $query->result();
 }
 
 
 function viewTeachers(){
	  $this->db->select("TID,FirstName,MiddleName,LastName,Gender,DOB,NIC"); 
	  $this->db->from('teachers');
	  $query = $this->db->get();
	  return $query->result();
 }
}
?>
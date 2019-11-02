<?php
class studentModel extends CI_Model {
 
 public function getStudent($id){
	  $this->db->select('*'); 
	  $this->db->from('student');
          $this->db->where('StdId', $id);
	  $query = $this->db->get();
	  return $query->row();
 }
 
  public function updateStudent($id){
      $newDob = date("Y-m-d",strtotime($this->input->post('dob')));
	$data = array(
            'FirstName' => $this->input->post('fname'),
            'MiddleName' => $this->input->post('mname'),
            'LastName'=>$this->input->post('lname'),
            'Gender'=>$this->input->post('gender'),
            'DOB'=>$newDob
        );  
   
          $this->db->where('StdId', $id);
	  $this->db->update('student',$data);
          return $id;
	 
 }
 
 
 function viewTeachers(){
	  $this->db->select("TID,FirstName,MiddleName,LastName,Gender,DOB,NIC"); 
	  $this->db->from('teachers');
	  $query = $this->db->get();
	  return $query->result();
 }
}
?>
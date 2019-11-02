<?php
class add_Model extends CI_Model 
{
	function addStudent($a,$b,$c,$d,$dob)
	{
	//$query="insert into student values('','$a','$b','$c','$d','$dob','','','')";
	//$this->db->query($query);
       	$data = array(
            'FirstName' => $this->input->post('fname'),
            'MiddleName' => $this->input->post('mname'),
            'LastName'=>$this->input->post('lname'),
            'Gender'=>$this->input->post('gender'),
            'DOB'=>$this->input->post('dob')
        );  
   
          $this->db->insert('student',$data);
         // $id = $this->db->last_insert_id;
	}
	
	
	function addTeacher($e,$f,$g,$h)
	{
	$query="insert into teachers values('','$e','$f','$g','$h','','','','')";
	$this->db->query($query);
	}	
}
?>

<?php
class Hello_Model extends CI_Model 
{
	function saverecords($name,$email,$mobile)
	{
	$query="insert into student values('','$name','$email','$mobile','','','','','')";
	$this->db->query($query);
	}
}
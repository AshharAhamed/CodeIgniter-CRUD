<?php 
   class studentsAttendance extends CI_Controller { 
	
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	// $this->load->database();
	
	//load Model
	$this->load->model('add_Model');
	}
 
    public function index() { 
        //load registration view form
		$this->load->view('studentsAttendance');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$m=$this->input->post('fname');
		$n=$this->input->post('mname');
		$p=$this->input->post('lname');
		$q=$this->input->post('gender');
		
		
		
//call saverecords method of Student_Model and pass variables as parameter
		$this->add_Model->addTeacher($m,$n,$p,$q);	
		echo "Records Saved Successfully";
		}
      } 
   } 
?>
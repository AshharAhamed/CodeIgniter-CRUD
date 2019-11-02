<?php 
   class update_ctrl extends CI_Controller { 
	
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	// $this->load->database();
	//load Model
	$this->load->model('update_model');
	}

	function show_student_id() {
	$id = $this->uri->segment(3);
	$data['students'] = $this->update_model->show_students();
	$data['single_student'] = $this->update_model->show_student_id($id);
	$this->load->view('update_view', $data);
	}
	function update_student_id() {
	$id= $this->input->post('stdid');
	$data = array(
	'FirstName' => $this->input->post('fname'),
	'MiddleName' => $this->input->post('mname'),
	'LastName' => $this->input->post('lname'),
	'Gender' => $this->input->post('gender')
	);
	$this->update_model->update_student_id($id,$data);
	echo "Records Saved Successfully";
	$this->show_student_id();
}
}
?>
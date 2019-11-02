<?php
class allStudents extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('viewModel'); // load model 
 }
 
 public function index() {
   $this->data['records'] = $this->viewModel->viewStudents(); // calling Post model method getPosts()
   $this->load->view('allStudents', $this->data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>
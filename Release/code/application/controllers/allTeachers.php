<?php
class allTeachers extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('viewModel'); // load model 
 }
 
 public function index() {
   $this->data['records'] = $this->viewModel->viewTeachers(); // calling Post model method getPosts()
   $this->load->view('allTeachers', $this->data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>
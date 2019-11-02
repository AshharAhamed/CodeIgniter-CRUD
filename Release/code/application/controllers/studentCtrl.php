<?php 
   class studentCtrl extends CI_Controller { 
	
	public function __construct()
	{
	//call CodeIgniter's default Constructor
//	 function __Construct(){
         parent::__Construct ();
 //        $this->load->database(); // load database
 //        $this->load->model('viewModel'); // load model 
 }
	//load database libray manually
	// $this->load->database();
	
	//load Model
	//$this->load->model('add_Model');
	//}
         

 
        
        
    public function index() { 
        //load registration view form
		$this->load->view('teacher');
		
      } 
   

 
    public function editStd($id) { 
        //load registration view form
        $this->load->model('studentModel');
        
        if(isset($_POST['btnUpdate'])){
            
            if($this->studentModel->updateStudent($id)){
              //  $this->session->set_flashdata('success','Student are details updated successfully');
                redirect('studentCtrl/editStd/'. $id,'refresh');
            }else{
            //    $this->session->set_flashdata('error','An error occured. Please try again later.');
                redirect('studentCtrl/editStd/'. $id,'refresh');
            }
        }
        $data['stds'] = $this->studentModel->getStudent($id);
        $this->load->view('editStudent', $data);
	
		}
      
   } 
   
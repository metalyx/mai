<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_panel extends CI_Controller {

	public function __construct() 
     {
          parent:: __construct();
          $this->load->model('admin_model');
          $this->load->model('workdb_model');
          $this->load->helper('form'); 
     }

     function change_info_student()
	 {
	 	$page2 = "workdb_upd_student";
		$id = $aObj->get_id();
		
		$student = $this->admin_model->get_e_student($id);
		
		$this->load->view('templates/bootstrap.php');
	  	$this->load->view('templates/headeradmin.php');
	  	$this->load->view('pages/'.$page2.'.php', array('student' => $student, 'id' => $id,));

	  	var_dump($student);
   		
	 }

	 function apply_changes_student()
	 {
	 	require_once(APPPATH.'controllers/workdb.php'); //include controller
           $aObj = new a();  //create object 
           $aObj->get_id(); //call function
	 	$id = $aObj->get_id();
	 	$this->form_validation->set_rules('Go', 'Go', 'required'); 
   		if($this->form_validation->run() == TRUE)
   		{
   			
   			var_dump($student);
	   		$btn = $this->input->post('Go');
		 	$name = $this->input->post('name', TRUE);
		 	$surname = $this->input->post('surname', TRUE);
		 	$second_name = $this->input->post('second_name', TRUE);
		 	$phone = $this->input->post('phone', TRUE);
		 	$birthdate = $this->input->post('birthdate', TRUE);
		 	$id_group = $this->input->post('id_group', TRUE);
		 	$id_caf = $this->input->post('id_caf', TRUE);
		 	$id_faculty = $this->input->post('id_faculty', TRUE);
		 	$login = $this->input->post('login', TRUE);
		 	$id_type = $this->input->post('id_type', TRUE);
		 	$new_user_info = array(
	               'name' => $name,
	               'surname' => $surname,
	               'second_name' => $second_name,
	               'phone' => $phone,
	               'birthdate' => $birthdate,
	               'id_group' => $id_group,
	               'id_caf' => $id_caf,
	               'id_faculty' => $id_faculty,
	               'login' => $login,
	               'id_type' => $id_type,
	          );
		 	
	       	$this->workdb_model->upd_student($id, $new_user_info);
	 	}
	 }

}

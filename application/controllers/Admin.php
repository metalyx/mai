<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


public function __construct() 
     {
          parent:: __construct();
          $this->load->model('admin_model');
     }

function index($page)
{
	switch ($this->session->userdata('id_type'))
 		{
 			case 18://admin
 		
		$this->session->userdata();
		$subjects = $this->admin_model->get_subjects();
		$groups = $this->admin_model->get_groups();
		$students = $this->admin_model->get_students();
		$teachers = $this->admin_model->get_teachers();
		$admins = $this->admin_model->get_admins();
	 	 $this->load->view('templates/bootstrap.php');
	 	 $this->load->view('templates/headeradmin.php');
	 	 $this->load->view('pages/'.$page.'.php', array("subjects" => $subjects, "groups" => $groups, "students" => $students, "teachers" => $teachers, "admins" => $admins ));
	 	 $this->load->view('templates/footer.php');
	 	 break;
	}
}

function subjects()
{
	$this->index('subject_list');
}

function groups()
{
	$this->index('groups_list');
}

function students()
{
	$this->index('students_list');
}

function teachers()
{
	$this->index('teachers_list');
}

function administration()
{
	$this->index('admin_list');
}

function action()
{
	$this->index('subject_list_choice');
}

function panel()
{
	$action = $this->input->raw_input_stream;

	switch ($action){
		case "add=on":
			$this->index('add=on');
		break;
		case "upd=on":
			$this->index('upd=on');
		break;
		case "del=on":
			$this->index('del=on');
		break;
		default:
		$this->action();
		break;
	}
}












}
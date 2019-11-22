<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workdb extends CI_Controller {

	public function __construct() 
     {
          parent:: __construct();
          $this->load->model('admin_model');
          $this->load->model('workdb_model');
     }

	function index($page2, $page)
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
				 	$this->load->view('pages/'.$page2.'.php', array("subjects" => $subjects, "groups" => $groups, "students" => $students, "teachers" => $teachers, "admins" => $admins ));
				 	 $this->load->view('pages/'.$page.'.php', array("subjects" => $subjects, "groups" => $groups, "students" => $students, "teachers" => $teachers, "admins" => $admins ));
				 	 // $this->load->view('templates/footer.php');
			 	 break;
		}
	}

	function get_id()
	{
		return $this->input->post('id', TRUE);
		
	}

	function get_student()
	{
		$name = $this->input->post('name', TRUE);
		$surname = $this->input->post('surname', TRUE);
		$birthdate = $this->input->post('birthdate', TRUE);
		$id_group = $this->input->post('id_group', TRUE);
		$login = $this->input->post('login', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$array = array('name' => $name,
			'surname' => $surname,
			'birthdate' => $birthdate,
			'id_group' => $id_group,
			'login' => $login,
			'password' => $password,
		);
		return $array;
	}

	function get_subject()
	{
		$name = $this->input->post('name', TRUE);
		return $name;
	}

	function get_group()
	{
		$name = $this->input->post('name', TRUE);
		return $name;
	}

	function get_teacher()
	{
		$name = $this->input->post('name', TRUE);
		$surname = $this->input->post('surname', TRUE);
		$birthdate = $this->input->post('birthdate', TRUE);
		$login = $this->input->post('login', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$array = array('name' => $name,
			'surname' => $surname,
			'birthdate' => $birthdate,
			'login' => $login,
			'password' => $password,
		);
		return $array;
	}

	function get_admin()
	{
		$name = $this->input->post('name', TRUE);
		$surname = $this->input->post('surname', TRUE);
		$birthdate = $this->input->post('birthdate', TRUE);
		$login = $this->input->post('login', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$array = array('name' => $name,
			'surname' => $surname,
			'birthdate' => $birthdate,
			'login' => $login,
			'password' => $password,
		);
		return $array;
	}

	function add_subject() 
	{
		$this->index('empty_page','workdb_new_subject');
		$this->load->helper('form'); 
	    $this->form_validation->set_rules('name', 'Имя', 'required'); 

	    if ($this->form_validation->run() == FALSE)
	    {
	      $this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			if ($this->workdb_model->add_subject($this->get_subject()))
			{
				redirect(base_url().'admin/subjects'); 
			}
			else
			{
				echo 'lol';
			}
		}

	}

	function add_group()
	{
		$this->index('empty_page','workdb_new_group');
		$this->load->helper('form'); 
		$this->form_validation->set_rules('name', 'Имя', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      $this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			if ($this->workdb_model->add_group($this->get_group()))
			{
				redirect(base_url().'admin/groups'); 
			}
			else
			{
				echo 'lol';
			}
		}
	}

	function add_student()
	{
		$this->index('empty_page','workdb_new_student');
		$this->load->helper('form'); 
		$this->form_validation->set_rules('name', 'Имя', 'required'); 
		$this->form_validation->set_rules('surname', 'Фамилия', 'required'); 
		$this->form_validation->set_rules('birthdate', 'Дата рождения', 'required'); 
		$this->form_validation->set_rules('id_group', 'id_group', 'required'); 
	    $this->form_validation->set_rules('login', 'Логин', 'required'); 
	    $this->form_validation->set_rules('password', 'Пароль', 'required');

	    if ($this->form_validation->run() == FALSE)
	    {
	      $this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			if ($this->workdb_model->add_student($this->get_student()))
			{
				redirect(base_url().'admin/students'); 
			}
			else
			{
				echo 'lol';
			}
		}
	}
	

	function add_teacher()
	{
		$this->index('empty_page','workdb_new_teacher');
		$this->load->helper('form'); 
		$this->form_validation->set_rules('name', 'Имя', 'required'); 
		$this->form_validation->set_rules('surname', 'Фамилия', 'required'); 
		$this->form_validation->set_rules('birthdate', 'Дата рождения', 'required'); 
	    $this->form_validation->set_rules('login', 'Логин', 'required'); 
	    $this->form_validation->set_rules('password', 'Пароль', 'required');

	    if ($this->form_validation->run() == FALSE)
	    {
	      $this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			if ($this->workdb_model->add_teacher($this->get_teacher()))
			{
				redirect(base_url().'admin/teachers'); 
			}
			else
			{
				echo 'lol';
			}
		}
	}

	function add_admin()
	{
		$this->index('empty_page','workdb_new_admin');
		$this->load->helper('form'); 
		$this->form_validation->set_rules('name', 'Имя', 'required'); 
		$this->form_validation->set_rules('surname', 'Фамилия', 'required'); 
		$this->form_validation->set_rules('birthdate', 'Дата рождения', 'required'); 
	    $this->form_validation->set_rules('login', 'Логин', 'required'); 
	    $this->form_validation->set_rules('password', 'Пароль', 'required');

		if ($this->form_validation->run() == FALSE)
	    {
	      
	    }
	    else
	    {
			if ($this->workdb_model->add_admin($this->get_admin()))
			{
				redirect(base_url().'admin/administration'); 
			}
			else
			{
				echo 'lol';
			}
		}
	}

	function del_student()
	{
		$this->index('what_id', 'students_list');
		

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      	$this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			$id = $this->get_id();
		
			if ($this->workdb_model->del_student($id))
				{
					redirect(base_url().'admin/students'); 
				}
				else
				{
					echo 'lol';
				}
		
		}
	}

	function del_teacher()
	{
		$this->index('what_id', 'teachers_list');
		

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      	$this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			$id = $this->get_id();
		
			if ($this->workdb_model->del_teacher($id))
				{
					redirect(base_url().'admin/teachers'); 
				}
				else
				{
					echo 'lol';
				}
		
		}
	}

	function del_admin()
	{
		$this->index('what_id', 'admin_list');
		

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      	$this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			$id = $this->get_id();
		
			if ($this->workdb_model->del_admin($id))
				{
					redirect(base_url().'admin/administration'); 
				}
				else
				{
					echo 'lol';
				}
		
		}
	}
	function del_group()
	{
		$this->index('what_id', 'groups_list');
		

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      	$this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			$id = $this->get_id();
		
			if ($this->workdb_model->del_group($id))
				{
					redirect(base_url().'admin/groups'); 
				}
				else
				{
					echo 'lol';
				}
		
		}
	}

	function del_subject()
	{
		$this->index('what_id', 'subject_list');
		

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
	    {
	      	$this->session->set_flashdata('error', 'Необходимо заполнить все поля');
	    }
	    else
	    {
			$id = $this->get_id();
		
			if ($this->workdb_model->del_subject($id))
				{
					redirect(base_url().'admin/subjects'); 
				}
				else
				{
					echo 'lol';
				}
		
		}
	}

	function empty_page(){

	}

	function upd_student ()
	{
		$this->index('what_id', 'students_list');
		$this->form_validation->set_rules('id', 'id', 'required');

	}

	// function change_info_student($student)
	// {
	// 	$page2 = "workdb_upd_student";
		
	// 	$this->load->view('templates/bootstrap.php');
	//  	$this->load->view('templates/headeradmin.php');
	//  	var_dump($student);
	//  	var_dump($student);
	//  	$this->load->view('pages/'.$page2.'.php', $student);
	// 	$this->form_validation->set_rules('Go', 'Go', 'required');
	// 	if($this->form_validation->run() == FALSE)
	// 	{

	// 	}
	// 	else
	// 	{
	// 		var_dump($student);
	// 		$this->workdb_model->upd_student();
	// 	}
	// }
}
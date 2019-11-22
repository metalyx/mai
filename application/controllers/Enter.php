<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enter extends CI_Controller {

     public function __construct() 
     {
          parent:: __construct();
          $this->load->model('personal_model');
          $this->load->model('login_model');
     }

	function student_index($page)
 	{
          $login = $this->session->userdata('login');
          $id = $this->session->userdata('id');
         
          $userdata = $this->personal_model->get_userdata($login, $id);
          $usersubjects = $this->personal_model->get_usersubjects($id);
          $usergroups = $this->personal_model->get_usergroups($id);
          $userteachers = $this->personal_model->get_userteachers($id);
          $this->load->view('templates/bootstrap.php');
          $this->load->view('templates/headerstudent.php');
          $this->load->view('pages/'.$page.'.php', array('userdata' => $userdata, 'usersubjects' => $usersubjects, 'usergroups' => $usergroups, 'userteachers' => $userteachers,));
          $this->load->view('templates/footer.php');
 	}

     function teacher_index($page)
     {
          $login = $this->session->userdata('login');
          $id = $this->session->userdata('id');
         
          $userdata = $this->personal_model->get_userdata($login, $id);
          $usersubjects = $this->personal_model->get_usersubjects($id);
          $usergroups = $this->personal_model->get_usergroups($id);
          $teachersgroups = $this->personal_model->get_teachersgroups($id);
          $this->load->view('templates/bootstrap.php');
          $this->load->view('templates/headerteacher.php');
          $this->load->view('pages/'.$page.'.php', array('userdata' => $userdata, 'usersubjects' => $usersubjects, 'teachersgroups' => $teachersgroups,));
          $this->load->view('templates/footer.php');
     }

     function admin_index($page)
     {
          $login = $this->session->userdata('login');
          $id = $this->session->userdata('id');
         
          $userdata = $this->personal_model->get_userdata($login, $id);
          $usersubjects = $this->personal_model->get_usersubjects($id);
          $usergroups = $this->personal_model->get_usergroups($id);
          $this->load->view('templates/bootstrap.php');
          $this->load->view('templates/headeradmin.php');
          $this->load->view('pages/'.$page.'.php', array('userdata' => $userdata, 'usersubjects' => $usersubjects, 'usergroups' => $usergroups,));
          $this->load->view('templates/footer.php');
     }

 	function personal_area()
 	{
 	
 		switch ($this->session->userdata('id_type'))
 		{
 			case 16://студент
 				$this->student_index('personal_area');
 				break;
 			case 17://препод
 				$this->teacher_index('personal_area');
 				break;
 			case 18://admin
 				$this->admin_index('personal_area');
 				break;
 		}
 	}

     function change_info()
     {
          $page = 'personal_area_changing';
          switch ($this->session->userdata('id_type'))
          {
               case 16://студент
                    $this->student_index('personal_area_changing');
                    break;
               case 17://препод
                    $this->teacher_index('personal_area_changing');
                    break;
               case 18://admin
                    $this->admin_index('personal_area_changing');
                    break;
          }
          $login=$this->session->userdata('login');
          $name=$this->input->post('name', TRUE);
          $surname=$this->input->post('surname', TRUE);
          $second_name=$this->input->post('second_name', TRUE);
          $phone=$this->input->post('phone', TRUE);
          $birthdate=$this->input->post('birthdate', TRUE);

          $new_user_info = array(
               'name' => $name,
               'surname' => $surname,
               'second_name' => $second_name,
               'phone' => $phone,
               'birthdate' => $birthdate,
          );
          $this->personal_model->change_info($login, $new_user_info);
          
   }

     function journal()
     {
          switch ($this->session->userdata('id_type'))
          {
               case 16://студент
                    $this->student_index('journal_student');
                    break;
               case 17://препод
                    $this->teacher_index('journal_teacher');
                    break;
               case 18://admin
                    $this->admin_index('journal_admin');
                    break;
               default:
                    redirect(base_url().'main/view/home');
                    break;
          }

     }

     function teachers()
     {
          switch ($this->session->userdata('id_type'))
          {
               case 16://студент
                    $this->student_index('teachers_student');
                    break;
               case 17://препод
                    $this->teacher_index('teachers_teacher');
                    break;
               case 18://admin
                    $this->admin_index('teachers_admin');
                    break;
          }

     }     

     function tgroup ()
     {
          switch ($this->session->userdata('id_type'))
          {
               case 17://препод
                    $this->teacher_index('groups4teacher');
                    break;
              
          }
     }

 	function logout()
 	{
 		$this->session->sess_destroy();
 		redirect(base_url().'main/view/home');
 	}
}
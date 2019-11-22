
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

  $this->load->library('form_validation');

 }

 function index()
 {
          $this->load->view('templates/bootstrap.php');
          $this->load->view('templates/header.php');
          $this->load->view('pages/login.php');
          $this->load->view('templates/footer.php');
 }


 
 public function login()
  {

    $this->index();
    $this->load->helper('form'); 
    $this->form_validation->set_rules('login', 'Логин', 'required'); 
    $this->form_validation->set_rules('password', 'Пароль', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->session->set_flashdata('error', 'Необходимо заполнить все поля');
    }
    else
    {
      $this->load->view('pages/formsuccess');
      $login=$this->input->post('login',TRUE);//получаем переменную name из массива $_POST
      $password=$this->input->post('password',TRUE);//получаем переменную password из массива $_POST


      $this->load->model('login_model');
      if($this->login_model->can_login($login, md5($password)))
      {
        $session_data = array(
          'login' => $login ,
          'id_type' => ($this->login_model->check_type($login)),
          'id' => ($this->login_model->check_id($login)),
        );
        
        $this->session->set_userdata($session_data);
        redirect(base_url() . 'enter/personal_area'); 
        //$user=$user->result();
        //$this->start_session($user[0]);
      }
      else
      {
        $this->session->set_flashdata('error', 'Неверный логин или пароль');
        redirect(base_url() . 'login/login');
      }
      //$user=$user->result();
      //$this->start_session($user[0]);
      //redirect(base_url() . 'main/enter'); 


      //$this->session->set_flashdata('error', 'Неверный логин или пароль');
    }
  }
}
?>

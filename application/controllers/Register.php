
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

  $this->load->library('form_validation');

 }

 function index()
 {
          $this->load->view('templates/bootstrap.php');
          $this->load->view('templates/header.php');
          $this->load->view('pages/register.php');
          $this->load->view('templates/footer.php');
 }


 

 public function register()
  {
    $this->index();
    $this->form_validation->set_rules('login', 'Логин', 'required'); 
    $this->form_validation->set_rules('password', 'Пароль', 'required');
    $this->form_validation->set_rules('password2', 'Повторный пароль', 'required|matches[password]');
    if ($this->form_validation->run() == FALSE)
    {
      //что-то не заполнено или не совпадают пароли
    }
    else
    {
      $login=$this->input->post('login',TRUE);//получаем переменную name из массива $_POST
      $password=$this->input->post('password',TRUE);//получаем переменную password из массива $_POST
      $this->load->model('register_model');
      if($this->register_model->register($login, md5($password)))
      {
        redirect('main/view/register_success');
      }
      else
      {
        $this->session->set_flashdata('error', 'Пользователь с таким логином уже существует.');
        redirect(base_url() . 'login/login');
      }
    }
  }




}
?>

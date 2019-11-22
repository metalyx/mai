<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

		public function view($page)
		{

			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        		{
	                // Whoops, we don't have a page for that!
	                 show_404();
        		}
        	if ($this->session->userdata('login') == null)
        	{
        		$this->load->view('templates/bootstrap.php');
	        	$this->load->view('pages/welcome.php');
        	}
        	else
        	{
        		$this->load->view('templates/bootstrap.php');
        		switch ($this->session->userdata('id_type'))
		 		{
		 			case 16://студент
		 				$this->load->view('templates/headerstudent.php');
		 				break;
		 			case 17://препод
		 				$this->load->view('templates/headerteacher.php');
		 				break;
		 			case 18://admin
		 				$this->load->view('templates/headeradmin.php');
		 				break;
		 		}
	        	$this->load->view('pages/'.$page.'.php');
	        	$this->load->view('templates/footer.php');
        	}
		}

		
	}
<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {  
      //functions  
      public function index()  
      {  
           //http://localhost/covid-back/main/login  
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view("login", $data);  
      }  
		   function login_validation()  
		  {  
			   $this->load->library('form_validation');  
			   $this->form_validation->set_rules('username', 'Username', 'required');  
			   $this->form_validation->set_rules('password', 'Password', 'required');  
			   if($this->form_validation->run())  
			   {  
					//true  
					$username = $this->input->post('username');  
					$password = $this->input->post('password');  
					//model function  
					$this->load->model('main_model');  
					if($this->main_model->can_login($username, $password))  
					{  
						 $session_data = array(  
							  'username'     =>     $username  
						 );  
						 $this->session->set_userdata($session_data);  
						 redirect(base_url() . 'Accueil.html');  
					}  
					else  
					{  
						 $this->session->set_flashdata('error', 'Invalid Username and Password');  
						 redirect(base_url() . 'authentification.html');  
					}  
			   }  
			   else  
			   {  
					//false  
					$this->login();  
			   }  
		  }  
		  public function modifier_text()
		  {
				$data=array();
				$text=$this->input->post('nom');
				$this->load->model('main_model');
				$data['nom'] = $this->main_model->modify($text);
				redirect(base_url() . 'madagascar/index/1'); 
				//$this->load->view('template', $data);
		  
		  }
		  public function updateText()
		  {
				$data=array();
				$id=$this->input->post('id');
				$title=$this->input->post('sousTitre');
				$text=$this->input->post('content');
				$this->load->model('main_model');
				$data['nom'] = $this->main_model->modify_text($title,$text,$id);
				redirect(base_url() . 'Accueil.html'); 
				//$this->load->view('template', $data);
		  
		  }
		  public function modify($id)
		  {
			$data=array();
			$this->load->model('Main_model');
			$data['contenue'] = $this->Main_model->get_info($id);
			$this->load->view('Madagascar', $data);
		  }
		public function Home() 
		{
			$data=array();
			$this->load->model('Accueil_model');
			$data['titre'] = $this->Accueil_model->get_page_name();
			$data['contenue'] = $this->Accueil_model->get_page_content();
			$this->load->view('Home', $data);

		} 
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'authentification.html');  
      }  
 }  
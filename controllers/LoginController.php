<?php
	class LoginController extends CI_Controller{
		public function index(){
			$this->load->view('login');
		}
		public function checkLogin(){
			$this->form_validation->set_rules('username' ,'Username','required|valid_email');
			$this->form_validation->set_rules('password','Password','required|callback_verifyUser');
			if($this->form_validation->run() == false){
			$this->load->view('login');
			
			}
			else
			{
				redirect('HomeController/index');
			}
			
			}
			public function verifyUser(){
			$name = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->load->model('LoginModel');
			if($this->LoginModel->Login($name, $pass)){
				return true;
			}
			else {
			
			$this->form_validation ->set_message('verifyUser','');
			return false;
			}
		
	}
	}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->model('Generic_model', 'generic');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function loginData(){
		$email=$this->input->post('userEmail');
		$pass=$this->input->post('userPassword');
		$pass=md5($pass);

		$loginData=$this->generic->LoginData($email,$pass);
		
		if($loginData){
			//set session
			$this->session->set_userdata('loginData', $loginData[0]);
			redirect(base_url('dashboard'));
		}else{
			$this->session->set_flashdata('error_msg', 1);
			redirect(base_url());
		}
	}
	public function Dashboard(){
		if ($this->session->userdata('loginData')) {
			$this->load->view('dashboard');			
		}else{
			redirect(base_url());
		}
	}

//Add new IPR 
public function addNewIPR(){
	if ($this->session->userdata('loginData')) {
		$this->load->view('add-new-ipr');
	}else{
		redirect(base_url());
	}
}





	public function LogOut(){
		$this->session->unset_userdata('loginData');
		redirect(base_url());
	}
	
}

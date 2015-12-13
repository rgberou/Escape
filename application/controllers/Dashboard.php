<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->model('user');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('html');
	}
	public function index()
	{
		$data['title'] = "Escape";
		//$data['student'] = $this->student->retrieve_student_info();
		//$this->load->view('user_info', $data);
		//$this->load->view('template/header');
		//$this->home();
		$this->load->view('home');
	}
	public function home(){
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('template/page-content');
		$this->load->view('template/footer');
	}
	public function trial(){
		$this->load->view('student_info');
	}
	public function admin_register(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id','Id','required|is_unique[admin.admin_id]');
		$this->form_validation->set_rules('username','Username','required|is_unique[admin.admin_email]');
		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[admin.admin_email]');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('template/header');
			$this->load->view('template/navigation');
			$this->load->view('template/page-content');
			$this->load->view('template/footer');
		}else{
			$this->load->view('template/header');
			$this->load->view('template/navigation');
			$this->load->view('template/page-content');
			$this->load->view('template/footer');
		}
		
		
	}
	public function login(){
		$data['user'] = $this->input->post('username');
  		$data['pass'] = $this->input->post('password');
  		//$this->verifyuser($data);
  		if($user['user_info']=$this->user->getcredentials($data['user'],$data['pass'])){
  			$this->home();
  		}else{
  			redirect(base_url());
  		}
	}
	public function getUsers(){
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$data['user']=$this->load->user->getUsers();
		$this->load->view('template/page-content',$data);
		$this->load->view('template/footer');
	}
}

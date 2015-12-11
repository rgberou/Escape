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
		$data['choice'] =0;
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('template/page-content',$data);
		$this->load->view('template/footer');
	}
	public function trial(){
		$this->load->view('student_info');
	}
	public function reg_street(){
		$data['choice'] =1;
		$this->user->street_register();
		
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('template/page-content',$data);
		$this->load->view('template/footer');

	}
	public function insert_user()
	{	
		$this->user->user_register();
		$this->index();
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
	public function verifyuser($data){

		$this->load->view('street',$data);
	}

}

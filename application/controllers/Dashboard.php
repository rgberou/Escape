<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
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
		$this->load->library('session');

		
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
	public function map_display(){
		$this->load->library('googlemaps');
		$data['title'] = "Escape";
		$data['content'] = 'template/map.php';
		$config['trafficOverlay'] = TRUE;
		$config['center'] = 'Mandaue City, Cebu';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$this->load->view($this->layout,$data);
		
	}

	public function editUser(){
		$id = $this->uri->segment(3, 0);
	}
	public function deleteUser(){

	}
	public function home(){
		$this->map_display();
	}
	public function admin_register(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id','Id','required|is_unique[account.account_id]');
		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[account.account_email]');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('gender','Gender','required');
		if($this->form_validation->run()==FALSE){
			//$this->load->view('master_layout',$data);
			redirect($this->layout.'/userlist');
		}else{
			//$this->load->view('master_layout'$data);
			$this->user->admin_register();
			$this->form_validation->clear_field_data();
			redirect($this->layout.'/userlist');

		}
		
		
	}
	public function login(){
		$data['email'] = $this->input->post('email');
  		$data['pass'] = $this->input->post('password');
  		//$this->verifyuser($data);
  		if($user=$this->user->getcredentials($data['email'],$data['pass'])){
  			//print_r($user['userid']);
  			$this->sess($user);
  		}else{
  			redirect(base_url());
  		}
	}
	public function sess($info){
		
		foreach ($info as $ad): 
  			$user = array(
            'account_id' => $ad->account_id,
            'account_lname' => $ad->account_lname,
            'account_fname' => $ad->account_fname,
            'account_email' => $ad->account_email
         	);
  		endforeach;
  		$this->session->set_userdata('data', $user); 
  		
  		$this->home();
		//$this->setSession('userid',$user['userid']);
		//print_r($this->setSession->all_userdata());
	}
	public function userlist(){
		$data['content']='template/userlist.php';
		$data['user']=$this->user->getUsers();
		$this->load->view($this->layout,$data);
	}
	public function postslist(){
		$data['content']='template/posts.php';
		$data['user']=$this->user->getUsers();
		$this->load->view($this->layout,$data);
	}
	public function usertype($type){
		if($type=='A'){
			return 'Admin';
		}else if($type=='M'){
			return 'Member';
		}else{
			return 'Enforcer';
		}
	}
	

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

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
	public function mobile_posts(){
		$this->load->model('user');
		$data['posts']=$this->user->getPosts();
		//echo json_encode($data['posts']);
		//$posts=json_encode($data['posts']);
		$post=$data['posts'];
		$post_data = array(
			'account_id' => $post->account_id,
			'account_lname' => $post->account_lname,
			'account_fnmae' => $post->account_fname
			
    	);
		echo json_encode($post_data);
		
	}
	
	public function index()
	{
		$data['title'] = "Escape";
		//$data['student'] = $this->student->retrieve_student_info();
		//$this->load->view('user_info', $data);
		//$this->load->view('template/header');
		$data['error'] = "";
		$this->load->view('home',$data);
		
	}
	public function mobileposts(){
		$this->load->model('user');
		$this->load->view($this->layout,$data);
	}
	
	public function map(){
		
		$data['content'] = 'template/traf.php';
		$this->load->view($this->layout,$data);
		
	}

	public function editUser(){
		$id = $this->uri->segment(3, 0);
	}
	public function updatepost(){
		$id = $this->uri->segment(3, 0);
		$this->user->updatepost($id);
		redirect('dashboard/postslist');
	}
	public function home(){
		redirect('dashboard/map');
	}
	
	public function admin_register(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('lastname','Lastname','required|alpha');
		$this->form_validation->set_rules('firstname','Firstname','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[member.account_email]');
		$this->form_validation->set_rules('username','Username','required|is_unique[member.account_username]');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('gender','Gender','required');
		if($this->form_validation->run()==FALSE){
			$data['content']='template/register.php';
			$this->load->view('master_layout',$data);
			
		}else{
			$data['content']='template/register.php';
			$this->load->view('master_layout',$data);
			$this->user->admin_register();
			$this->input->post('username');
			$this->input->post('username');
			$this->input->post('username');
			$this->input->post('username');
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
  			
  			redirect(base_url(),$data);
  		}
	}
	public function sess($info){
		
		foreach ($info as $ad): 
  			$user = array(
            'account_id' => $ad->account_id,
            'account_lname' => $ad->account_lastname,
            'account_fname' => $ad->account_firstname,
            'account_email' => $ad->account_email
         	);
  		endforeach;
  		$this->session->set_userdata('data', $user); 
  		
  		redirect('dashboard/home');
		//$this->setSession('userid',$user['userid']);
		//print_r($this->setSession->all_userdata());
	}
	public function userlist(){
		$data['content']='template/userlist.php';
		$data['user']=$this->user->getUsers();
		$this->load->view($this->layout,$data);
	}
	public function register(){
		$data['content']='template/register.php';
		$data['user']=$this->user->getUsers();
		$this->load->view($this->layout,$data);
	}
	public function postslist(){
		$data['content']='template/trafficpost.php';
		$data['posts']=$this->user->Unapprovedpost();
		$data['address']='http://192.168.254.102';
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
	public function change_pass(){
	
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']=465;
		$config['smtp_user']='ways2bit@gmail.com';
		$config['smtp_pass']='bit123456';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('ways2bit@gmail.com', 'Hasan Hasibul');
		$this->email->to('brotark@gmail.com');
		$this->email->subject('email test');
		$this->email->message('testing the email class. email sent');
		if($this->email->send()){
    		echo"Your email was sent successfully";
		} else {
    		show_error($this->email->print_debugger());
		}

		$result = $this->email->send();


	}


	

}

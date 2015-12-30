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
	public function mobile_reg(){
		$this->load->model('user');
		$this->user->member_register();
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
			'account_fnmae' => $post->account_fname,
			'media_id' => $post->media_id,
			'date_posted' => $post->date_posted,
			'media_content' => base64_encode($post->media_content),
			'time_posted' => $post->time_posted,
			'dist_type' => $post->caption,
			'status' => $post->status,
    	);
		$post_data=json_encode($post_data);
		echo $post_data;
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
		
		$data['content'] = 'template/map.php';
		$this->load->library('googlemaps');
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '37.429, -122.1419';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view($this->layout,$data);
		
	}
	public function map(){
		
		$data['content'] = 'template/traf.php';
		$this->load->library('googlemaps');
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
		$marker = array();
		$marker['position'] = '37.429, -122.1419';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

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
		$data['content']='template/posts.php';
		$data['posts']=$this->user->getPosts();
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

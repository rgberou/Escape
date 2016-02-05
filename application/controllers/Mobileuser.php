<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobileuser extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->model('user');
		$this->load->model('posts');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('session');
		
	}
	public function mobile_reg(){
		$this->load->model('user');
		if($user=$this->user->member_register()){
			echo "Registration Success!";
		}else{
			echo "failed";
		}
	}
	public function login(){
		$data['username'] = $this->input->post('username');
  		$data['password'] = $this->input->post('password');

  		if($user=$this->user->getcredent($data['username'],$data['password'])){
  			echo "Success";
  		}else{
  			echo "error";
  		}
	}
	
	public function newsfeed(){
		$data['posts']=$this->posts->getTrafficUpdates();
		$data['address']='http://192.168.254.102';
		$this->load->view('template/newsfeed',$data);
	}
	public function TrafficMarker(){
		$this->load->helper('date');
		if($data['marker']=$this->posts->getTrafficUpdates()){
			echo json_encode($data['marker']);
		}else{
			echo("error");
		}
		


	}


	

}

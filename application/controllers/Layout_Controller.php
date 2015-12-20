<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout_Controller extends CI_Controller{
	
	public $layout;
		
	public function __construct()
	{
		parent::__construct();
		$this->layout='master_layout';
		
	}
	

}

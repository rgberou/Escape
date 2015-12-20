<?php

class MY_Controller extends CI_Controller{
	
	public $layout;
		
	public function __construct()
	{
		parent::__construct();
		$this->layout='master_layout';
		
	}
	

}

?>
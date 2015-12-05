<?php 
	class User extends CI_Model
	{
		public function user_register()
		{
			$data = array(
					'account_username' => $this->input->post('username'),
					'account_lastname' => $this->input->post('lastname'),
					'account_firstname' => $this->input->post('firstname'),
					'account_password' => $this->input->post('password'),
					'account_gender' => $this->input->post('gender'),
					'account_type' => $this->input->post('type'),
					'account_status' => '0',
					'account_email' => $this->input->post('email'),
					'loggedin' => '0',
				);
				
			$query = $this->db->insert('account', $data);
		}
		public function street_register()
		{
			$data = array(
				'street_name' => $this->input->post('streetname')
			);	
			$query = $this->db->insert('street', $data);
		}
		public function intersection_register()
		{
			$data = array(
				'street_id' => $this->input->post('streetid')
			);
				
			$query = $this->db->insert('street', $data);
		}
		
		
			//return $query->result();
			function getcredentials($username, $password)
 			{
   				$this -> db -> select('account_lastname, account_firstname');
   				$this -> db -> from('account');
   				$this -> db -> where('account_username', $username);
   				$this -> db -> where('account_password',$password);
   			
 
   				$query = $this -> db -> get();
 
   				if($query -> num_rows() == 1)
   				{
     				return $query->result();
   				}
   				else
   				{
     				return false;
   				}
   				
 			}
		
	}
?>
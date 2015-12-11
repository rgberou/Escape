<?php 
	class User extends CI_Model
	{
		public function admin_register()
		{
			$data = array(
					'admin_id' => $this->input->post('id'),
					'admin_username' => $this->input->post('username'),
					'admin_lastname' => $this->input->post('lastname'),
					'admin_firstname' => $this->input->post('firstname'),
					'password' => $this->input->post('password'),
					'gender' => $this->input->post('gender'),
					'conn_status' =>'0' ,
					'admin_type' => $this->input->post('type'),
					'admin_email' => $this->input->post('email'),
			);		
			$query = $this->db->insert('admin', $data);
			if ($query) {
				return true;
			}else{
				return false;
			}
			
		}
		
		
			//return $query->result();
		public	function getcredentials($username, $password)
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
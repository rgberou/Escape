<?php 
	class User extends CI_Model
	{
		public function admin_register()
		{
			$data = array(
					'account_id' => $this->input->post('id'),
					'account_lname' => $this->input->post('lastname'),
					'account_fname' => $this->input->post('firstname'),
					'password' => md5('12345'),
					'gender' => $this->input->post('gender'),
					'conn_status' =>'0' ,
					'account_type' => $this->input->post('type'),
					'account_email' => $this->input->post('email'),
			);		
			$query = $this->db->insert('account', $data);
			if ($query) {
				return true;
			}else{
				return false;
			}
			
		}

		public function getUsers(){
			$this->db->select('*');
    		$this -> db -> from('account');
    		$query = $this -> db -> get();
   			return $query->result();
		}
		
		public function edit($user){
			
		}
		
			//return $query->result();
		public	function getcredentials($email, $password)
 			{
   				$this -> db -> select('*');
   				$this -> db -> from('account
   					');
   				$this -> db -> where('account_email', $email);
   				$this -> db -> where('password',$password);

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
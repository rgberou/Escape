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
		public function getPosts(){
			$this->db->select('
						account.account_id,
						account.account_lname,
						account.account_fname,
						traffic_media.media_id,
						traffic_media.date_posted,
						traffic_media.media_content,
						traffic_media.time_posted,
						traffic_media.dist_type,
						traffic_media.caption,
						traffic_media.status

				');
    		$this -> db -> from('traffic_media');
    		$this->db->join('account', 'traffic_media.account_id=account.account_id'); 
    		$this->db->where('traffic_media.status','0');
    		$query = $this -> db -> get();
   			return $query->result();
		}
		
		public function edit($user){
			
		}
		public function updatePost($id){
			$data = array(
					'status' => '1'	
			);	
			$this->db->where('media_id', $id);
			$this->db->update('traffic_media', $data); 

		}
		
			
		public	function getcredentials($email, $password)
 			{
   				$this -> db -> select('*');
   				$this -> db -> from('account');
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
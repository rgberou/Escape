<?php 
	class User extends CI_Model
	{
		public function admin_register()
		{

			$data = array(
					'account_username' => $this->input->post('username'),
					'account_lastname' => $this->input->post('lastname'),
					'account_firstname' => $this->input->post('firstname'),
					'account_password' => md5('lastname'),
					'account_gender' => $this->input->post('gender'),
					'account_status' =>'0' ,
					'conn_status' =>'0' ,
					'account_type' => $this->input->post('type'),
					'account_email' => $this->input->post('email')
			);		
			$query = $this->db->insert('member', $data);
			if ($query) {
				return true;
			}else{
				return false;
			}	
		}
		public function member_register()
		{
			$data = array(
					'account_username' => $this->input->post('username'),
					'account_lastname' => $this->input->post('lastname'),
					'account_firstname' => $this->input->post('firstname'),
					'account_password' => $this->input->post('password'),
					'account_gender' => $this->input->post('gender'),
					'account_status' =>'0' ,
					'conn_status' =>'0' ,
					'account_email' => $this->input->post('email'),
			);		
			$query = $this->db->insert('member', $data);
			if ($query) {
				return true;
			}else{
				return false;
			}
			
		}
		public function getUsers(){
			$this->db->select('*');
    		$this -> db -> from('member');
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
    		$data=$query->result();
   			return $data;
		}
		public function getPostsTraffic(){
			$this->db->select('
						post.image_path,
						post.caption,
						post.location,
						post.time_posted,
						post.date_posted,
						post.dist_type,
						member.account_username,
						member.account_lastname,
						member.account_firstname
				');
    		$this -> db -> from('post');
    		$this->db->join('member','post.userid=member.userid'); 
    		$this->db->order_by("post.image_id", "desc"); 
    		$this->db->where('post.status','1');
    		$query = $this -> db -> get();
   			return $query->result();
		}
		public function Unapprovedpost(){
			$this->db->select('
						post.image_id,
						post.image_path,
						post.caption,
						post.location,
						post.time_posted,
						post.date_posted,
						post.dist_type,
						member.account_username,
						member.account_lastname,
						member.account_firstname
				');
    		$this -> db -> from('post');
    		$this->db->join('member','post.userid=member.userid'); 
    		$this->db->where('post.status','0');
    		$this->db->order_by("post.image_id", "desc"); 
    		$query = $this -> db -> get();
   			return $query->result();
		}
		
		
		public function updatePost($id){
			$data = array(
					'status' => '1'	
			);	
			$this->db->where('image_id', $id);
			$this->db->update('post', $data); 

		}
		
			
		public	function getcredentials($email, $password){
   				$this -> db -> select('*');
   				$this -> db -> from('member');
   				$this -> db -> where('account_email', $email);
   				$this -> db -> where('account_password',$password);
   				$this -> db -> where('account_type','A');
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
 		public	function getcredent($user, $password){
   				$this -> db -> select('*');
   				$this -> db -> from('member');
   				$this -> db -> where('account_username', $user);
   				$this -> db -> where('account_password',$password);
   				$this -> db -> where("(account_type='M' OR account_type='E')");
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
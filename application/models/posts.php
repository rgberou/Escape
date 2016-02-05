<?php 
	class Posts extends CI_Model
	{
		public function getTrafficUpdates(){
			

			$this->db->select('
						post.image_path,
						post.caption,
						post.location,
						post.time_posted,
						post.date_posted,
						post.dist_type,
						post.lat,
						post.lng,
						member.account_username,
						member.account_lastname,
						member.account_firstname
				');
    		$this -> db -> from('post');
    		$this->db->join('member','post.userid=member.userid'); 
    		$this->db->order_by("post.image_id", "desc"); 
    		$this->db->where('post.status','1');
    		$this->db->where('post.date_posted','CURDATE()', FALSE);
    		$query = $this -> db -> get();
   			return $query->result();
		}
		
		
	}
?>
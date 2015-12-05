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
		
		/*public function retrieve_student_info()
		{
			$query = $this->db->get('account');
			return $query->result();
		}*/
	}
?>
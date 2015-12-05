<?php 
	class Admin extends CI_Model
	{
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
		public function coordinates_register()
		{
			$data = array(
				'intersection_id' => $this->input->post('streetid'),

			);
			$query = $this->db->insert('intersection', $data);
		}
	
	}
?>
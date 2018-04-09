<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class new_customer_model extends CI_Model 
{
	public function authenticate($data)
	{
		$this->load->database();
		$this->db->insert('customer',$data);
		
		
	}
	public function check($sid)
	{
		$this->load->database();
		$this->db->select('sid');
		$this->db->from('customer');
		$this->db->where('sid',$sid);

		$query=$this->db->get();

		
			 return $query->result_array();
	
		
	}
}
?>
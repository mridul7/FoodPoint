<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_names_model extends CI_Model 
{
	public function authenticate()
	{
		
		$this->load->database();

		$this->db->select('vshop');
		$this->db->from('vendor');
		
         
		$query=$this->db->get();

		if($query->num_rows()>=1)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
		
	}
}
?>





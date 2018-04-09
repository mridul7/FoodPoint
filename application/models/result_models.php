<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class result_models extends CI_Model 
{
	public function name($nam)
	{
		
		$this->load->database();

		$this->db->select('vshop');
		$this->db->from('vendor');
		$this->db->where('vcode',$nam);

         
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





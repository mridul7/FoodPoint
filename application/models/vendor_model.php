<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_model extends CI_Model 
{
	public function authenticate($pwd,$id)
	{
		$this->load->database();
		$this->db->select('vcode');
		$this->db->from('vendor');
		$this->db->where(array('pwd'=>$pwd,
								'name'=>$id));

		$query=$this->db->get();

		if($query->num_rows()==1)
		{
			 return $query->result_array();
			 // return true;
		}
		else
		{
			return false;
		}
	}
}
?>
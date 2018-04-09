<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class customer_model extends CI_Model 
{
	public function authenticate($pwd,$sid)
	{
		$this->load->database();
		$this->db->select('sid');
		$this->db->from('customer');
		$this->db->where(array('pwd'=>$pwd,
								'sid'=>$sid));

		$query=$this->db->get();

		if($query->num_rows()==1)
		{
			 //return $query->result_array();
			  return true;
		}
		else
		{
			return false;
		}
	}
	public function items()
	{
		$this->load->database();
		//$average = array_sum('count') / count('count');
		//echo $average;
		$this->db->select('count');
		$this->db->from('vendor_menu');
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
	
	public function app($av)
	{
		$this->load->database();
		$this->db->select('fname,fprice,count,itemcode,vcode');
		$this->db->where('count >', $av);
		$this->db->from('vendor_menu');
		
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
	
	
		public function green($av)
	{
		$this->load->database();
		$this->db->select('vshop');
		$this->db->where('vcode',$av);
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
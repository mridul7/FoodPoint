<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class finals extends CI_Model 
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
	public function last($datas)
	{
		
		$this->load->database();

		$this->db->insert('order',$datas);
		
		
	}
	
	
	public function most($name)
	{
		
		
		$this->load->database();
		$this->db->select('count');
		$this->db->from('vendor_menu');
		$this->db->where('fname',$name);

         
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
	public function again($a,$b)
	{
		$a=$a+1;
		$this->load->database();
        $this->db->set('count', $a); 
        $this->db->where('fname',$b);					  
		$this->db->update('vendor_menu'); 
		
		
	}
	
}
?>





<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class order extends CI_Model 
{
	public function fun()
	{
		$this->load->database();

		$this->db->select('order_id,result,address,name,phone,merchant,flag,date');
		$this->db->from('order');
		$this->db->where(array('flag'=>"0",
								'merchant'=>$this->session->userdata('merchants')));
		
		//$this->db->where('flag',"0");
         
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
	public function updt($no)
	{
		$this->load->database();
        $this->db->set('flag', "1"); 
        $this->db->where('order_id',$no);					  
		$this->db->update('order'); 
		
		
		
	}
	public function venname($n)
	{
		$this->load->database();
       
		
		$this->db->select('vshop');
		$this->db->from('vendor');
		$this->db->where('vcode',$n);
		
         
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





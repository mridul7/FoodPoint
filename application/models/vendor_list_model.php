<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_list_model extends CI_Model 
{
	public function authenticate($vshop)
	{
		
		$this->load->database();

		$this->db->select('vcode');
		$this->db->from('vendor');
		$this->db->where('vshop',$vshop);

         
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
	
	public function selectitem()
	{
		
		$this->load->database();
        $this->load->library('session');
		$this->db->select('fname,fprice,itemcode');
		$this->db->from('vendor_menu');
		$this->db->where('vcode',$this->session->userdata('vcode'));

         
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





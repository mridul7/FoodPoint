<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_show_item_model extends CI_Model 
{
	public function authenticate()
	{
		
		$this->load->database();
		 $this->load->library('session');
		$this->db->select('fname,fprice,itemcode');
		$this->db->from('vendor_menu');
		
         $this->db->where('vcode', $this->session->userdata('vcode'));
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
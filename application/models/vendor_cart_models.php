<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_cart_models extends CI_Model 
{
	public function authenticate()
	{
		$this->load->database();
		 $this->load->library('session');
		$this->db->select('fprice');
		$this->db->from('vendor_menu');
		$this->db->where('itemcode',$this->session->userdata('abcd'));

		$query=$this->db->get();

		
			 return $query->result_array();
		
	}
}
?>
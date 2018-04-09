<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_menu_model extends CI_Model 
{
	public function authenticate($data)
	{
		$this->load->database();
		$this->db->insert('vendor_menu',$data);
		return $this->db->insert_id();
		
		// yeh vala fun last inserted id ki primary key return krta h
		
		
	}
	
	
	
	
}
?>
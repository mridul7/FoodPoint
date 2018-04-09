<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class new_vendor_model extends CI_Model 
{
	public function authenticate($data)
	{
		$this->load->database();
		$this->db->insert('vendor',$data);
	}
}
?>
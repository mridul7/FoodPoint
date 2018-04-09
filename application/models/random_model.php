<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class random_model extends CI_Model 
{
	public function watch($ramji)
	{
		
		$this->load->database();

		$this->db->insert('order',$ramji);
		
		
	}
	
}
?>





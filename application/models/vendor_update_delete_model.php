<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_update_delete_model extends CI_Model 
{
	public function authenticate($fname,$fprice)
	{
		$this->load->library('session');
		$this->load->database();
		$this->db->set('fprice', $fprice); 
					 $this->db->where(array('fname'=>$fname,
										'vcode' =>  $this->session->userdata('vcode'))
                                        );
		                          
								  
					$this->db->update('vendor_menu'); 
		
		
		
}

public function authenticate_delete($vcode,$itemcode)
	{
		
		$this->load->database();
		
		$this->load->library('session');
$this->db->delete('vendor_menu', array('vcode' => $vcode,
                                        'itemcode'=> $itemcode));
		
}
}
?>
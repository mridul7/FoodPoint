<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_update_controller extends CI_Controller 
{
	public function index()
	{
		//echo "hello";
	 $this->load->view('vendor_update_view');
		
		
	  
		
	}
	
	public function update ()
	{
		if($_POST)
		{
			
			$this->load->model('vendor_update_delete_model');
		
		$this->vendor_update_delete_model->authenticate($this->input->post("fname"),$this->input->post("fprice"));
			$this->load->view('vendor_menu');
		
	   }
	}
	
}
?>
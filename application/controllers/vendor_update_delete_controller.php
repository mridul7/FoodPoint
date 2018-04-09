<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_update_delete_controller extends CI_Controller 
{
	public function index()
	{
		
		
	}
	public function delete()
	{
		
		
			
			$this->load->model('vendor_update_delete_model');
			$this->vendor_update_delete_model->authenticate_delete($this->input->get("vcode"),$this->input->get("itemcode"));
			$this->load->view('vendor_menu');
	   
		
	}
	
	
}

?>
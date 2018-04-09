<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_show_item_controller extends CI_Controller 
{
	public function index()
	{

		$this->load->model('vendor_show_item_model');
		$val["data"]=$this->vendor_show_item_model->authenticate();
		
	//	echo count($val);
		//if($val==true)
		if($val["data"])
		{
	
		// $this->load->view("vendor_show_item_view",$val);
		$this->load->view("vendor_menu2",$val);
		// print_r($val);
		}
		else
		{
			echo "No items in your shop";
		}
		
	}
	
	
}
?>
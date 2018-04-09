<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  vendor_name_controller extends CI_Controller 
{
	public function index()
	{
		$this->load->model('vendor_names_model');
	
	   $val["data"]=$this->vendor_names_model->authenticate();
		if($val)
		{
	     // print_r($val);
		 $this->load->view("vendor_name_view",$val);
		
		}
		
		else
		{
			echo"No shop registered till now";
		}
	}
	public function validate()
	{
		$this->load->model('vendor_list_model');
		$val=$this->vendor_list_model->authenticate($this->input->get("vshop"));
		//print_r($val);
			//$this->load->view('vendor_menu');
			if($val)
			{
				
				$this->load->library('session');
				
			     $abc = array(
                   
                   'vcode'  => $val[0]['vcode']
               );
	    $this->session->set_userdata($abc);  
		
	         	$value["items"]=$this->vendor_list_model->selectitem();
				//$value=$this->vendor_list_model->selectitem();
				//print_r($value);
		        if($value["items"])
			     {
					//print_r($value);
				 $this->load->view('vendor_item_view',$value);
				 // echo"no items available in your shop"; 
			     }
				else
				 {
					// print_r($value);
					//$this->load->view('vendor_item_view',$value);
					echo"no items available in your shop"; 
				 }
				
			}
			else
			{
				echo "no item available in the shop";
			}
	}
	
	
}
?>



<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  vendor_cart_controller extends CI_Controller 
{
	
	public function index()
	{
		if($_POST)
		{

      
 $data["res"] = $this->input->post('invite');
 
 
 
// echo (count($data["res"]));
 $this->load->library('session');

	    $food = array(
                   
                   'abcd'  => $data["res"]
				   
				  
               );
	    $this->session->set_userdata($food);
		
    

$this->load->view('cart_view');
       

			
		
		}
		else
		{
			echo "select your items first";
		}
	
		
	}
	 function validate()
	 {
		 $a=$this->input->get("code");
		 $this->load->library('session');
		
		 $b=$this->session->userdata('abcd');
	
		 unset($b["$a"]);
		 
		 $c= array_values($b);
		 $food = array(
                   
                   'abcd'  => $c
				   
				  
               );
	    $this->session->set_userdata($food);
		
		$this->load->view('cart_view');
	 }
	
	
	
}
?>



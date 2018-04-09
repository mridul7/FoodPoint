<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor_menu_controller extends CI_Controller 
{
	public function index()
	{
		
		  
	      if($_POST)
	    {
			$this->load->library('session');
		   $this->load->model('vendor_menu_model');
		   $data=array(
		   'fname'=>$this->input->post("fname"),
		   'fprice'=>$this->input->post("fprice"),
		   'vcode'=>$this->session->userdata('vcode'));
		 
		   $lid=$this->vendor_menu_model->authenticate($data);
		 //  $ary=array("lid"=>array($lid));
		   
		 //  print_r($ary);
		 
		 $this->load->library('session');
	    $imageid = array(
                   
                   'lid'  => $lid
               );
	    $this->session->set_userdata($imageid);  
		    $this->load->view("vendor_menu");
		}
		else
		{
			$this->load->view("vendor_menu");
		}
		
	  
		
	}
	
	
}
?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class vendor extends CI_Controller 
{
	public function index()
	{
		$this->load->view('vendor_authentication');
	
		
	}
	
	public function validate()
	{
		if($_POST)
	{
		$this->load->model('vendor_model');
		$val=$this->vendor_model->authenticate($this->input->post("pwd"),$this->input->post("id"));
		
		//print_r($val);
	if($val)
		{
		 
		 $this->load->library('session');
	    $newdata = array(
                   
                   'vcode'  => $val[0]['vcode']
               );
	    $this->session->set_userdata($newdata);  
		 $this->load->view("vendor_menu");
		}
		else
		{
			echo "sorry your id and pwd is invalid";
		} 
		
	}

	}
}
?>
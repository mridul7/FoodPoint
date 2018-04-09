<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class customer extends CI_Controller 
{
	public function index()
	{
		$this->load->view('customer_authentication');
	
		
	}
	
	public function validate()
	{
		if($_POST)
	{
		$this->load->model('customer_model');
		$val=$this->customer_model->authenticate($this->input->post("pwd"),$this->input->post("sid"));
		
		//print_r($val);
	if($val)
		{
		 
		
		 $this->load->model('customer_model');
		 $rat=$this->customer_model->items();
		//print_r($rat);
		$sum=0;
		$num=0;
		for($l=0;$l<count($rat);$l++)
		{
		 $sum=$sum+$rat[$l]['count']; 
         $num=$num+1;		 
		}
		
      	$avg=$sum/$num;
		//echo $avg;
		$sel["tea"]=$this->customer_model->app($avg);
		//print_r($sel["tea"]);
		//print_r($sel["tea"][0]["vcode"]);
		for($w=0;$w<count($sel["tea"]);$w++)
		{
		$cat=$this->customer_model->green($sel["tea"][$w]["vcode"]);
		}
		//print_r($cat);
		 $this->load->library('session');

	    $dog = array(
                   
                   'zebra'  => $cat[0]["vshop"]
				   
				  
               );
	    $this->session->set_userdata($dog);
		//echo $this->session->userdata('zebra');
		 $this->load->view("customer_menu",$sel);
		}
		else
		{
			echo "sorry your id and pwd is invalid";
		} 
		
	}

	}
}
?>
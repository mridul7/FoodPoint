<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class random_controller extends CI_Controller 
{
	public function index()
	{
	  $a= $this->input->get("fname");
	  $b= $this->input->get("fprice");
	  $m=$this->input->get("mer");
	  $this->load->library('session');

	    $cre = array(
                   
                   'james'  => $a,
				   'bond'=>$b,
				   'singh'=>$m
				   
				  
               );
	    $this->session->set_userdata($cre);
	  
	  $this->load->view('random_view');
	  
	}
	
	public function ordr()
	{
		if($_POST)
		{
			 $this->load->library('session');
			 $n=$this->input->post('name');
			 $p=$this->input->post('pno');
			 $a=$this->input->post('address');
			 $q=$this->input->post('yo');
			
			// echo $m;
			// echo $m;
			 //echo $q;
			 $this->load->model('random_model');
			 $msgss=$this->session->userdata('james')."....Rs".$this->session->userdata('bond')."....Quantity=".$q;
			// echo $msg;
			$tigers=array('result'=> $msgss,
	             'address'=>$a,
				 'name'=>$n,
				 'phone'=>$p,
				 'merchant' => $this->session->userdata('singh')
	                );
			$this->random_model->watch($tigers);
			echo "Your order has been successfull";
			
		}
	}
	
	
}
?>
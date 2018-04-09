<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  new_customer extends CI_Controller 
{
	public function index()
	{
		$this->load->view('new_customer_view');
	
		
	}
	public function validate()
	{
		  $this->load->model('new_customer_model');
	  if($_POST)
		{
		   $data=array(
		   'sid'=>$this->input->post("sid"),
		   'pwd'=>$this->input->post("pwd"),
		  
		   );
		 $this->load->model('new_customer_model');
		$a= $this->new_customer_model->check($this->input->post("sid"));
		if($a!=true)
		{
		   $this->new_customer_model->authenticate($data);
	     
		   $this->load->view('welcome_view_second');
		}
		 else
		 {
			 echo"already inserted ";
		 }
		}
	  
	 
    }
	

}
?>



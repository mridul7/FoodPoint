<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  new_vendor extends CI_Controller 
{
	public function index()
	{
		$this->load->view('new_vendor_view');
	
		
	}
	public function validate()
	{
		  $this->load->model('new_vendor_model');
	  if($_POST)
		{
			$pwd=rand(100000,999999);
		   $data=array(
		   'name'=>$this->input->post("name"),
		   'vshop'=>$this->input->post("sname"),
		   'pwd'=>$pwd
		   );
		 
		   $this->new_vendor_model->authenticate($data);
		  echo "u will get your id and password soon";
		 // $this->load->view('vendor_authentication');
		}
	  
	 // yha pr vendor ko sms krenge ki aapka username and password yeh hai..
    }
	
	//ek yha pr naya view banega jo owner use krega notification k lie..orr vo viw manually call hoga by owner..
}
?>



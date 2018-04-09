<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  order_controller extends CI_Controller 
{
	public function index()
	{
	$this->load->model('order');
    $this->load->library('session');	
	
	$vendorname=$this->order->venname( $this->session->userdata('vcode'));
	//print_r($vendorname);
	 $we = array(
                   
                   'merchants'  => $vendorname[0]['vshop']
				   
				  
               ); 
	   $this->session->set_userdata($we);
	//echo $this->session->userdata('merchants');
	
	$qwerty["kite"]=$this->order->fun();
	
	if($qwerty["kite"])
	{
	 $this->load->view('order_view',$qwerty);	
	}
		else
			{
		       echo"No items are there";
			}
	}
	public function validation()
	{
		if($_POST)
		{
				//echo"hey u r in controller";
				$dataa = $this->input->post('bill');
				// print_r($dataa);
				 
				  
			if($dataa)
			{
				
				$this->load->model('order');	
				for($i=0;$i<count($dataa);$i++)
					{
						$this->order->updt($dataa[$i]); 
					}
				$this->load->view('vendor_menu');  
			}
			else
				{
					echo "select orders first";
				} 
        }	
		else
		{
			echo"select items first";
		}
	}	
}

?>

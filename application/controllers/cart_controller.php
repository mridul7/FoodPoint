<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class  cart_controller extends CI_Controller 
{
	public function index()
	{
		if($_POST)
		{
 $quan = $this->input->post('quantity');
 $price = $this->input->post('prices');
 $fname = $this->input->post('foodname');
// print_r($quan);
// print_r($price);
 $i;
 $total=0;
 for($i=0;$i<count($quan);$i++)
 {
	 $total= $total+($quan[$i]*$price[$i]);
 }
 //echo"$total";
 
 $name= $this->input->post('cname');
 $pno= $this->input->post('cpno');
 $address= $this->input->post('cadd');
 
 $this->load->library('session');
 $food=$this->session->userdata('abcd');
 
 for($i=0;$i<count($fname);$i++)
 {
	$msg[$i]=$fname[$i]." / Rs".$price[$i]." / quantity=".$quan[$i]."..";
	
 }
 //print_r($msg);
 $sun=null;
  for($j=0;$j<count($msg);$j++)
  {
	$sun=$sun.$msg[$j]; 
	
  }
  //echo $sun;
        $this->load->model('finals');
		$this->load->library('session');
	
		$merchant_name=$this->finals->name($this->session->userdata('vcode'));
	//print_r( $merchant_name);
	
	$this->load->library('session');
	    $moons = array(
                   
                   'mname'  => $merchant_name[0]['vshop']
               );
	    $this->session->set_userdata($moons);  
//	echo $this->session->userdata('mname');
	$datas=array('result'=> $sun,
	             'address'=>$address,
				 'name'=>$name,
				 'phone'=>$pno,
				 'merchant' =>$this->session->userdata('mname')
	                );
					$this->finals->last($datas);
					
					
					
					//echo "       Your order has been delivered";
					
					
				



              $this->load->model('finals');
			  $this->load->library('session');
			  for($k=0;$k<count($fname);$k++)
			  {
				  
			 $c= $this->finals->most($fname[$k]);
			 $this->load->library('session');
	         $elephant = array(
                   
                   'haathi'  => $c[0]['count']
               );
	         $this->session->set_userdata($elephant);  
			//print_r($this->session->userdata('haathi'));
			//print_r($fname[$k]);
			$this->finals->again($this->session->userdata('haathi'),$fname[$k]);
				
			  }	
			  
			  //here
			  
			  
			  
		}
	
		
	}
	
}
?>



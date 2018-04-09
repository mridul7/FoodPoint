<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class sms_controller extends CI_Controller 
{
	public function index()
	{
		$this->load->view('sms_view');
	
		
	}
	
	public function send()
	{
		
		if($_POST)
		{
			$un=$this->input->post("name");
			$pwd=$this->input->post("pwd");
			$mob=$this->input->post("pno");
			$curl = curl_init();
			$msg="Dear%20vendor%20your%20username%20is%20".$un."%20and%20password%20is%20".$pwd."%20Please%20do%20not%20share%20with%20any%20other";
			$smsurl=	"http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=mridul2018&password=dhampur123&msisdn=91$mob&sid=WEBSMS&msg=$msg&fl=0" ;
			echo $smsurl;
			curl_setopt($curl, CURLOPT_URL, $smsurl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($curl);
			echo $result;
			curl_close($curl);
		
		}
			}
	
	
}
	

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* User login security check
*/
class SecureAccess extends MY_Controller
{
	protected $userData = "";

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');	
		log_message('error', 'getallOrders: '.$this->allOrders);
		$this->userData = $this->checkLogin();

	}

	protected function checkLogin()
	{
		$userData = $this->checkconditions();		

		if($userData)
		{
			return true;
		}
		return false;
	}

	/**
	* This function contains any operation when login fails
	*/
	protected function backtologin()
	{
		redirect("admin/login","refresh");
	}
	
	protected function checkconditions()
	{
		// $this->session->set_userdata('email', $_POST['email']);
		// $this->session->set_userdata('password', $_POST['password']);
		
		if($this->session->userdata("email") || isset($_POST['email']))
		{
			
			$userData = (isset($_POST['email']))? $_POST : $this->session->userdata;
			$email = $userData['email'];
			$password = $userData['password'];
			
			$checkDB = $this->secure_model->checklogindetails($email,$password);			
			// log_message('error', 'checkDB: ' .$checkDB['']);
			if($checkDB != FALSE)
			{
				return true;
				
			}
			
		}		
		return FALSE;
	}

}
?>
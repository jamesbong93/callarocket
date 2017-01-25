<?php

/**
* 
*/
class SecureAccess extends CI_Controller
{
	protected $userData = "";

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');	
		$this->userData = $this->checkLogin();
	}

	protected function checkLogin()
	{
		$userData = $this->checkconditions();		
		if($userData)
		{
			return true;
		}
		else{
			return false;
		}
	}

	/**
	* This function contains any operation when login fails
	*/
	protected function backtologin()
	{
		$this->session->sess_destroy();
		redirect("admin","refresh");
	}
	
	protected function checkconditions()
	{
			
		if($this->session->userdata("email") || isset($_POST['email']))
		{
			$userData = (isset($_POST['email']))? $_POST : $this->session->userdata;
			$email = $userData['email'];
			$password = $userData['password'];
			
			$checkDB = $this->secure_model->checklogindetails($email,$password);			
			
			if($checkDB != FALSE)
			{
				return true;
			}			
		}		
		return FALSE;
	}

}
?>
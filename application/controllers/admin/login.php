<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php include("secureaccess.php"); ?>
<?php
/**
* 
*/
class Login extends SecureAccess
{
	public function __construct(){
        parent::__construct();
    }
	public function index()
	{	
		// $data['main_content'] = 'login_view';
		//	echo "<pre>";print_r($this->userData);die;
		if($this->userData != FALSE)
		{
			$this->session->set_userdata('email', $_POST['email']);
			$this->session->set_userdata('password', $_POST['password']);
			$this->user_login();
		}
		else
			$this->load->view('admin/login_view'); 
	}
	public function user_login()
	{

		

		// log_message('error', 'userData: ' .$this->userData);
		// $data['email'] = $_POST['email'];
		

		if($this->userData)
		{ 
			
			// $userdata = $this->userData;
			$data['main_content'] = 'dashboard';
			$this->load->view('admin/includes/template', $data);
			//	echo "<pre>"; print_r($userdata);die;			
		}
		else{
			$this->backtologin();
		}
		
	}	

	public function user_logout(){
		$this->session->sess_destroy();
        redirect('admin/login');
	}

}

?>
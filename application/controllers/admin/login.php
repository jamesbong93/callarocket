<?php include("secureaccess.php"); ?>
<?php
/**
* 
*/
class Login extends SecureAccess
{

	public function index()
	{	
		$data['main_content'] = 'admin/login_view';
		//	echo "<pre>";print_r($this->userData);die;
		if($this->userData != FALSE)
		{
			$this->user_login();
		}
		else
			$this->load->view('admin/includes/template',$data); 
	}
	public function user_login()
	{

		if($this->userData != FALSE)
		{
			$data['main_content'] = 'admin/dashboard';
			$this->load->view('admin/includes/template',$data); 
			$userdata = $this->userData;
		//	echo "<pre>"; print_r($userdata);die;			
		}
		else{
			$this->backtologin();
		}
		
	}	

}







?>
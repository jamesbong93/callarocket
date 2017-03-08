<?php
/**
* 
*/
class Secure_model extends CI_Model
{
	
	function checklogindetails($email,$password){

		$sql = $this->db->get_where('login_admin', array('Email' => $email, 'Password' => $password));

		if($sql->num_rows() > 0){
			
			return $sql->result_array(); // return true;
			
		}
		return false; 
	}

	
}
?>
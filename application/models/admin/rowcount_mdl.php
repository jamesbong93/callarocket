<?php
/**
* 
*/
class Rowcount_mdl extends CI_Model
{
	
	function getAllOrders(){
		$sql = $this->db->query('select * from confirmedrequest');
		return $sql->num_rows();
	}

	function getTodayOrders(){
		$todayDate = date("Y-m-d");
		log_message('error', '$todayOrders: ' .$todayDate);
		$sql = $this->db->get_where('confirmedrequest', array('timeStamp' => $todayDate));
		log_message('error', '$sql->num_rows(): ' .$sql->num_rows());
		return $sql->num_rows();
	}

	function getYesterdayOrders(){
		$yesterdayDate = date('Y-m-d',strtotime('yesterday'));
		log_message('error', '$todayOrders: ' .$yesterdayDate);
		$sql = $this->db->get_where('confirmedrequest', array('timeStamp' => $yesterdayDate));
		log_message('error', '$sql->num_rows(): ' .$sql->num_rows());
		return $sql->num_rows();
	}

	function getNewOrders(){
		$sql = $this->db->get_where('confirmedrequest', array('read_check' => 'no'));
		log_message('error', '$sql->num_rows(): ' .$sql->num_rows());
		return $sql->num_rows();
	}
	
}
?>
<?php
class order_model extends CI_Model {

        public function __construct()
        {
        		parent::__construct(); 
                $this->load->database();	// manually database connection

        }

        public function get_restaurants()
		{
		   	$query = $this->db->get('storelistfood');
            return $query->result_array();
		        
		}

		public function insert($data) { 
	         if ($this->db->insert("userrequests", $data)) { 
	            return true; 
	         } 
      } 

}
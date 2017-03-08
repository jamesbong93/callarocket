<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
abstract class MY_Controller extends CI_Controller
{
	protected $allOrders = NULL;
	protected $todayOrders = NULL;
	protected $yesterdayOrders = NULL;
	protected $newOrders = NULL;
	public function __construct(){
        parent::__construct();

        
        $this->load->model('admin/rowcount_mdl');
		$this->allOrders = $this->rowcount_mdl->getAllOrders();
		$this->todayOrders = $this->rowcount_mdl->getTodayOrders();
		$this->yesterdayOrders = $this->rowcount_mdl->getYesterdayOrders();
		$this->newOrders = $this->rowcount_mdl->getNewOrders();

		$this->session->set_userdata('allOrders', $this->allOrders);
		$this->session->set_userdata('todayOrders', $this->todayOrders);
		$this->session->set_userdata('yesterdayOrders', $this->yesterdayOrders);
		$this->session->set_userdata('newOrders', $this->newOrders);


	}


}
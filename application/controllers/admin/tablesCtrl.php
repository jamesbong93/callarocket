<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class TablesCtrl extends CI_Controller
{
	public function index(){
		$data['main_content'] = 'tables';
		$this->load->view('admin/includes/template', $data);
		
	}

}

?>
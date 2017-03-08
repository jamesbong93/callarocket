<?php 
$data['email'] = $this->session->userdata('email');
$data['allOrders'] = $this->session->userdata('allOrders');
$data['todayOrders'] = $this->session->userdata('todayOrders');
$data['yesterdayOrders'] = $this->session->userdata('yesterdayOrders');
$data['newOrders'] = $this->session->userdata('newOrders');
$this->load->view('admin/includes/header', $data);
?>
<?php $this->load->view('admin/' .$main_content, $data); ?>
<?php $this->load->view('admin/includes/footer');?>
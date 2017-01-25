<?php
class Order extends CI_Controller {

        public function __construct()
        {
                parent::__construct();  // load the contrustor of its parent(CI_Controller)
            
        }

       public function index()
	   {
            
            $data['main_content'] = 'order/select_order';
            $this->load->view('includes/template',$data); 
            
           
        }

        public function select_order_info(){

            $category = $this->input->post('category');
           
            if( $category == 'Food'){
                $this->session->set_userdata('area',$this->input->post('area'));
                redirect('order/food_order_info');  // controller's method
            }else{
               
            }

        }

       


        public function food_order_info(){
                
                $this->form_validation->set_rules('name', 'name', 'required');    // name of input, name in error, rule
                $this->form_validation->set_rules('contact', 'contact', 'required');    // name of input, name in error, rule
                $this->form_validation->set_rules('address', 'address', 'required');    // name of input, name in error, rule
                $this->form_validation->set_rules('time_slot', 'time_slot', 'required');    // name of input, name in error, rule
                $this->form_validation->set_rules('restaurant', 'restaurant', 'required');    // name of input, name in error, rule
                $this->form_validation->set_rules('detail', 'detail', 'required');    // name of input, name in error, rule

                $data['restaurants'] = $this->order_model->get_restaurants(); 
               
                if ($this->form_validation->run() === FALSE)
                {
                    $data['main_content'] = 'order/food_order';
                    $this->load->view('includes/template',$data);
                }
                else
                {
                    
                    $newdata = array( 
                        'name' => $this->input->post('name'), 
                        'contact' => $this->input->post('contact'),
                        'address' => $this->input->post('address'),
                        'category' => 'Food',
                        'area' => $this->input->post('area'),
                        'restaurant' => $this->input->post('restaurant'),
                        'time_slot' => $this->input->post('time_slot'),
                        'detail' => $this->input->post('detail'),
                        'smsCode' => '1234'
                    );  
                    $this->session->set_userdata($newdata);
                    
                    redirect('order/food_confirm_info');
                   
                    }
        }

        public function food_confirm_info(){

            $data['main_content'] = 'order/food_confirm';
            $this->load->view('includes/template',$data);

            if($this->input->post('order_submit')){

                 $data = array( 
                        'userName' => $this->session->userdata('name'), 
                        'contactNumber' => $this->session->userdata('contact'),
                        'area' => $this->session->userdata('area'),
                        'userAddress' => $this->session->userdata('address'),
                        'category' => 'Food',
                        'storeList' => $this->session->userdata('restaurant'),
                        'timeFrame' => $this->session->userdata('time_slot'),
                        'requestBody' => $this->session->userdata('detail'),
                        'smsCode' => '1234'
                    ); 
                    $this->order_model->insert($data);
                    redirect('order/order_verify');
            }
        }

        public function order_verify(){

            $data['main_content'] = 'order/verify_form';
            $this->load->view('includes/template',$data);
        }


        
/*
        public function view()
        {
        if ( ! file_exists(APPPATH.'views/order/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
               
        }

        $this->load->view('templates/header');
        $this->load->view('order/'.$page);
        $this->load->view('templates/footer');
        }
*/

/*
        public function food_order(){

            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            //$this->form_validation->set_rules('category', 'Category', 'required');    // name of input, name in error, rule
    
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('order/food_order');
                $this->load->view('templates/footer');    
            }
            else
            {
               if($this->input->post('category') == 'Food'){
                $this->load->view('news/success');
               }
               else{
               }
            }

        }
        */
}
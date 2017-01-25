<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();  // load the contrustor of its parent(CI_Controller)
                $this->load->helper('url'); // load css and js file 
        }

       public function view()
		{

            $data['main_content'] = 'pages/home';
            $this->load->view('includes/template',$data);  
		}
}
<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();  // load the contrustor of its parent(CI_Controller)
                $this->load->model('news_model');       //load the model/data from database
                $this->load->helper('url_helper');
                $this->load->helper('url'); // to load css and js file
        }

        public function index()         //default method to be loaded 
        {
                $data['news'] = $this->news_model->get_news();          //Get the data from database 
                $data['title'] = 'News archive';
                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)      
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }
                
                $data['title'] = 'dd';
                 $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {

            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
            
            }
            else
            {
                
                $this->load->view('news/success');
            }
        }
}
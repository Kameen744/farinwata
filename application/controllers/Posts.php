<?php
    class Posts extends CI_Controller
    {
        public function view($id) {
            $data['readPost'] = $this->Post_model->get_post($id);
            // $data['locNws'] = $this->Post_model->getPostByCat('Local', 'News', 10, 0);
            $data['intNws'] = $this->Post_model->get_relatedPosts($id, 10, 1);
            
            if(empty($data['readPost'])){
                show_404();
            }

            $this->load->helper('text');
            $this->load->library('typography');
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }

        public function create() {
            $data['title'] = 'Create Post';
            
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer'); 
        }

        public function get_category($id) {
            $query = $this->Post_model->get_category($id);
            $html = '';
            foreach ($query as $val) {
                $html .= '<option value="'.$val['id'].'">'.$val['Categories'].'</option>';
            }
            echo $html;
        }

        public function create_post () {
            $this->form_validation->set_rules('PostTitle', 'Title', 'required');
            $this->form_validation->set_rules('PostContent', 'Content', 'required');
            $this->form_validation->set_rules('PostType', 'Type', 'required');
            $this->form_validation->set_rules('PostCategory', 'Category', 'required');
            // $this->form_validation->set_rules('PostFile', 'Image', 'required');

            if($this->form_validation->run() === FALSE){
                echo validation_errors();
            } else {
                $this->Post_model->create_post();
            }
         
        }

    }
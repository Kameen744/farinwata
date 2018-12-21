<?php
    class Pages extends CI_Controller
    {
        public function view($page = 'home') {
            if(!file_exists(APPPATH .'views/pages/' .$page .'.php')) {
                show_404();
            }

            $data['title'] = ucfirst($page);

            $data['locNws'] = $this->Page_model->getPostByCat('Local', 'News', 10, 0);
            $data['locPol'] = $this->Page_model->getPostByCat('Local', 'Politics', 10, 0);
            $data['locBus'] = $this->Page_model->getPostByCat('Local', 'Business', 10, 0);
            $data['locHlth'] = $this->Page_model->getPostByCat('Local', 'Health', 10, 0);
            $data['locSprt'] = $this->Page_model->getPostByCat('Local', 'Sport', 10, 0);
            $data['intNws'] = $this->Page_model->getPostByCat('International', 'News', 10, 0);
            $data['intSpt'] = $this->Page_model->getPostByCat('International', 'Sport', 10, 0);
            
            // $data['posts'] = $this->Page_model->get_posts();
            $this->load->helper('text');
            $this->load->view('templates/header');
            $this->load->view('pages/' .$page, $data);
            $this->load->view('templates/footer');
        }
    }
    
    // $db = new Get_Rec();
    // $locNws = $db->getPosts('Local', 'News', 0, 10);
    // $locPol = $db->getPosts('Local', 'Politics', 0, 10);
    // $locBus = $db->getPosts('Local', 'Business', 0, 10);
    // $locHlth = $db->getPosts('Local', 'Health', 0, 10);
    // $locSprt = $db->getPosts('Local', 'Sport', 0, 10);
    // $intNws = $db->getPosts('International', 'News', 0, 10);
    // $intSpt = $db->getPosts('International', 'Sport', 0, 10);
  
    // function G_img($img, $size) {
    //    return  'img/uploads/'.$img .$size.'.jpg';
    // }
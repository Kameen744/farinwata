<?php
    class Posts extends CI_Controller
    {
        private function check_session(){
            if($this->session->userdata('reporter_name')) {
    
            } else {
                $this->session->set_flashdata('login_message', 'Access denied');
                redirect('home');
            } 
        }
        public function view($id) {
            $data['readPost'] = $this->Post_model->get_post($id);
            // $data['locNws'] = $this->Post_model->getPostByCat('Local', 'News', 10, 0);
            $data['relatedNws'] = $this->Post_model->get_relatedPosts($id, 10, 1);
            
            if(empty($data['readPost'])){
                show_404();
            }
            
            $this->load->helper('text');
            $this->load->library('typography');
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }

        public function new_post() {
            $this::check_session();
            $data['title'] = 'Create Post';

            $this->load->view('posts/create', $data);
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
            $this::check_session();

            $this->form_validation->set_rules('PostTitle', 'Title', 'required');
            $this->form_validation->set_rules('PostContent', 'Content', 'required');
            $this->form_validation->set_rules('PostType', 'Type', 'required');
            $this->form_validation->set_rules('PostCategory', 'Category', 'required');
            // $this->form_validation->set_rules('PostFile', 'Image', 'required');

            if($this->form_validation->run() === FALSE){
                echo validation_errors();
            } else {
                $fileType = $_FILES['PostFile']['type'];
                $fileSize = $_FILES['PostFile']['size'];

                if($fileType === 'image/jpeg' || $fileType ===  'image/png' || $fileType ===  'image/gif'){
                    if($fileSize > 1024 * 700) {
                        echo 'Image size is too big';
                    }elseif ($fileSize < 1024 * 20) {
                        echo 'Image is too small';
                    } else {
                        if($this->Post_model->create_post()){
                            $data['title'] = 'Create Post';
                            $this->load->view('posts/create', $data);
                        }
                    }
                }else {
                    echo 'Invalid image type';
                }  
            }                 
        }

        public function view_posts ($no = NULL) {
            $this::check_session();
            $data['title'] = 'All posts';
            // $this->load->library('pagination');
            $totalposts = $this->Post_model->get_noof_posts();
            $perpage = 10;

            if($no === NULL){
                $getposts = $this->Post_model->get_posts($perpage, 0);
            }else {
                $getposts = $this->Post_model->get_posts($perpage, $no);
            }

            // $config['base_url'] = 'http://farinwatab/posts/view_posts';
            // $config['total_rows'] = $totalposts['total'];
            // $config['per_page'] = $perpage;
            // $config['full_tag_open'] = '<div class="btn-group" role="group" aria-label="...">';
            // $config['full_tag_open'] = '</div>';
            $data['total_pages'] = ceil($totalposts['total'] / $perpage);
            $data['posts'] = $getposts;
            // $this->pagination->initialize($config);
            $this->load->view('posts/view_posts', $data);
            // print_r($this->pagination->create_links());
        }

        public function delete_post($id) {
            $this::check_session();
            $del = $this->Post_model->delete_post($id);
            if($del){
                $data['title'] = 'All posts';
                $getposts = $this->Post_model->get_posts(10, 0);
                $data['posts'] = $getposts;
                $this->load->view('posts/view_posts', $data);
            } else{

            }
        }

        public function program_schedule() {

        }

        public function upload_video($id = NULL) {
            $this::check_session();
            if($id === NULL) {
                $vidTable = $this->Post_model->get_videos(10, 0);
                $data['VidTable'] = $vidTable;
                $this->load->view('posts/videoform', $data);
            }else {
                $vidTable = $this->Post_model->get_videos(10, $id);
                $data['VidTable'] = $vidTable;
                $this->load->view('posts/videoform', $data);
            }
        }

        public function upload_video_file() {
            $this::check_session();
            $post = $this->Post_model->get_numof_vid();
            $posterType = $_FILES['VideoPoster']['type'];
            $posterSize = $_FILES['VideoPoster']['size'];
            $postername = 'assets/vid/poster/poster_'.$post.'.jpg';

            $videoType = $_FILES['VideoFile']['type'];
            $videoSize = $_FILES['VideoFile']['size'];
            $videoname = 'assets/vid/uploads/video_'.$post.'.mp4';
            if($_FILES['VideoPoster']['error'] === 4) {
                if($videoType === 'video/mp4'){
                    if($videoSize > (1024 * 1024) * 100){
                        echo 'Video size is too big';
                    }else {
                        if(move_uploaded_file($_FILES["VideoFile"]["tmp_name"], $videoname)) {
                            if($this->Post_model->upload_video($postername, $videoname)) {
                                $vidTable = $this->Post_model->get_videos(10, 0);
                                $data['VidTable'] = $vidTable;
                                $this->load->view('posts/videoform', $data);
                            }   
                        }
                    }
                }else{
                    echo 'here';
                    echo 'Invalid Video file';
                }
            } else {
                if($posterType === 'image/jpeg' || $posterType ===  'image/png' || $posterType ===  'image/gif'){
                    if($videoType === 'video/mp4'){
                        if($posterSize > 1024 * 700) {
                            echo 'Image size is too big';
                        }elseif ($posterSize < 1024 * 20) {
                            echo 'Image is too small';
                        } else {
                            if($videoSize > (1024 * 1024) * 100){
                                echo 'Video size is too big';
                            }else {
                                if(move_uploaded_file($_FILES["VideoPoster"]["tmp_name"], $postername) 
                                & move_uploaded_file($_FILES["VideoFile"]["tmp_name"], $videoname)) {
                                    if($this->Post_model->upload_video($postername, $videoname)) {
                                        $vidTable = $this->Post_model->get_videos(10, 0);
                                        $data['VidTable'] = $vidTable;
                                        $this->load->view('posts/videoform', $data);
                                    }   
                                }
                            }
                        }
                    }else{
                        echo 'Invalid Video file';
                    }
                }else {
                    echo 'Invalid image file';
                }  
            }
        } 

        public function delete_video($id) {
            $this::check_session();
            if($this->Post_model->delete_video($id)) {
                $vidTable = $this->Post_model->get_videos(10, 0);
                $data['VidTable'] = $vidTable;
                $this->load->view('posts/videoform', $data);
            }
        }

        public function getNext($next, $prev, $typ, $cat, $var) {
            $no = $next + $prev;
            $exData['lcinttype'] = $typ;
            $exData['curNext'] = $next;
            $exData['curPrev'] = $no;
            $data = $this->Page_model->getPostByCat($typ, $cat, $next, $prev);
            if(sizeof($data) >= $next) {
                $exData[$var] = $data;
                $this->load->view('posts/more', $exData);
            }else{exit();}
        }
        public function getPrev($next, $prev, $typ, $cat, $var) {
            $no = $prev - $next;
            if($no >= 0) {
                $exData['lcinttype'] = $typ;
                $exData['curNext'] = $next;
                $exData['curPrev'] = $no;
                $data = $this->Page_model->getPostByCat($typ, $cat, $next, $no);
                if(sizeof($data) >= $next) {
                    $exData[$var] = $data;
                    $this->load->view('posts/more', $exData);
                }else{exit();}
            }else{exit();}
        }

        public function next_post() {
            // nws next
            if(isset($_POST['newsNext'])) {
                $this->getNext($_POST['newsNext'], $_POST['newsPrevv'], 'Local', 'News', 'newsNext');
            }
            // int next
            if(isset($_POST['intNext'])) {
                $this->getNext($_POST['intNext'], $_POST['intPrevv'], 'International', 'News', 'intNext');
            }
            // pol next
            if(isset($_POST['polNext'])) {
                $this->getNext($_POST['polNext'], $_POST['polPrevv'], 'Local', 'Politics', 'polNext');
            }
            // bus next
            if(isset($_POST['busNext'])) {
                $this->getNext($_POST['busNext'], $_POST['busPrevv'], 'Local', 'Business', 'busNext');
            }
            // hlt next 
            if(isset($_POST['hltNext'])) {
                $this->getNext($_POST['hltNext'], $_POST['hltPrevv'], 'Local', 'Health', 'hltNext');
            }
            // lcspr next
            if(isset($_POST['lcsprNext'])) {
                $this->getNext($_POST['lcsprNext'], $_POST['lcsprPrevv'], $_POST['lcsprtype'], 'Sport', 'bgnlcspr');
            }
            // ent next
            if(isset($_POST['entNext'])) {
                $this->getNext($_POST['entNext'], $_POST['entPrevv'], 'Local', 'Entertainment', 'entNext');
            }
            // vid next
            if(isset($_POST['vidNext'])) {
                $next = $_POST['vidNext'];
                $prev = $_POST['vidPrevv'];
                $no = $next + $prev;

                $exData['curNext'] = $next;
                $exData['curPrev'] = $no;
                $data = $this->Page_model->getVideos($next, $prev);
                if(sizeof($data) >= $next) {
                    $exData['vidNext'] = $data;
                    $this->load->view('posts/more', $exData);
                }else{exit();}
            }
            // get lc/int sprt
            if(isset($_POST['lcspr'])){
                $typ = $_POST['lcspr']; 
                $ofs = $_POST['lcsproff']; 
                $lmt = $_POST['lcslmt'];
                $exData['lcinttype'] = $typ;
                $exData['curNext'] = $lmt;
                $exData['curPrev'] = $ofs;
                $data = $this->Page_model->getPostByCat($typ, 'Sport', $lmt, 0);
                $exData['bgnlcspr'] = $data;
                $this->load->view('posts/more', $exData);
            }
            
            if(isset($_POST['hauVideos'])) {
                $channelId = 'UCaxnujKbsu2Z-64c758bnag';
                $hauId = 'UC8i3e77KKNJqWAcC2DCGixA';
                $maxResults = 5;
                $API_key = 'AIzaSyA9hRVWls4xOSaWymLukJBFbuu8rXnPejk';
                $hauvideo_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$hauId.'&maxResults='.$maxResults.'&key='.$API_key.''));        
        
                $exData['mainVids'] = $hauvideo_list;
                $this->load->view('posts/more', $exData);
            }

            if(isset($_POST['engVideos'])) {
                $channelId = 'UCaxnujKbsu2Z-64c758bnag';
                $hauId = 'UC8i3e77KKNJqWAcC2DCGixA';
                $maxResults = 5;
                $API_key = 'AIzaSyA9hRVWls4xOSaWymLukJBFbuu8rXnPejk';

                $video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));
                
                $exData['mainVids'] = $video_list;
                $this->load->view('posts/more', $exData);
            }
            
        }

        public function prev_post() {
            $this->load->helper('text');
            // nws prev
            if(isset($_POST['newsPrev'])) {
                $this->getPrev($_POST['newsNextt'], $_POST['newsPrev'], 'Local', 'News', 'newsNext');
            }
            // int prev
            if(isset($_POST['intPrev'])) {
                $this->getPrev($_POST['intNextt'], $_POST['intPrev'], 'International', 'News', 'intNext');
            }
            // pol prev
            if(isset($_POST['polPrev'])) {
                $this->getPrev($_POST['polNextt'], $_POST['polPrev'], 'Local', 'Politics', 'polNext');
            }
            // bus prev
            if(isset($_POST['busPrev'])) {
                $this->getPrev($_POST['busNextt'], $_POST['busPrev'], 'Local', 'Business', 'busNext');
            }
            // hlt prev
            if(isset($_POST['hltPrev'])) {
                $this->getPrev($_POST['hltNextt'], $_POST['hltPrev'], 'Local', 'Health', 'hltNext');
            }
            // lcspr prev
            if(isset($_POST['lcsprPrev'])) {
                $this->getPrev($_POST['lcsprNextt'], $_POST['lcsprPrev'], $_POST['lcsprtype'], 'Health', 'bgnlcspr');
            }
            // ent prev
            if(isset($_POST['entPrev'])) {
                $this->getPrev($_POST['entNextt'], $_POST['entPrev'], 'Local', 'Entertainment', 'entNext');
            }
            // vid prev
            if(isset($_POST['vidPrev'])) {
                $next = $_POST['vidNextt'];
                $prev = $_POST['vidPrev'];
                $no = $prev - $next;
                if($no >= 0) {
                    $exData['curNext'] = $next;
                    $exData['curPrev'] = $no;
                    $data = $this->Page_model->getVideos($next, $no);
                    if(sizeof($data) >= $next) {
                        $exData['vidNext'] = $data;
                        $this->load->view('posts/more', $exData);
                    }else{exit();}
                }else{exit();}
            }
        }
    }

    // $posterType = $_FILES['VideoPoster']['type'];
    // $posterSize = $_FILES['VideoPoster']['size'];

    // $videoType = $_FILES['VideoFile']['type'];
    // $videoSize = $_FILES['VideoFile']['size'];
    
    // $configVideo['upload_path'] = 'assets/vid/uploads';
    // $configVideo['max_size'] = '102400';
    // $configVideo['allowed_types'] = 'mp4';
    // $configVideo['overwrite'] = FALSE;
    // $configVideo['remove_spaces'] = TRUE;
    // $video_name = random_string('numeric', 5);
    // $configVideo['file_name'] = $video_name;

    // $this->load->library('upload', $configVideo);
    // $this->upload->initialize($configVideo);

    // if (!$this->upload->do_upload('uploadan'))
    // {
    //     $this->session->set_flashdata('error');
    // }
    // else
    // {
    //     $url = 'assets/gallery/images'.$video_name;
    //     $set1 =  $this->Model_name->uploadData($url);
    //     $this->session->set_flashdata('success', 'Video Has been Uploaded');
    //     redirect('controllerName/method');
    // }
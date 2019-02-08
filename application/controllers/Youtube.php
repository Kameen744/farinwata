<?php 
    class Youtube extends CI_Controller 
    {
        public function index() {
        $channelId = 'UCaxnujKbsu2Z-64c758bnag';
        $maxResults = 5;
        $API_key = 'AIzaSyA9hRVWls4xOSaWymLukJBFbuu8rXnPejk';


        $video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));
        
        $data['vids'] = $video_list;
            $this->load->view('templates/header');
            $this->load->view('pages/youtube', $data);
            $this->load->view('templates/footer');
     
        }
    }
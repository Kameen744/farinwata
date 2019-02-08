<section class="container">
    <div class="form-group custom-input-space has-feedback">
        <div class="page-body clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Videos</div>
                        <div class="panel-body">
                            <div id="my_video_list">
                            
                            <?php
                            $channelId = 'UCaxnujKbsu2Z-64c758bnag';
                            $API_Key = 'AIzaSyA9hRVWls4xOSaWymLukJBFbuu8rXnPejk';

                            $API_Url = 'https://www.googleapis.com/youtube/v3/';
                            // $API_Key = 'AIzaSyA9hRVWls4xOSaWymLukJBFbuu8rXnPejk';
        
                            // // If you don't know the channel ID see below
                            // $channelId = 'UCVf4wSlyeBqofT6ZQ8V3FmA';
                                
                            $parameter = [
                                'id'=> $channelId,
                                'part'=> 'contentDetails',
                                'key'=> $API_Key
                            ];
                            $channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
                            $json_details = json_decode(file_get_contents($channel_URL), true);
                                
                            $playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
                                
                            $parameter = [
                                'part'=> 'snippet',
                                'playlistId' => $playlist,
                                'maxResults'=> '50',
                                'key'=> $API_Key
                            ];
                            $channel_URL = $API_Url . 'playlistItems?' . http_build_query($parameter);
                            $json_details = json_decode(file_get_contents($channel_URL), true);
                                
                            $my_videos = [];
                            foreach($json_details['items'] as $video){
                                //$my_videos[] = $video['snippet']['resourceId']['videoId'];
                                $my_videos[] = array( 'v_id'=>$video['snippet']['resourceId']['videoId'], 'v_name'=>$video['snippet']['title'] );
                            }
                                
                            while(isset($json_details['nextPageToken'])){
                                $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
                                $json_details = json_decode(file_get_contents($nxt_page_URL), true);
                                foreach($json_details['items'] as $video)
                                    $my_videos[] = $video['snippet']['resourceId']['videoId'];
                            }
                            //print_r($my_videos);

                            foreach($my_videos as $video){
                                if(isset($video['v_id'])){
                                    echo '<a class="play_vid" href="https://www.youtube.com/watch?v='. $video['v_id'] .'" style="background: url(\'https://img.youtube.com/vi/'. $video['v_id'] .'/mqdefault.jpg\')">
                                            <div>'. $video['v_name'] .'</div>
                                        </a>';
                                }
                            }?>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="my_player"><div>
            </div></div>

            </div>
        </div>
    </div>
</section>
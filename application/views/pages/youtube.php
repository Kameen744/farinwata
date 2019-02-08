<?php

print_r($vids->items[0]);
    
?>

<div class="row" id="my_video_list">
    
           
  <a class="col-3 m-0 p-0" href="https://www.youtube.com/watch?v=<?= $vids->items[0]->id->videoId?>" style="background: url(https://img.youtube.com/vi/<?= $vids->items[0]->id->videoId?>/mqdefault.jpg)">
      <div class="text-white"><?= ucfirst($vids->items[0]->snippet->title)?></div>
  </a>
            
   
</div>
<div id="my_player"><div>

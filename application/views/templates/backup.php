  <!-- /videos ent col -->
  <div class="col-md-8 pb-2 shadow-lg rounded pt-3" id="vidscol">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto px-2 bg-danger text-white">VIDEOS</div>
                    <div class="pr-3 d-inline-flex">
                        <li class="li bg-danger hnd px-2 mr-1" id="vidPrev" value="<?= $lmt['vidlmt']?>">
                            <i class="text-white fa fa-chevron-left"></i>
                        </li>
                        <li class="li bg-danger hnd px-2" id="vidNext" value="<?= $lmt['vidlmt']?>">
                            <i class="text-white fa fa-chevron-right"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row pt-1">
                    <div class="col-md-4 pl-0 pr-1">
                        <div class="card bg-dark">
                        <video controls width="248" height="166" preload="none" class="col-12"
                            poster="<?php echo base_url().$Videos[0]['Poster_Url']?>"
                            src="<?php echo base_url().$Videos[0]['File_Url']?>"
                            type="video/mp4">
                                <!-- <source src="/media/examples/flower.webm"
                                        type="video/webm"> -->
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <h6 class="text-white text-center"><?= $Videos[0]['Video_Title']?></h6>
                        </div>
                    </div>
                    <div class="col-md-4 pl-0 pr-1">
                        <div class="card bg-dark">
                        <video controls width="248" height="166" preload="none" class="col-12"
                            poster="<?php echo base_url().$Videos[1]['Poster_Url']?>"
                            src="<?php echo base_url().$Videos[1]['File_Url']?>"
                            type="video/mp4">
                                <!-- <source src="/media/examples/flower.webm"
                                        type="video/webm"> -->
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <h6 class="text-white text-center"><?= $Videos[1]['Video_Title']?></h6>
                        </div>
                    </div>
                    <div class="col-md-4 pl-0 pr-1">
                        <div class="card bg-dark">
                        <video controls width="248" height="166" preload="none" class="col-12"
                            poster="<?php echo base_url().$Videos[2]['Poster_Url']?>"
                            src="<?php echo base_url().$Videos[2]['File_Url']?>"
                            type="video/mp4">
                                <!-- <source src="/media/examples/flower.webm"
                                        type="video/webm"> -->
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <h6 class="text-white text-center"><?= $Videos[2]['Video_Title']?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ent col -->
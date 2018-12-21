<?php
function G_img($img, $size) {
    return  base_url() .'assets/img/uploads/'.$img .$size.'.jpg';
}?>
<div class="row">
    <div class="col-md-8 pl-0 pr-1">
        <div class="card">
            <?php
            echo'
            <img class="card-img-top" src="'.G_img($readPost['Img_Url'], 'lg').'" alt="">
            <div class="card-body p-2">
                <h2 class="text-center">'.$readPost['News_Title'].'</h2>
                <h5 style="max-height: 400px; overflow-y:scroll;">'
                .$this->typography->auto_typography($readPost['Description'], TRUE).'</h5>
            </div>
            '
            ?>
        </div>
    </div>
    <div class="col-md-4 pl-4" id="stickytop">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                        RELATED NEWS
                    </div>
                    <div class="w-auto pr-4">
                        <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                        <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach($intNws as $nws):?>
            <?php echo '
            <div class="row d-flex justify-content-between pt-2">
                <div class="col-3 p-0 m-0">
                    <img class="card-img-top" src="'.G_img($nws['Img_Url'], 'sm').'" alt="">
                </div>
                <div class="col-9 pl-2">
                    <h6 class="card-title">
                        <a href="'.site_url('/posts/' .$nws['id']).'" class="text-dark">
                        '.word_limiter($nws['News_Title'], 9).'
                        </a>
                    </h6>
                </div>
            </div>
            ';
            ?>
        <?php endforeach; ?>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
  
</div>
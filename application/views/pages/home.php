<?php
function G_img($img, $size) {
    return  base_url() .'assets/img/uploads/'.$img .$size.'.jpg';
}?>

<div class="row">
    <div class="col-md-6 pl-0 pr-1">
        <div class="card">
            <?php
            echo'
            <img class="card-img-top" src="'.G_img($locNws[0]['Img_Url'], 'lg').'" alt="">
            <div class="imagenews p-2">
                <h4>
                    <a href="'.site_url('/posts/' .$locNws[0]['id']).'" class="text-white">
                    '.$locNws[0]['News_Title'].'
                    </a>
                </h4>
            </div>
            '
            ?>
        </div>
    </div>
    <div class="col-md-6 pr-1 pl-1 pt-0">
        <div class="row">
            <div class="col-md-6 pr-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[1]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/' .$locNws[1]['id']).'" class="text-white">
                            '.$locNws[1]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
            <div class="col-md-6 pl-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[2]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                       <h6>
                            <a href="'.site_url('/posts/' .$locNws[2]['id']).'" class="text-white">
                            '.$locNws[2]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
        </div>

        <div class="row pt-2">
            <div class="col-md-6 pr-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[3]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/' .$locNws[3]['id']).'" class="text-white">
                            '.$locNws[3]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
            <div class="col-md-6 pl-1">
                <div class="card">
                <div class="nws-tag">
                    <span class="notify-badge-in">News</span>
                </div>
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[4]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/' .$locNws[4]['id']).'" class="text-white">
                            '.$locNws[4]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- /nws col -->
 <div class="row mt-2">
    <!-- nws col-8 -->
    <div class="col-md-8 pb-2 shadow-lg rounded">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white">NEWS</div>
                    <div class="w-auto pr-4">
                        <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                        <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-6 p-0 pr-3">
                <div class="card">
                <?php 
                    echo '
                    <img class="card-img-top" src="'.G_img($locNws[5]['Img_Url'], 'md').'" alt="'.$locNws[5]['News_Title'].'">
                    <div class="card-body" style="min-height: 130px;">
                        <h4 class="card-title">
                            <a href="'.site_url('/posts/' .$locNws[5]['id']).'" class="text-dark">
                            '.word_limiter($locNws[5]['News_Title'], 10).'
                            </a>
                        </h4>
                    </div>
                    ';
                ?>
                </div>
            </div>
            <div class="col-md-6 p-0 pl-2">
            <?php
                echo '
                <div class="row d-flex justify-content-between">  
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[6]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">
                            <a href="'.site_url('/posts/' .$locNws[6]['id']).'" class="text-dark">
                            '.word_limiter($locNws[6]['News_Title'], 15).'
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[4]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[4]['News_Title'], 14).'</h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[1]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[1]['News_Title'], 14).'</h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[2]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[2]['News_Title'], 14).'</h6>
                    </div>
                </div>
                    ';
                ?>
            </div>
        </div>
    </div>
    <!-- /nws col-8 -->
    <!-- frn nws -->
    <div class="col-md-4 pl-4 mt-4" id="stickytop">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                        FOREIGN NEWS
                    </div>
                    <div class="w-auto pr-4">
                        <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                        <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo '
        <div class="row d-flex justify-content-between">
            <div class="col-3 p-0 m-0">
                <img class="card-img-top" src="'.G_img($intNws[0]['Img_Url'], 'sm').'" alt="">
            </div>
            <div class="col-9 pl-2">
                <p class="card-title pr-3">'.word_limiter($intNws[0]['News_Title'], 8).'</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-3 p-0 m-0">
                <img class="card-img-top" src="'.G_img($intNws[1]['Img_Url'], 'sm').'" alt="">
            </div>
            <div class="col-9 pl-2">
                <p class="card-title pr-3">'.word_limiter($intNws[1]['News_Title'], 8).'</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-3 p-0 m-0">
                <img class="card-img-top" src="'.G_img($intNws[2]['Img_Url'], 'sm').'" alt="">
            </div>
            <div class="col-9 pl-2">
                <p class="card-title pr-3">'.word_limiter($intNws[2]['News_Title'], 8).'</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-3 p-0 m-0">
                <img class="card-img-top" src="'.G_img($intNws[3]['Img_Url'], 'sm').'" alt="">
            </div>
            <div class="col-9 pl-2">
                <p class="card-title pr-3">'.word_limiter($intNws[3]['News_Title'], 8).'</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-3 p-0 m-0">
                <img class="card-img-top" src="'.G_img($intNws[4]['Img_Url'], 'sm').'" alt="">
            </div>
            <div class="col-9 pl-2">
                <p class="card-title pr-3">'.word_limiter($intNws[4]['News_Title'], 8).'</p>
            </div>
        </div>
        ';?>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
    <!-- /frn nws -->
    <!-- pltcs -->
    <div class="col-md-8 pb-3 shadow-lg rounded pt-3">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white">POLITICS</div>
                    <div class="w-auto pr-4">
                        <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                        <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <?php echo '
            <div class="col-md-12">
                <div class="row pt-0">
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[0]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[0]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[1]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[1]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[2]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[2]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-1">
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[3]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[3]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[4]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[4]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[5]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                '.word_limiter($locPol[5]['News_Title'], 15).'
                                </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';?>
        </div>
    </div>
    <!-- /pltcs -->
    <!-- business/health col -->
    <div class="col-md-8 pl-3 pt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="row pr-1">
                    <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                        <div class="row pl-3 d-flex justify-content-between">
                            <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                                BUSINESS
                            </div>
                            <div class="w-auto pr-4">
                                <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                                <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pr-1">
                    <?php echo '
                    <div class="col-md-12 p-0">
                        <div class="card">
                        <img class="card-img-top" src="'.G_img($locBus[0]['Img_Url'], 'lg').'" alt="">
                            <div class="card-body">
                                <h4 class="card-title">'.word_limiter($locBus[0]['News_Title'], 15).'</h4>
                            </div>
                        </div>
                    </div>
                    ';?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row pl-1">
                    <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                        <div class="row pl-3 d-flex justify-content-between">
                            <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                                HEALTH
                            </div>
                            <div class="w-auto pr-4">
                                <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                                <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pl-1">
                <?php echo '
                    <div class="col-md-12 p-0">
                        <div class="card">
                        <img class="card-img-top" src="'.G_img($locHlth[0]['Img_Url'], 'lg').'" alt="">
                            <div class="card-body">
                                <h4 class="card-title">'.word_limiter($locHlth[0]['News_Title'], 15).'</h4>
                            </div>
                        </div>
                    </div>
                    ';?>
                </div>
            </div>
        </div> 
    </div>
    <!-- /business/health col -->
    <!-- spt col8 -->
    <div class="col-md-8 p-0 pt-3">
        <div class="row pl-3 pr-3">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-start">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                        SPORTS
                    </div>
                    <div class="w-auto pl-5">
                        <a href="" class="text-danger" id="locSportTab">LOCAL</a>
                    </div>
                    <div class="w-auto pl-5">
                        <a href="" class="text-danger" id="intSportTab">INTERNATIONAL</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php echo '
            <div class="col-md-6 pr-1">
                <div class="card">
                    <img class="card-img-top" src="'.G_img($locSprt[0]['Img_Url'], 'lg').'" alt="">
                    <div class="imagenews p-2">
                        <li class="li postTitle" value="'.$locSprt[0]['id'].'">
                            <a href="#" class="text-white">
                                '.$locSprt[0]['News_Title'].'
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-1">
                <div class="card">
                    <img class="card-img-top" src="'.G_img($locSprt[1]['Img_Url'], 'lg').'" alt="">
                    <div class="imagenews p-2">
                        <li class="li postTitle" value="'.$locSprt[1]['id'].'">
                            <a href="#" class="text-white">
                                '.$locSprt[1]['News_Title'].'
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            ';?>
        </div>
    </div> 
    <!-- /spt col8 -->
    <!-- ent col -->
    <div class="col-md-8 p-0 pt-3">
        <div class="row pl-3 pr-3">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-start">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                        ENTERTAINMENT
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="entcarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#entcarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#entcarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-8 p-0 pr-1">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                        <div class="imagenews p-4">
                                            <h4><a href="#" class="text-white">
                                                Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                            </a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 p-0 pl-1">
                                    <div class="row">
                                        <div class="col-12 pb-1">
                                            <div class="card">
                                                <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                                <div class="imagenews p-2">
                                                    <h4><a href="#" class="text-white">
                                                        Consectetur adipiscing elit END
                                                    </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 pb-1">
                                            <div class="card">
                                                <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                                <div class="imagenews p-2">
                                                    <h4><a href="#" class="text-white">
                                                        Consectetur adipiscing elit END
                                                    </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-8 p-0 pr-1">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                        <div class="imagenews p-4">
                                            <h4><a href="#" class="text-white">
                                                Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                            </a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 p-0 pl-1">
                                    <div class="row">
                                        <div class="col-12 pb-1">
                                            <div class="card">
                                                <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                                <div class="imagenews p-2">
                                                    <h4><a href="#" class="text-white">
                                                        Consectetur adipiscing elit END
                                                    </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 pb-1">
                                            <div class="card">
                                                <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                                                <div class="imagenews p-2">
                                                    <h4><a href="#" class="text-white">
                                                        Consectetur adipiscing elit END
                                                    </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#entcarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#entcarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div> 
    <!-- /ent col -->
    <div class="col-md-8 pb-2 shadow-lg rounded pt-3">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white">VIDEOS</div>
                    <div class="w-auto pr-4">
                        <a href="" class="text-danger"><span class="fas fa-chevron-left">&nbsp;&nbsp;</span></a>
                        <a href="" class="text-danger">&nbsp;&nbsp;<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="row pt-2">
                    <div class="col-md-3 pl-0 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                    1. Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-0 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                    1. Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-0 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                    1. Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-0 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() .'assets/img/img.jpg'; ?>" alt="">
                            <div class="imagenews p-2">
                                <p><a href="#" class="text-white">
                                    1. Longer text lorem ipsum dolor sit amet, consectetur adipiscing elit END
                                </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ent col -->
</div> 


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
                    <a href="'.site_url('/posts/read/' .$locNws[0]['id']).'" class="text-white">
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
            <div class="col-6 pr-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[1]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/read/' .$locNws[1]['id']).'" class="text-white">
                            '.$locNws[1]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[2]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                       <h6>
                            <a href="'.site_url('/posts/read/' .$locNws[2]['id']).'" class="text-white">
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
            <div class="col-6 pr-1">
                <div class="card">
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[3]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/read/' .$locNws[3]['id']).'" class="text-white">
                            '.$locNws[3]['News_Title'].'
                            </a>
                        </h6>
                    </div>
                    '
                ?>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="card">
                <div class="nws-tag">
                    <span class="notify-badge-in">News</span>
                </div>
                <?php
                    echo'
                    <img class="card-img-top" src="'.G_img($locNws[4]['Img_Url'], 'md').'" alt="">
                    <div class="imagenews p-2">
                        <h6>
                            <a href="'.site_url('/posts/read/' .$locNws[4]['id']).'" class="text-white">
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
    <div class="col-md-8 pb-2 shadow-lg rounded" id="news">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto p-0 px-2 bg-danger text-white">NEWS</div>
                    <div class="pr-3 d-inline-flex">
                        <li class="li bg-danger hnd px-2 mr-1" id="newsPrev" value="<?= $lmt['lcnwslmt']?>">
                            <i class="text-white fa fa-chevron-left"></i>
                        </li>
                        <li class="li bg-danger hnd px-2" id="newsNext" value="<?= $lmt['lcnwslmt']?>">
                            <i class="text-white fa fa-chevron-right"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 pr-3 pb-2">          
                <?php 
                    echo '
                    <div class="card pb-1">
                    <img class="card-img-top" src="'.G_img($locNws[5]['Img_Url'], 'md').'" alt="'.$locNws[5]['News_Title'].'">
                    <div class="card-body">
                        <h4 class="card-title col-cell">
                            <a href="'.site_url('/posts/read/' .$locNws[5]['id']).'" class="text-dark">
                            '.word_limiter($locNws[5]['News_Title'], 10).'
                            </a>
                        </h4>
                    </div>
                    </div>
                    ';
                ?>
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
                            <a href="'.site_url('/posts/read/' .$locNws[6]['id']).'" class="text-dark">
                            '.word_limiter($locNws[6]['News_Title'], 15).'
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[7]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[7]['News_Title'], 14).'</h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[8]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[8]['News_Title'], 14).'</h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-between pt-2">
                    <div class="col-4 p-0 m-0">
                        <img class="card-img-top" src="'.G_img($locNws[9]['Img_Url'], 'sm').'" alt="">
                    </div>
                    <div class="col-8 p-0 pl-2">
                        <h6 class="card-title pr-3">'.word_limiter($locNws[9]['News_Title'], 14).'</h6>
                    </div>
                </div>
                    ';
                ?>
            </div>
        </div>

        <div class="col-md-12 p-0 shadow-lg rounded" id="intnews">
            <div class="row">
                <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                    <div class="row pl-3 d-flex justify-content-between">
                        <div class="w-auto p-0 px-2 bg-danger text-white">FOREIGN</div>
                        <div class="pr-3 d-inline-flex">
                            <li class="li bg-danger hnd px-2 mr-1" id="intNext" value="<?= $lmt['lcnwslmt']?>">
                                <i class="text-white fa fa-chevron-left"></i>
                            </li>
                            <li class="li bg-danger hnd px-2" id="intPrev" value="<?= $lmt['lcnwslmt']?>">
                                <i class="text-white fa fa-chevron-right"></i>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background:#2a2a2a;">
                <div class="col-md-6 p-0 pr-3">          
                    <?php 
                        echo '
                        <div class="card">
                        <img class="card-img-top" src="'.G_img($intNws[0]['Img_Url'], 'md').'" alt="'.$intNws[0]['News_Title'].'">
                        <div class="card-body">
                            <h4 class="card-title col-cell">
                                <a href="'.site_url('/posts/read/' .$intNws[0]['id']).'" class="text-dark">
                                '.word_limiter($intNws[0]['News_Title'], 10).'
                                </a>
                            </h4>
                        </div>
                        </div>
                        ';
                    ?>
                </div>
                <div class="col-md-6 p-0 pl-2">
                <?php
                    echo '
                    <div class="row d-flex justify-content-between">  
                        <div class="col-4 p-0 m-0">
                            <img class="card-img-top" src="'.G_img($intNws[1]['Img_Url'], 'sm').'" alt="">
                        </div>
                        <div class="col-8 p-0 pl-2">
                            <h6 class="card-title pr-3">
                                <a href="'.site_url('/posts/read/' .$intNws[1]['id']).'" class="text-white">
                                '.word_limiter($intNws[1]['News_Title'], 15).'
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between pt-2">
                        <div class="col-4 p-0 m-0">
                            <img class="card-img-top" src="'.G_img($intNws[2]['Img_Url'], 'sm').'" alt="">
                        </div>
                        <div class="col-8 p-0 pl-2">
                            <h6 class="card-title pr-3">
                                <a href="'.site_url('/posts/read/' .$intNws[2]['id']).'" class="text-white">
                                '.word_limiter($intNws[2]['News_Title'], 15).'
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between pt-2">
                        <div class="col-4 p-0 m-0">
                            <img class="card-img-top" src="'.G_img($intNws[3]['Img_Url'], 'sm').'" alt="">
                        </div>
                        <div class="col-8 p-0 pl-2">
                            <h6 class="card-title pr-3">
                                <a href="'.site_url('/posts/read/' .$intNws[3]['id']).'" class="text-white">
                                '.word_limiter($intNws[3]['News_Title'], 15).'
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between pt-2">
                        <div class="col-4 p-0 m-0">
                            <img class="card-img-top" src="'.G_img($intNws[4]['Img_Url'], 'sm').'" alt="">
                        </div>
                        <div class="col-8 p-0 pl-2">
                            <h6 class="card-title pr-3">
                                <a href="'.site_url('/posts/read/' .$intNws[4]['id']).'" class="text-white">
                                '.word_limiter($intNws[4]['News_Title'], 15).'
                                </a>
                            </h6>
                        </div>
                    </div>
                        ';
                    ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /nws col-8 -->
    <!-- frn nws -->
    <div class="col-md-4 pl-4 mt-4" id="stickytop">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto px-2 bg-danger text-white w-25">
                        CURRENCY EXCHANGE RATE
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-12 p-0 m-0">
            <!-- Exchange Rates Script - EXCHANGERATEWIDGET.COM -->
            <div style="width:368px;font-size:13px;border:1px solid #E5E5E5;text-align:left;"><div style="text-align:left;background-color:#E5E5E5;width:100%;border-bottom:0px;height:16px; font-size:13px;font-weight:bold;padding:5px 0px;"><span style="margin-left:2px;background-image:url(//www.exchangeratewidget.com/flag.png); background-position: 0 -1232px; width:100%; height:15px; background-repeat:no-repeat;padding-left:5px;"><a href="https://www.exchangeratewidget.com/" style="color:#000000; text-decoration:none;padding-left:22px;" rel="nofollow">US Dollar Exchange Rates</a></span></div><script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=NGN,CNY,SAR,HKD,ZAR,AED,GBP,INR,EUR,&a=1&d=E5E5E5&n=FFFFFF&o=000000&v=5"></script></div>
            <!-- End of Exchange Rates Script -->
            </div>
        </div>
        <div class="col-12 p-0 m-0">
            <div class="row">
                <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                    <div class="row pl-3 d-flex justify-content-between">
                        <div class="w-auto px-2 bg-danger text-white w-25">
                            WEATHER FORECAST
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-12 p-0 m-0">
                <a class="weatherwidget-io" href="https://forecast7.com/en/9d087d40/abuja/" data-label_1="ABUJA" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-days="3" data-theme="dark" >ABUJA WEATHER</a>
                <a class="weatherwidget-io" href="https://forecast7.com/en/6d523d38/lagos/" data-label_1="LAGOS" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-days="3" data-theme="dark" >LAGOS WEATHER</a>
                <a class="weatherwidget-io" href="https://forecast7.com/en/13d015d25/sokoto/" data-label_1="SOKOTO" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-days="3" data-theme="dark" >SOKOTO WEATHER</a>
                </div> 
            </div>        
        </div>
       
        <div class="col-12 p-0 pt-1 m-0">
            <div class="row">
                <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                    <div class="row pl-3 d-flex justify-content-between">
                        <div class="w-auto px-2 bg-danger text-white w-25">
                            FOLLOW US
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-3 p-0 m-0">
                    <a href="#" class="text-danger fa fa-facebook-square fa-5x"></a>
                </div>
                <div class="col-3 p-0 m-0">
                    <a href="https://www.youtube.com/channel/UC8i3e77KKNJqWAcC2DCGixA" class="text-danger fa fa-youtube-square fa-5x"></a>
                </div>
                <div class="col-3 p-0 m-0">
                    <a href="https://www.instagram.com/accounts/login/?hl=en@farinwata178" class="text-danger fa fa-instagram fa-5x"></a>
                </div>
                <div class="col-3 p-0 m-0">
                    <a href="https://twitter.com/login?lang=en@farinwata178" class="text-danger fa fa-twitter-square fa-5x"></a>
                </div> 
            </div>        
        </div>
    </div>
    
    <!-- /frn nws -->
    <!-- pltcs -->
    <div class="col-md-8 pb-3 shadow-lg rounded pt-3" id="polnws">
        <div class="row">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="w-auto px-2 bg-danger text-white">POLITICS</div>
                    <div class="pr-3 d-inline-flex">
                        <li class="li bg-danger hnd px-2 mr-1" id="polPrev" value="<?= $lmt['lcpollmt']?>">
                            <i class="text-white fa fa-chevron-left"></i>
                        </li>
                        <li class="li bg-danger hnd px-2" id="polNext" value="<?= $lmt['lcpollmt']?>">
                            <i class="text-white fa fa-chevron-right"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <?php echo '
            <div class="col-md-12">
                <div class="row pt-0">
                    <div class="col-md-4 col-12 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[0]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[0]['id']).'" class="text-white">
                                '.word_limiter($locPol[0]['News_Title'], 15).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[1]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[1]['id']).'" class="text-white">
                                '.word_limiter($locPol[1]['News_Title'], 15).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[2]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[2]['id']).'" class="text-white">
                                '.word_limiter($locPol[2]['News_Title'], 15).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-1">
                    <div class="col-md-4 col-12 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[3]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[3]['id']).'" class="text-white">
                                '.word_limiter($locPol[3]['News_Title'], 15).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[4]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[4]['id']).'" class="text-white">
                                '.word_limiter($locPol[4]['News_Title'], 15).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pl-1 pr-1">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locPol[5]['Img_Url'], 'md').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locPol[5]['id']).'" class="text-white">
                                '.word_limiter($locPol[5]['News_Title'], 15).'
                                </a></h6>
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
            <div class="col-md-6" id="busnws">
                <div class="row pr-1">
                    <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                        <div class="row pl-3 d-flex justify-content-between">
                            <div class="w-auto px-2 bg-danger text-white w-25">
                                BUSINESS
                            </div>
                            <div class="pr-3 d-inline-flex">
                                <li class="li bg-danger hnd px-2 mr-1" id="busPrev" value="<?= $lmt['lcbuslmt']?>">
                                    <i class="text-white fa fa-chevron-left"></i>
                                </li>
                                <li class="li bg-danger hnd px-2" id="busNext" value="<?= $lmt['lcbuslmt']?>">
                                    <i class="text-white fa fa-chevron-right"></i>
                                </li>
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
                                <h4 class="card-title col-cell">
                                    <a href="'.site_url('/posts/read/' .$locBus[0]['id']) .'" class="text-dark">
                                        '.word_limiter($locBus[0]['News_Title'], 10) .'
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    ';?>
                </div>
            </div>

            <div class="col-md-6" id="hltnws">
                <div class="row pl-1">
                    <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                        <div class="row pl-3 d-flex justify-content-between">
                            <div class="w-auto px-2 bg-danger text-white w-25">
                                HEALTH
                            </div>
                            <div class="pr-3 d-inline-flex">
                                <li class="li bg-danger hnd px-2 mr-1" id="hltPrev" value="<?= $lmt['lchltlmt']?>">
                                    <i class="text-white fa fa-chevron-left"></i>
                                </li>
                                <li class="li bg-danger hnd px-2" id="hltNext" value="<?= $lmt['lchltlmt']?>">
                                    <i class="text-white fa fa-chevron-right"></i>
                                </li>
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
                                <h4 class="card-title col-cell">
                                    <a href="'.site_url('/posts/read/' .$locHlth[0]['id']) .'" class="text-dark">
                                        '.word_limiter($locHlth[0]['News_Title'], 10) .'
                                    </a>
                                </h4>
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
    <div class="col-md-8 p-0 pt-3" id="lcintspt">
        <div class="row px-3">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
                <div class="row pl-3 d-flex justify-content-between">
                    <div class="col-6 m-0 p-0 d-flex justify-content-start">
                        <div class="w-auto px-2 bg-danger text-white w-25">
                            SPORTS
                        </div>
                        <div class="w-auto pl-3" id="locSportTab">
                            <li class="li px-2 hnd text-danger active" id="locSportVal" value="Local">LOCAL</li>
                        </div>
                        <div class="w-auto pl-3 pr-5" id="intSportTab">
                            <li class="li px-2 hnd text-danger" id="intSportVal">FOREIGN</li>
                        </div>
                    </div>
                    <div class="col-6 m-0 pr-3 d-flex justify-content-end">
                        <div class="d-inline-flex">
                            <li class="li bg-danger hnd px-2 mr-1" id="lcsprPrev" value="<?= $lmt['lcsprlmt']?>">
                                <i class="text-white fa fa-chevron-left"></i>
                            </li>
                            <li class="li bg-danger hnd px-2" id="lcsprNext" value="<?= $lmt['lcsprlmt']?>">
                                <i class="text-white fa fa-chevron-right"></i>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php echo '
            <div class="col-6 pr-1">
                <div class="card">
                    <img class="card-img-top" src="'.G_img($locSprt[0]['Img_Url'], 'lg').'" alt="">
                    <div class="imagenews p-2">
                        <li class="li postTitle" value="'.$locSprt[0]['id'].'">
                            <a href="'.site_url('/posts/read/' .$locSprt[0]['id']).'" class="text-white">
                                '.word_limiter($locSprt[0]['News_Title'], 10).'
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="card">
                    <img class="card-img-top" src="'.G_img($locSprt[1]['Img_Url'], 'lg').'" alt="">
                    <div class="imagenews p-2">
                        <li class="li postTitle" value="'.$locSprt[1]['id'].'">
                            <a href="'.site_url('/posts/read/' .$locSprt[0]['id']).'" class="text-white">
                                '.word_limiter($locSprt[1]['News_Title'], 10).'
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
    <div class="col-md-8 p-0 pt-3" id="entnws">
        <div class="row px-3">
            <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto p-0 px-2 bg-danger text-white">ENTERTAINMENT</div>
                    <div class="pr-3 d-inline-flex">
                        <li class="li bg-danger hnd px-2 mr-1" id="entPrev" value="<?= $lmt['lcentlmt']?>">
                            <i class="text-white fa fa-chevron-left"></i>
                        </li>
                        <li class="li bg-danger hnd px-2" id="entNext" value="<?= $lmt['lcentlmt']?>">
                            <i class="text-white fa fa-chevron-right"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <?php echo '
        <div class="row px-3">
            <div class="col-md-8 p-0">
                <div class="card">
                    <img class="card-img-top" src="'.G_img($locEnt[0]['Img_Url'], 'lg').'" alt="">
                    <div class="imagenews text-center">
                        <h6><a href="'.site_url('/posts/read/' .$locEnt[0]['id']).'" class="text-white">
                        '.word_limiter($locEnt[0]['News_Title'], 10).'
                        </a></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="row">
                    <div class="col-md-12 pl-3">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locEnt[1]['Img_Url'], 'lg').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locEnt[1]['id']).'" class="text-white">
                                '.word_limiter($locEnt[1]['News_Title'], 10).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pl-3">
                        <div class="card">
                            <img class="card-img-top" src="'.G_img($locEnt[2]['Img_Url'], 'lg').'" alt="">
                            <div class="imagenews text-center">
                                <h6><a href="'.site_url('/posts/read/' .$locEnt[2]['id']).'" class="text-white">
                                '.word_limiter($locEnt[2]['News_Title'], 10).'
                                </a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';?>
    </div> 
</div> 


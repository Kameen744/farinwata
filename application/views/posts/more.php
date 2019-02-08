<?php
if (!function_exists('G_img')) {
    function G_img($img, $size) {
        return  base_url() .'assets/img/uploads/'.$img .$size.'.jpg';
    }
}    
?>

<?php if(isset($newsNext)): ?>
<div class="row">
    <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
        <div class="row pl-3 d-flex justify-content-between">
            <div class="w-auto p-0 pr-2 pl-2 bg-danger text-white">NEWS</div>
            <div class="pr-3 d-inline-flex">
                <li class="li bg-danger hnd pr-2 pl-2 mr-1" id="newsPrev" value="<?= $curPrev?>">
                    <i class="text-white fa fa-chevron-left"></i>
                </li>
                <li class="li bg-danger hnd pl-2 pr-2" id="newsNext" value="<?= $curNext?>">
                    <i class="text-white fa fa-chevron-right"></i>
                </li>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 p-0 pr-3">          
        <div class="card">
        <img class="card-img-top" src="<?= G_img($newsNext[2]['Img_Url'], 'md') ?>" alt="<?= $newsNext[2]['News_Title'] ?>">
        <div class="card-body">
            <h4 class="card-title">
                <a href="<?= site_url('/posts/read/' .$newsNext[2]['id']) ?>" class="text-dark">
                <?= word_limiter($newsNext[2]['News_Title'], 10) ?>
                </a>
            </h4>
        </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'md')?>" alt="<?= $newsNext[3]['News_Title'] ?>">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-6 p-0 pl-2">
        <div class="row d-flex justify-content-between">  
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>" alt="<?= $newsNext[3]['News_Title'] ?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between pt-2">
            <div class="col-4 p-0 m-0">
                <img class="card-img-top" src="<?= G_img($newsNext[3]['Img_Url'], 'sm')?>">
            </div>
            <div class="col-8 p-0 pl-2">
                <h6 class="card-title pr-3">
                    <a href="<?= site_url('/posts/read/' .$newsNext[3]['id'])?>" class="text-dark">
                    <?= word_limiter($newsNext[3]['News_Title'], 10) ?>
                    </a>
                </h6>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(isset($intNext)): ?>
    <div class="row">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto p-0 px-2 bg-danger text-white">FOREIGN</div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd px-2 mr-1" id="intNext" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd px-2" id="intPrev" value="<?= $curNext?>">
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
                <img class="card-img-top" src="'.G_img($intNext[0]['Img_Url'], 'md').'" alt="'.$intNext[0]['News_Title'].'">
                <div class="card-body">
                    <h4 class="card-title col-cell">
                        <a href="'.site_url('/posts/read/' .$intNext[0]['id']).'" class="text-dark">
                        '.word_limiter($intNext[0]['News_Title'], 10).'
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
                    <img class="card-img-top" src="'.G_img($intNext[1]['Img_Url'], 'sm').'" alt="">
                </div>
                <div class="col-8 p-0 pl-2">
                    <h6 class="card-title pr-3">
                        <a href="'.site_url('/posts/read/' .$intNext[1]['id']).'" class="text-white">
                        '.word_limiter($intNext[1]['News_Title'], 15).'
                        </a>
                    </h6>
                </div>
            </div>
            <div class="row d-flex justify-content-between pt-2">
                <div class="col-4 p-0 m-0">
                    <img class="card-img-top" src="'.G_img($intNext[2]['Img_Url'], 'sm').'" alt="">
                </div>
                <div class="col-8 p-0 pl-2">
                    <h6 class="card-title pr-3">
                        <a href="'.site_url('/posts/read/' .$intNext[2]['id']).'" class="text-white">
                        '.word_limiter($intNext[2]['News_Title'], 15).'
                        </a>
                    </h6>
                </div>
            </div>
            <div class="row d-flex justify-content-between pt-2">
                <div class="col-4 p-0 m-0">
                    <img class="card-img-top" src="'.G_img($intNext[3]['Img_Url'], 'sm').'" alt="">
                </div>
                <div class="col-8 p-0 pl-2">
                    <h6 class="card-title pr-3">
                        <a href="'.site_url('/posts/read/' .$intNext[3]['id']).'" class="text-white">
                        '.word_limiter($intNext[3]['News_Title'], 15).'
                        </a>
                    </h6>
                </div>
            </div>
            <div class="row d-flex justify-content-between pt-2">
                <div class="col-4 p-0 m-0">
                    <img class="card-img-top" src="'.G_img($intNext[4]['Img_Url'], 'sm').'" alt="">
                </div>
                <div class="col-8 p-0 pl-2">
                    <h6 class="card-title pr-3">
                        <a href="'.site_url('/posts/read/' .$intNext[4]['id']).'" class="text-white">
                        '.word_limiter($intNext[4]['News_Title'], 15).'
                        </a>
                    </h6>
                </div>
            </div>
                ';
            ?>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($polNext)): ?>
    <div class="row">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto pr-2 pl-2 bg-danger text-white">POLITICS</div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd pr-2 pl-2 mr-1" id="polPrev" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd pl-2 pr-2" id="polNext" value="<?= $curNext?>">
                        <i class="text-white fa fa-chevron-right"></i>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-12">
            <div class="row pt-0">
                <div class="col-md-4 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[0]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[0]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[0]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[1]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[1]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[1]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[2]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[2]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[2]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-1">
                <div class="col-md-4 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[3]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[3]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[3]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[4]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[4]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[4]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 pl-1 pr-1">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($polNext[5]['Img_Url'], 'md') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$polNext[5]['id']) ?>" class="text-white">
                                <?= word_limiter($polNext[5]['News_Title'], 15) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($busNext)): ?>
    <div class="row pr-1">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                    BUSINESS
                </div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd pr-2 pl-2 mr-1" id="busPrev" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd pl-2 pr-2" id="busNext" value="<?= $curNext?>">
                        <i class="text-white fa fa-chevron-right"></i>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row pr-1">
        <div class="col-md-12 p-0">
            <div class="card">
            <img class="card-img-top" src="<?= G_img($busNext[0]['Img_Url'], 'lg') ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title col-cell">
                        <a href="<?= site_url('/posts/read/' .$busNext[0]['id'])?>" class="text-dark">
                        <?= word_limiter($busNext[0]['News_Title'], 10) ?>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($hltNext)): ?>
<div class="row pr-1">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                    HEALTH
                </div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd pr-2 pl-2 mr-1" id="hltPrev" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd pl-2 pr-2" id="hltNext" value="<?= $curNext?>">
                        <i class="text-white fa fa-chevron-right"></i>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row pr-1">
        <div class="col-md-12 p-0">
            <div class="card">
            <img class="card-img-top" src="<?= G_img($hltNext[0]['Img_Url'], 'lg') ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title col-cell">
                        <a href="<?= site_url('/posts/read/' .$hltNext[0]['id'])?>" class="text-dark">
                        <?= word_limiter($hltNext[0]['News_Title'], 10) ?>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($bgnlcspr)): ?>
    <div class="row pl-3 pr-3">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="col-6 m-0 p-0 d-flex justify-content-start">
                    <div class="w-auto pr-2 pl-2 bg-danger text-white w-25">
                        SPORTS
                    </div>
                    <div class="w-auto pl-3" id="locSportTab">
                        <li class="li pr-2 pl-2 hnd text-danger" id="locSportVal" value="<?= $lcinttype?>">LOCAL</li>
                    </div>
                    <div class="w-auto pl-3 pr-5" id="intSportTab">
                        <li class="li pr-2 pl-2 hnd text-danger" id="intSportVal">FOREIGN</li>
                    </div>
                </div>
                <div class="col-6 m-0 pr-3 d-flex justify-content-end">
                    <div class="d-inline-flex">
                        <li class="li bg-danger hnd pr-2 pl-2 mr-1" id="lcsprPrev" value="<?= $curPrev?>">
                            <i class="text-white fa fa-chevron-left"></i>
                        </li>
                        <li class="li bg-danger hnd pl-2 pr-2" id="lcsprNext" value="<?= $curNext?>">
                            <i class="text-white fa fa-chevron-right"></i>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 pr-1">
            <div class="card">
                <img class="card-img-top" src="<?= G_img($bgnlcspr[0]['Img_Url'], 'lg') ?>" alt="">
                <div class="imagenews p-2">
                    <li class="li postTitle" value="<?= $bgnlcspr[0]['id'] ?>">
                        <a href="<?= site_url('/posts/read/' .$bgnlcspr[0]['id'])?>" class="text-white">
                            <?= word_limiter($bgnlcspr[0]['News_Title'], 10) ?>
                        </a>
                    </li>
                </div>
            </div>
        </div>
        <div class="col-6 pl-1">
            <div class="card">
                <img class="card-img-top" src="<?= G_img($bgnlcspr[1]['Img_Url'], 'lg') ?>" alt="">
                <div class="imagenews p-2">
                    <li class="li postTitle" value="<?= $bgnlcspr[1]['id'] ?>">
                        <a href="<?= site_url('/posts/read/' .$bgnlcspr[0]['id'])?>" class="text-white">
                            <?= word_limiter($bgnlcspr[1]['News_Title'], 10) ?>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($entNext)):?>
    <div class="row px-3">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
        <div class="row pl-3 d-flex justify-content-between">
            <div class="w-auto p-0 px-2 bg-danger text-white">ENTERTAINMENT</div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd px-2 mr-1" id="entPrev" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd px-2" id="entNext" value="<?= $curNext?>">
                        <i class="text-white fa fa-chevron-right"></i>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-md-8 p-0">
            <div class="card">
                <img class="card-img-top" src="<?= G_img($entNext[0]['Img_Url'], 'lg')?>" alt="">
                <div class="imagenews text-center">
                    <h6><a href="<?= site_url('/posts/read/' .$entNext[0]['id']) ?>" class="text-white">
                        <?= word_limiter($entNext[0]['News_Title'], 10) ?>
                    </a></h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0">
            <div class="row">
                <div class="col-md-12 pl-3">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($entNext[1]['Img_Url'], 'lg') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$entNext[1]['id']) ?>" class="text-white">
                                <?= word_limiter($entNext[1]['News_Title'], 10) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pl-3">
                    <div class="card">
                        <img class="card-img-top" src="<?= G_img($entNext[2]['Img_Url'], 'lg') ?>" alt="">
                        <div class="imagenews text-center">
                            <h6><a href="<?= site_url('/posts/read/' .$entNext[2]['id']) ?>" class="text-white">
                                <?= word_limiter($entNext[2]['News_Title'], 10) ?>
                            </a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(isset($vidNext)): ?>
    <div class="row">
        <div class="col-12 p-0" style="border-bottom: 2px solid #dc3545;">
            <div class="row pl-3 d-flex justify-content-between">
                <div class="w-auto px-2 bg-danger text-white">VIDEOS</div>
                <div class="pr-3 d-inline-flex">
                    <li class="li bg-danger hnd px-2 mr-1" id="vidPrev" value="<?= $curPrev?>">
                        <i class="text-white fa fa-chevron-left"></i>
                    </li>
                    <li class="li bg-danger hnd px-2" id="vidNext" value="<?= $curNext?>">
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
                        poster="<?= base_url().$vidNext[0]['Poster_Url']?>"
                        src="<?= base_url().$vidNext[0]['File_Url']?>"
                        type="video/mp4">
                            <!-- <source src="/media/examples/flower.webm"
                                    type="video/webm"> -->
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                        <h6 class="text-white text-center"><?= $vidNext[0]['Video_Title']?></h6>
                    </div>
                </div>
                <div class="col-md-4 pl-0 pr-1">
                    <div class="card bg-dark">
                    <video controls width="248" height="166" preload="none" class="col-12"
                        poster="<?= base_url().$vidNext[1]['Poster_Url']?>"
                        src="<?= base_url().$vidNext[1]['File_Url']?>"
                        type="video/mp4">
                            <!-- <source src="/media/examples/flower.webm"
                                    type="video/webm"> -->
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                        <h6 class="text-white text-center"><?= $vidNext[1]['Video_Title']?></h6>
                    </div>
                </div>
                <div class="col-md-4 pl-0 pr-1">
                    <div class="card bg-dark">
                    <video controls width="248" height="166" preload="none" class="col-12"
                        poster="<?= base_url().$vidNext[2]['Poster_Url']?>"
                        src="<?= base_url().$vidNext[2]['File_Url']?>"
                        type="video/mp4">
                            <!-- <source src="/media/examples/flower.webm"
                                    type="video/webm"> -->
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                        <h6 class="text-white text-center"><?= $vidNext[2]['Video_Title']?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
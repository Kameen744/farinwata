    </div>
</main>
<footer>
        <div class="navbar fixed-bottom main-bgnd p-0 m-0">
            <ul id="marquee" class="p-0 m-0">
                <li>
                    <?php if(isset($locNws[0]) & isset($locNws[1]) & isset($locNws[2])):?>
                        <a href="<?= site_url('/posts/read/' .$locNws[0]['id'])?>" class="text-white">
                        News: <?=$locNws[0]['News_Title'] ?> &#9898; 
                        </a>
                        <a href="<?= site_url('/posts/read/' .$locNws[1]['id'])?>" class="text-white">
                        News: <?=$locNws[1]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif; ?>
                    <?php if(isset($intNws[0]) & isset($intNws[1])):?>
                        <a href="<?= site_url('/posts/read/' .$intNws[0]['id'])?>" class="text-white">
                        Foreign: <?=$intNws[0]['News_Title'] ?> &#9898; 
                        </a>
                        <a href="<?= site_url('/posts/read/' .$intNws[1]['id'])?>" class="text-white">
                        Foreign: <?=$intNws[1]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                    <?php if(isset($locPol[0]) & isset($locPol[1])):?>
                        <a href="<?= site_url('/posts/read/' .$locPol[0]['id'])?>" class="text-white">
                        Politics: <?=$locPol[0]['News_Title'] ?> &#9898; 
                        </a>
                        <a href="<?= site_url('/posts/read/' .$locPol[1]['id'])?>" class="text-white">
                        Politics: <?=$locPol[1]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                    <?php if(isset($locBus[0])):?>
                        <a href="<?= site_url('/posts/read/' .$locBus[0]['id'])?>" class="text-white">
                        Business: <?=$locBus[0]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                    <?php if(isset($locHlth[0])):?>
                        <a href="<?= site_url('/posts/read/' .$locHlth[0]['id'])?>" class="text-white">
                        Health: <?=$locHlth[0]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                    <?php if(isset($locSprt[0]) & isset($locSprt[1])):?>
                        <a href="<?= site_url('/posts/read/' .$locSprt[0]['id'])?>" class="text-white">
                        Sport: <?=$locSprt[0]['News_Title'] ?> &#9898; 
                        </a>
                        <a href="<?= site_url('/posts/read/' .$locSprt[1]['id'])?>" class="text-white">
                        Sport: <?=$locSprt[1]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                    <?php if(isset($locEnt[0]) & isset($locEnt[1])):?>
                        <a href="<?= site_url('/posts/read/' .$locEnt[0]['id'])?>" class="text-white">
                        Entertainment: <?=$locEnt[0]['News_Title'] ?> &#9898; 
                        </a>
                        <a href="<?= site_url('/posts/read/' .$locEnt[1]['id'])?>" class="text-white">
                        Entertainment: <?=$locEnt[1]['News_Title'] ?> &#9898; 
                        </a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </footer>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<script src="https://www.btfscores.com/widgets/widget-side.min.js" async></script>
  </body>
</html>
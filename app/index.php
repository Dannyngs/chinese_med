<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM illness ");
    $illnesses = $rs->fetchAll();



?>

<?php require_once 'header.php' ?>

    <!-- Slider dsdfsdf-->

    <div class="slider box">

        <!-- Slides -->
        <ul class="photo_slider rs-slider">

           
            <li>
                <img src="_/img/banner.jpg" alt="" />
               
            </li>
            
              <li>
                <img src="_/img/banner1.jpg" alt="" />
               
            </li>
            
              <li>
                <img src="_/img/banner2.jpg" alt="" />
               
            </li>
            
              <li>
                <img src="_/img/banner3.jpg" alt="" />
               
            </li>
           
        </ul>

    </div>


    <div class="content_box">



        <!-- Call to action -->
        <section class="call_to_action clearfix">
            <div class="row">
                <h1 class="text-center"><?php echo $system[$current_lang.'home_title']?></h1>
                <h2 class="text-center"><?php echo $system[$current_lang.'home_content']?></h2>
                
                <p><b>治療:</b><br/>

              <?php foreach($illnesses as $key=>$ill)
    if($key!=0)echo ",";
echo  $ill[$current_lang.'_title'];
?>
                </p>
                <a href="#" class="big theme_button">
                    <i class="icon-phone" style="margin-right:10px;"></i>
                    (00852)2889 6080</a>
            </div>
        </section>


        <!-- Portfolio -->
        <section class="row">

            <div class="full">
                <h2>治療方法</h2>
                <p class="headline">黎醫師根據個別的情況運用經筋鬆解推拿療法丶痛症微電療法丶皮膚微電療法丶天然藥膏丶針灸丶中藥丶無痛頭針療法</p>
            </div>

            <!-- Touch enabled scrolling -->
            <div class="touch_scroll">
                <ul class="portfolio clearfix">

                    <li class="webdesign one_quarter">
                        <a href="_/img/index1.jpg" class="fancybox_photo thumb">
                            <img src="_/img/index1.jpg" alt="" />
                            <div class="fade"><span><i class="icon-plus-sign"></i></span></div>
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="_/img/index1.jpg" class="fancybox_photo thumb">
                            <img src="_/img/index1.jpg" alt="" />
                            <div class="fade"><span><i class="icon-plus-sign"></i></span></div>
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="_/img/index1.jpg" class="fancybox_photo thumb">
                            <img src="_/img/index1.jpg" alt="" />
                            <div class="fade"><span><i class="icon-plus-sign"></i></span></div>
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="_/img/index1.jpg" class="fancybox_photo thumb">
                            <img src="_/img/index1.jpg" alt="" />
                            <div class="fade"><span><i class="icon-plus-sign"></i></span></div>
                        </a>
                    </li>

                   

                </ul>
            </div>

        </section>

    </div>

    <div class="clearfix"></div>


<?php require_once 'footer.php' ?>



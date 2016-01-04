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
              <li>
                <img src="_/img/banner4.jpg" alt="" />
               
            </li>
           
        </ul>

    </div>


    <div class="content_box">



        <!-- Call to action -->
        <section class="call_to_action clearfix">
            <div class="row">
                <h1 class="text-center"><?php echo $system[$current_lang.'_home_title']?></h1>
                <h2 class="text-center"><?php echo $system[$current_lang.'_home_content']?></h2>
                
                <p><b><?php echo $lang['treament']?>:</b><br/>

              <?php foreach($illnesses as $key=>$ill)
{if($key!=0)echo ",";
echo  $ill[$current_lang.'_title'];
}
?>
                </p>
                <a href="#" class="big theme_button">
                    <i class="icon-phone" style="margin-right:10px;"></i>
                    (852)2889 6080</a>
            </div>
        </section>


        <!-- Portfolio -->
        <section class="row">

            <div class="full">
                <h2><?php echo $lang['treament_method']?></h2>
                <p class="headline"><?php echo $system[$current_lang.'_treament']?></p>
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



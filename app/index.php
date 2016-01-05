<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM illness ");
    $illnesses = $rs->fetchAll();



?>

<?php require_once 'header.php' ?>

    <!-- Slider dsdfsdf-->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="_/img/banner.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="_/img/banner1.jpg" alt="...">
      
    </div>
       <div class="item">
      <img src="_/img/banner2.jpg" alt="...">
      
    </div>
       <div class="item">
      <img src="_/img/banner3.jpg" alt="...">
      
    </div>
       <div class="item">
      <img src="_/img/banner4.jpg" alt="...">
      
    </div>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
echo  "<a href='illness.php?id=".$ill['id']."'>".$ill[$current_lang.'_title']."</a>";
}
?>
                </p>
                <a href="contact.php" class="big theme_button">
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
                        <a href="pricing.php" >
                            <img src="_/img/index1.jpg" alt="" />
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="pricing.php" >
                            <img src="_/img/index2.jpg" alt="" />
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="pricing.php" >
                            <img src="_/img/index3.jpg" alt="" />
                        </a>
                    </li>
                    
                      <li class="webdesign one_quarter">
                        <a href="pricing.php" >
                            <img src="_/img/index4.jpg" alt="" />
                        </a>
                    </li>

                   

                </ul>
            </div>

        </section>

    </div>

    <div class="clearfix"></div>


<?php require_once 'footer.php' ?>



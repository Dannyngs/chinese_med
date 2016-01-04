<?php
require_once 'init.php';



//$rs = $db->query("SELECT * FROM case where case =1");
//    $illnesses = $rs->fetchAll();
//
//foreach($illnesses as $ill)          
//echo  $ill[$current_lang.'_title'];

?>
<?php require_once 'header.php' ?>
<style type="text/css">
    .title{ background: url('_/img/contact-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $lang['contact']?></h2>
 
</section>

    <!-- Map -->
    <section class="map box">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.000910511588!2d114.18256504943027!3d22.277955349265834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404005145455113%3A0xe7842d2010b14e78!2z6aaZ5riv5p2x6KeS5biM5oWO6YGTOOiZn-ijleaZr-WVhualreS4reW_gw!5e0!3m2!1szh-TW!2ssg!4v1451884348563" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>



    <div class="content_box">


        <!-- Sidebar layout -->
        <div class="sidebar_layout">


            <!-- Sidebar -->
            <div class="left_sidebar sidebar clearfix">

                <!-- Offices -->
                <section>
                    <h3><?php echo $lang['address']?>：</h3>
                    <p class="icon">
                        <i class="icon-map-marker"></i>
                      <?php echo $system[$current_lang.'_address']?>
                    </p>
                   
                </section>

                <!-- Contact information -->
                <section>
                    <h3><?php echo $lang['contact_info']?>：</h3>
                    <p class="icon">
                        <i class="icon-envelope-alt"></i>
                       <?php echo $system['email']?>
                    </p>
                    <p class="icon">
                        <i class="icon-phone"></i>
                            <?php echo $system['phone']?>
                    </p>
                    
                    <p class="icon">
                       <i class="icon-phone"></i>
                        <?php echo $system['phone2']?>
                    </p>
                </section>

                <!-- Social media -->
               

                <!-- Opening hours -->
                <section>
                    <h3><?php echo $lang['worktime']?>：</h3>
                    <p class="icon">
                        <i class="icon-time"></i>
                        <?php echo $system['work_time']?>
                        
                    </p>
                </section>
                
                 <section>
                   
                    <p class="icon">
                        <i class="icon-large icon-facebook-sign" style="margin-right:5px;color:blue"></i> 
                        <a href="#">黎凱明中醫診所</a>
                    </p>
                   
                </section>

            </div>


            <!-- Main column -->
            <div class="main_column two_thirds">

                <!-- Text and contact form -->
                <section>

                   <h3><?php echo $lang['book']?> - 黎凱明中醫</h3>

                    <hr />

                    <form action="#" id="contact_form" />
                    <div class="one_third top first">
                        <label for="name"><?php echo $lang['name']?>:</label>
                        <input name="name" id="name" type="text" />
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="one_third top first">
                        <label for="email"><?php echo $lang['tel']?>:</label>
                        <input name="tel" id="tel" type="text" />
                    </div>
                    <div class="clearfix"></div>
                    
                     <div class="one_third top first">
                        <label for="email"><?php echo $lang['email']?>:</label>
                        <input name="email" id="email" type="email" />
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <label for="message"><?php echo $lang['msg']?>:</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="<?php echo $lang['submit']?>" class="theme_button medium" />
                        <p class="status" />
                    </div>
                    </form>

                </section>

            </div>


        </div>


    </div>
    <div class="clearfix"></div>


<?php require_once 'footer.php' ?>
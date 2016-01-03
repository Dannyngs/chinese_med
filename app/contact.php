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

  <h2>聯絡我們</h2>
 
</section>

    <!-- Map -->
    <section class="map box">

        <div class="map google_map" data-latitude="40.75" data-longitude="-74.0" data-zoom="15"></div>

    </section>



    <div class="content_box">


        <!-- Sidebar layout -->
        <div class="sidebar_layout">


            <!-- Sidebar -->
            <div class="left_sidebar sidebar clearfix">

                <!-- Offices -->
                <section>
                    <h3>診所地址：</h3>
                    <p class="icon">
                        <i class="icon-map-marker"></i>
                       香港銅鑼灣希慎道8號裕景商業中心2樓
                    </p>
                   
                </section>

                <!-- Contact information -->
                <section>
                    <h3>聯絡方式：</h3>
                    <p class="icon">
                        <i class="icon-envelope-alt"></i>
                        drlaihoiming@gmail.com
                    </p>
                    <p class="icon">
                        <i class="icon-phone"></i>
                        (852) 2889 6080 
                    </p>
                    
                    <p class="icon">
                       <i class="icon-phone"></i>
                        (852) 9020 8382
                    </p>
                </section>

                <!-- Social media -->
               

                <!-- Opening hours -->
                <section>
                    <h3>工作時間：</h3>
                    <p class="icon">
                        <i class="icon-time"></i>
                        Monday - Friday <span class="opening">8:00 - 18:00</span><br />
                        Saturday <span class="opening">8:00 - 14:00</span><br />
                        Sunday <span class="opening">10:00 - 14:00</span><br />
                    </p>
                </section>
                
                 <section>
                    <h3>Social media</h3>
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

                   <h3>立即預約 黎凱明註册中醫</h3>
 <p>內科 • 婦科 • 兒科 • 皮膚 • 運動創傷</p>

                    <hr />

                    <form action="#" id="contact_form" />
                    <div class="one_third top first">
                        <label for="name">姓名:</label>
                        <input name="name" id="name" type="text" />
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="one_third top first">
                        <label for="email">電話:</label>
                        <input name="tel" id="tel" type="text" />
                    </div>
                    <div class="clearfix"></div>
                    
                     <div class="one_third top first">
                        <label for="email">Email:</label>
                        <input name="email" id="email" type="email" />
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="發送" class="theme_button medium" />
                        <p class="status" />
                    </div>
                    </form>

                </section>

            </div>


        </div>


    </div>
    <div class="clearfix"></div>


<?php require_once 'footer.php' ?>
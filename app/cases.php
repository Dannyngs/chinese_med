<?php
require_once 'init.php';



$rs = $db->query("select * from lhm_chinese_med.case");
    $cases = $rs->fetchAll();



?>
<?php require_once 'header.php' ?>
<style type="text/css">
    .title{ background: url('_/img/ill-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $lang['case']?></h2>
 
</section>


<div class="content_box">


  <!-- Portfolio items -->
  <section class="row">
    <ul class="portfolio filterable clearfix">
     
        
        
       <?php  foreach($cases as $case)          
{?>
      <li class="visual_identity illustrations one_third">
        <a href="case.php?id=<?php echo  $case['id'];?>" class="thumb">
          <img src="<?php echo  $case['image'];?>" alt="" />
          <div class="fade"><span><i class="icon-plus-sign"></i></span></div>
        </a>
        <h3><a href="case.php?id=<?php echo  $case['id'];?>"><?php echo  $case[$current_lang.'_title'];?></a></h3>
        <p><?php echo  $case[$current_lang.'_desc'];?></p>
      </li>
        <?php
}
 ?>
      
        
        
        
     
        
      
        

    </ul>
  
  </section>


</div> 
<?php require_once 'footer.php' ?>
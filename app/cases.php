<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM case where id =1");
    $illnesses = $rs->fetchAll();

foreach($illnesses as $ill)          
echo  $ill[$current_lang.'_title'];

?>
<?php require_once 'header.php' ?>

<?php require_once 'footer.php' ?>
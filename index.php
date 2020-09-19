<?php
   ob_start();
   session_start();
   include_once("database.php");
//feather products-->
   $sql = "SELECT * FROM products WHERE featured = 0";
   $Results = $db->getRows($sql,array());


   $Title="Top Products:";
   include("QR_view.php");



?>

 

<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>


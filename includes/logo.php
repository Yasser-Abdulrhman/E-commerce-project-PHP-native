<?php
   ob_start();

   include_once("database.php");
//feather products-->
   $sql = "SELECT * FROM brand ";
   $Results = $db->getRows($sql,array());
   //include("QR_view.php");




?>




<div class="row">
<div class="col-md-2" style="text-align:center">
    <a href="index.php" style="text-decoration:none;" >


     <div class="webname animated infinite rotateIn" style="color:black"> A R <span style=" color:orange;font-size:30px"> A B I </span> TY </div>
         <i class="fa fa-car fa-4x animated infinite bounceInLeft" aria-hidden="true" style="color:orange;"></i>

     </a>
</div>




<div class="col-md-10" >



</div>



</div>

<?php
   ob_start();
   session_start();
   include_once("database.php");

//feather products-->

     // $Title="Top Products:";

?>




<?php 
	if(isset($_POST['delete']))
    {
        $id=(int)$_POST['pr_id'];
     $sql="DELETE FROM products WHERE pid=$id";
         $result=$db->deleteRow( $sql,array());
        if($result){
            echo "<h1> Product Deleted</h1> <br<";
          
        }
       
        
    }
  echo '<a href="admin.php">Back</a>';



?>





<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>
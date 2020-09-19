<?php 
session_start();
if( isset($_GET['id']) && isset($_SESSION[$_GET['id']]) )
{
    
    unset($_SESSION[$_GET['id']]);
     header("location:show_cart.php");
    
    //$id=$_GET['id'];
   //$_SESSION['cart']= $_SESSION['cart']-1;
    
 //unset ($_SESSION['cart'][28]);
    
   //foreach($_SESSION['cart'] as $result) {
    //echo $result['item_id'], '<br>';

   
   
    
}
else 
    echo "error";



?>
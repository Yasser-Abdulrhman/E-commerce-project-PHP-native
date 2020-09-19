<?php

session_start();

 if(isset($_SESSION['id'])){
     
     
$_SESSION['cart'][]=[
			'user_id' =>$_SESSION['id'],
			'item_id' =>$_GET['item_id'],
			'price'=>$_GET['price'],
			];
 var_dump($_GET['item_id']);
header("location:car.php?id=".$_GET['item_id']);}
else {
  
    header("location:car.php?id=".$_GET['item_id']);
}
?>
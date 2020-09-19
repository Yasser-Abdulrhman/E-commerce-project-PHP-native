<?php
   ob_start();
   session_start();
   include_once("database.php");

//feather products-->

     // $Title="Top Products:";

?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:#FFF;text-align:center;">Login</div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->




                                         <form method="POST" action="login.php">


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
  </div>



  <button type="submit" name="login" class=" btn btn-warning " style="width:25%;margin-left:35%;">Login</button>


</form>
                          <?php

                    if(isset($_POST['login'])){

                    $email=$_POST['email'];
                    $password=$_POST['password'];


                 $sql = "SELECT * FROM user WHERE email = '$email' AND password='$password'";
                         $Count = $db->getCount($sql);
                         if($Count >0)
                         {
                             
                               $Result = $db->getRows($sql,array());
                               foreach($Result as $account )
                               {
                                 $_SESSION['username']=$account['username'];
                                  $_SESSION['email']=$email;
		                   $_SESSION['lpassword']=$password;
                                   $_SESSION['id']=$account['id'];
                                   //$_SESSION['cart']=0;

                               }
                             
                             if($account['admin']==1)
                                 header('Location:admin.php');
                             else
                               header('Location:index.php');


                         }
                         else{

                              echo '<div class="alert alert-danger" role="alert">This Email Is Not Exist</div>';
                         }






		           // header( "refresh:2;url=".$_SERVER['HTTP_REFERER']);



             }


                 ?>


                  </div>
                </div>
            </div>
        </div>

          <script src="includes/js/webcomponents.min.js"></script>
     <script src="includes/js/qr.js"></script>
     <script src="includes/js/qr-code.js"></script>
               <script src="includes/js/jquery.fancybox.min.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.js"></script>







<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>


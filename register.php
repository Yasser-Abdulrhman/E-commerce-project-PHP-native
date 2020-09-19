<?php
   ob_start();
   session_start();
   include_once("database.php");



?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:#FFF;text-align:center;">Create New Account</div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->

                       <form method="POST" action="register.php">
     <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Governorate</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="gov" placeholder="Governorate" required>
  </div>
                           
   <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="city" class="form-control" id="exampleInputEmail1" name="city" placeholder="City" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Street</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="street" placeholder="street" required>
  </div>                         
                           
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Re-Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword" placeholder="Re-Password" required>
  </div>
                           
 <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Phone" required>
  </div>                           

  <button type="submit" name="register" class="sign_up_btn btn btn-warning " style="width:25%;margin-left:35%;">Sign Up</button>


</form>


                     <?php

                    if(isset($_POST['register'])){
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                     $gov=$_POST['gov']; 
                    $city=$_POST['city'];
                      $street=$_POST['street'];
                  $phone=$_POST['phone'];        
                    $password=$_POST['password'];
                    $cpassword=$_POST['cpassword'];
                        

                         $sql = "SELECT email FROM user WHERE email = '$email'";
                         $Count = $db->getCount($sql,array());
                         if($Count>0)
                         {
                           echo "<p style='color:black; text-align:center; font-weight:bold; '> This Email Is Already Exist </p>";
                           header( "refresh:2;url=".$_SERVER['HTTP_REFERER']);

                         }

                    if($password==$cpassword)
                    {
                             $sql="INSERT INTO user (username , password , email, gov, city, street, phone) VALUES ('$username','$password','$email','$gov','$city','$street','$phone')";
                             $result=$db->insertRow($sql,array());
                             if($result){
                                   $_SESSION['username']=$username;
                                   $_SESSION['email']=$email;
		                           $_SESSION['lpassword']=$password;
                                 $_SESSION['gov']=$gov;
                                 $_SESSION['city']=$city;
                                 $_SESSION['street']=$street;
                                 $_SESSION['phone']=$phone;
                                 
                                   //$_SESSION['cart']=0;
                                  header( "Location: index.php");


                             }



                    }

                    else {

                          echo '<div class="alert alert-danger" role="alert">The Password Is Not Equal</div>';

                    }




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


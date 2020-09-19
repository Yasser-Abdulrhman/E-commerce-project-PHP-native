<?php
   ob_start();
   session_start();
   include_once("database.php");
   
//feather products-->
         if(isset( $_GET['user_id'] ));
           {
                $id=$_GET['user_id'];
            //get name of category

           $sql = "SELECT * FROM user WHERE id = $id";
           $Result = $db->getRows($sql,array());
             foreach($Result as $product){
              $name=$product['username'];
                           $email = $product['email'];
                           //$name=  $product['name'];
                           $gov= $product['gov'];
                           $city= $product['city'];
                           $street=$product['street'];
                           $phone= $product['phone'];
                 
             } }
     // $Title="Top Products:";

?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
              
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:#FFF;"><i class="fa fa-list-alt">
                    </i> <?php echo $name;?> Details</div>
                    <div class="row" id="products">
                        
                        
                    
              
                        <h2></h2>
                    
           <div class="list-group" style="width:50%;float:left">
  
  <li  class="list-group-item">  <h1 style="color:orange"><?php echo $name  ?></h1></li>
  <li class="list-group-item">  <h2> <i class="fa fa-truck" style="position:absolute; left:1%; color:orange"></i> <br><?php echo $gov  ?></h2>
               <br> <h2><?php echo $city  ?></h2>
      <br>
      <h3><?php echo $street  ?></h3>
               </li>
 <li  class="list-group-item">   <h1> <i class="fa fa-phone" style="color:orange"></i> 0<?php echo $phone  ?></h1></li>
  <li class="list-group-item">
               
                    <form method="get" action="visa.php">
           
            <input type="hidden" name="item_id"  value="<?php echo $pid; ?>">
           
          
                             
                    </form>
               </li>
</div>
                        

                        
		
                    <!-- Using the Web Component -->
       
         
 <a href="confirm.php"> <button type="submit" name="buy" class="btn btn-warning" style="width:30%;font-size:20px;color:black;margin-top:20%;margin-left:10%">Cash On Delivary</button></a>
                        
                        
                      
                    

         
                        
      
               
          
               
                

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


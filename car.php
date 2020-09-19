<?php
   ob_start();
   session_start();
   include_once("database.php");
   
//feather products-->
         if(isset( $_GET['id'] ));
           {
                $id=$_GET['id'];
            //get name of category

           $sql = "SELECT * FROM products WHERE pid = $id";
           $Result = $db->getRows($sql,array());
             foreach($Result as $product){
              $Title=$product['name'];
             } }
     // $Title="Top Products:";

?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
               <?php 
                   if(isset($_SESSION['id'])){
                  
                    
                           
                       }
              else{ 
                   echo '<div class="alert alert-danger" role="alert">You need to <a href="login.php" >Login</a> if you have account Or<a href="register.php"> register</a> if you do not have account</div>';}
               ?>
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:#FFF;"><i class="fa fa-list-alt">
                    </i> <?php echo $Title;?></div>
                    <div class="row" id="products">
                        
                        
                    
                
                    
                        
                        
		
                    <!-- Using the Web Component -->
                    <?php
                          function guidv4(){
                          if (function_exists('com_create_guid') === true)
                          	return trim(com_create_guid(), '{}');
			  $data = openssl_random_pseudo_bytes(16);
    			  $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    			  $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
    			  return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
			}
        		$value=guidv4();
			$modulesize=10;
			$margin=1;
		  ?>



                        <?php
                        if(isset($_GET['id'])){
                       $id=$_GET['id'];
          $sql = "SELECT * FROM products WHERE pid = $id";
          $Result = $db->getRows($sql,array());

    //include("QR_view.php");
                   foreach($Result as $product){
                           $image = $product['image'];
                           $name=  $product['name'];
                           $model= $product['model'];
                           $price= $product['price'];
                           $pid=$product['pid'];
                       $des=$product['dece'];
                       $pic1=$product['image'];
                       $pic2=$product['image'];
                       $pic3=$product['image'];
                       $pic4=$product['image'];
                       $pic5=$product['image'];
                       $pic6=$product['image'];
                        echo  "

                    <div class='boximage'  style=' width: 100%;height: 400px; position: relative;'>
        <a href=' $pic1' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src=' $pic1' alt='$pic1' style='  width: 30%;float: left;margin:5px;height: 50%;'/>
          </a>

          <a href=' $pic2' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src='$pic2' alt='$pic2' style='  width: 30%;float: left;margin:10px;height: 50%;'/>
          </a>


         <a href='$pic3' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src='$pic3' alt='$pic3' style='  width: 30%;float:left;margin:10px;height:50%;'/>
          </a>

        <a href='$pic4' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src='$pic4' alt='$pic4' style='  width: 30%;float: left; margin:10px;height: 50%;'/>
          </a>

         <a href='$pic5' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src='$pic5' alt='$pic5' style='  width: 30%;float: left; margin:10px;height: 50%;'/>
          </a>

          <a href='$pic6' data-fancybox='images' data-caption='My caption'>
	        <img class='picture' src='$pic6' alt='$pic6' style='  width: 30%;float: left; margin:10px;height: 50%;'/>
          </a>

    </div>
               ";




                   }

                         }

                        ?>

          <div class="col-md-12">
                  
                     <div class="showcar" style="width:100%;margin-top:10%;text-align:center">
                         <h1>
                        <?php echo $name  ?> 
                         </h1>
                         <h1>
                         <span style="color:orange"><?php echo $model ?></span>
                         </h1>
                         
                         <h2>
                         <?php echo $price?><span style="font-family:fantasy;color:green">$</span>
                         </h2>
                           
                         
                       
                           </div>
                         
   
                         <form method="get" action="add_cart.php">
           
            <input type="hidden" name="item_id"  value="<?php echo $pid; ?>">
            <input type="hidden" name="price"  value="<?php echo $price; ?>">
            <button type="submit" name="buy" class="btn btn-warning" style="width:50%;font-size:30px;margin-left:25%;color:black;">Add To Cart</button>
                             
                    </form>
            
                            
                       <?php
          
              
              
              
               if(isset($_POST['buy'])){
                           if(isset($_SESSION['id']))
                           {
                               
                               
                           }
                            
                               
                             
                           
                       }
                       ?>
                        </div>
                        
      
               
          
               
                

                   </div>
          <div class="panel panel-warning" >
          <div class="panel-heading" style="background-color:#f7dd73;color:black"> More Details About <?php echo $name  ?>  </div>
          <div class="panel-body">
            <?php echo  $des ?>
          </div>
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


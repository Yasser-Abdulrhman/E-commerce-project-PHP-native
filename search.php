<?php
   ob_start();
   session_start();
   include_once("database.php");

//feather products-->

     // $Title="Top Products:";

?>
           <div class="col-md-9" >



   

    


               <div class="panel panel-default" id="boutique" style="position:relative">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:white; font-family: 'Lalezar';font-size:25px"><i class="fa fa-list-alt">
                    </i>The Result Of Search </div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->
                  



                        <?php
                        
                        
        if(isset($_POST['search'])){
              $find=$_POST['searchname'];
   
        
            }
       
            // $find=$_SESSION['word'];
          $sql="SELECT * FROM products WHERE name LIKE '%$find%' OR model LIKE '%$find%' OR color LIKE '%$find%'  ";
          $result=$db->getRows($sql,array());
          $count=$db->getcount($sql,array());
          if($count>0)
          {
              
                foreach($result as $product){
                           $image = $product['image'];
                           $name=  $product['name'];
                           $model= $product['model'];
                           $price= $product['price'];
                           $pid=   $product['pid'];
                        echo  "
			 <div class='box'>
			      <a href='car.php?id= $pid'> <img class='image'  src=' $image'>
                               <div class='name'>  $name <span> $model</span> </a>
	                        <div class='price'> $price$ </div>
	                        <a href='car.php?id= $pid'><button type='button' class='btn btn-warning' class='detail'>View Details </button> </a>
	                       </div>

			</div>  ";
                    
                  

                        }
          }    
                        else 
                            echo '<div class="alert alert-danger" role="alert">There Is No Results      </div>';
                             
                        
                       
            

                        ?>

                    



		      	<br><br>

                  </div>
                </div>
            </div>
        </div>
       <script src="includes/js/webcomponents.min.js"></script>
     <script src="includes/js/qr.js"></script>
     <script src="includes/js/qr-code.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.js"></script> 









     







<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>

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
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:#FFF;text-align:center;">Your Products In Shopping Cart</div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->
                  
   <?php  if(isset($_SESSION['cart'])):?>
               
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
    
      <th scope="col">Car Price</th>
   
    </tr>
  </thead>
  <tbody>
          <?php 
      if(isset($_SESSION['cart']))
      {
           $_SESSION['total_price']=0;  
          $array_cart=$_SESSION['cart'];
        
          
          foreach($array_cart as $cart_id=>$item)
          {
              
                
              $id=$item['item_id'];
              $user_id=$item['user_id'];            
              $sql="SELECT * FROM products WHERE pid= $id ";
              $result = $db->getRows($sql,array());
              foreach($result as $product)
              {
                  
                           $image =$product['image'];
                           $name=  $product['name'];
                           $model= $product['model'];
                           $price= $product['price'];
                           $pid=$product['pid'];
                            $_SESSION['total_price']+=$price;
                
                  echo "                  
                              <tr>
              <th scope='row'>
        <a href='car.php?id=$pid'>  <img src= ' $image ' class='img-thumbnail'  style='width:80px;height:80px;'></a>

        </th>
              <td ><div style='width:200px;'> $name <br><span style='color:orange'> Model $model</span  </div>  </td>
             
              <td>$price $ </td>
               <td><a href='delete.php?id='> Delete</a> </td>
             
            </tr> 
       
                    
                  ";
              }
          
          }
          
     
         
      }
                        
        echo "          
                </tbody>
</table>   
";
      
                        
                        ?>
      
   
   
   
      

 
      <?php 
      
        if(isset($_SESSION['total_price']))
       {
                         $t=$_SESSION['total_price'];
          echo" 
         
            <h1>Total Price : <span style ='color:orange;position:absolute;left:30%;'> $t <span style ='color:black;'> $ </span></span></h1>
     
                
                " ;
              
       
             
     
    }
      
          
                        ?>
  

                    </div>
                </div>
                   
                                   
                        <form method="get" action="address.php">
           
       <input type="hidden" name="user_id"  value="<?php echo $user_id; ?>">
            <button type="submit" name="continue" class="btn btn-warning" style="width:40%;font-size:30px;position:absolute;right:10%;color:black;">Continue </button>
                             
                    </form>
              
                   </table>           
             
               <?php else : ?>
          
                  </div>
                </div>
                
              
                <?php endif;     ?>
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


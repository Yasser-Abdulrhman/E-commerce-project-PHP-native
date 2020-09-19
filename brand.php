<?php
   ob_start();
   session_start();
   include_once("database.php");
//feather products-->
                 $id=$_GET['id'];
       

            //get name of brand

          $sql = "SELECT Brand FROM brand WHERE id = $id";
           $Result = $db->getRows($sql,array());
             foreach($Result as $product){
              $Title=$product['Brand'];
             }


?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:white;font-family: 'Lalezar';font-size:25px"><i class="fa fa-list-alt">
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



    //include("QR_view.php");
          $id=$_GET['id'];
          $sql = "SELECT * FROM products WHERE Bid = $id";
          $Result = $db->getRows($sql,array());
                          foreach($Result as $product){
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
	                        <a href='car.php?id= $pid'><button type='button' class='btn btn-warning' >View Details </button> </a>
	                       </div>

			</div>  ";

                          }


                        ?>





			<br><br>

                  </div>
                </div>
            </div>
        </div>



           <script src="includes/js/webcomponents.min.js"></script>
     <script src="includes/js/qr.js"></script>
     <script src="includes/js/qr-code.js"></script>
       <script src="includes/js/jquery.fancybox.min.js"></script>




<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>


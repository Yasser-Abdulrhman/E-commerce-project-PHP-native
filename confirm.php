<?php
   ob_start();
   session_start();
   include_once("database.php");
//feather products-->
        


?>

       <div class="col-md-8">
          </div>
           <div class="col-md-9">
               <div class="panel panel-default" id="boutique">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:white;font-family: 'Lalezar';font-size:25px"><i class="fa fa-list-alt">
                    </i> </div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->
      
                <h1>Confirmed</h1>
<?php 
                        
                        unset($_SESSION['cart']);
unset($_SESSION['total_price']);
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


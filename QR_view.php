
           <div class="col-md-9" >



    <div class="row carousel-holder" style="width:100%;height:400px;position:relative;">

                            <div class="col-md-12" style="height:80px; top:13px;position:relative">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner" >
                                        <div class="item active" >
                                            <img class="slide-image" src="13.jpg" alt="" style="width:100%;height:400px;">

                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="14.jpg" alt="" style="width:100%;height:400px;">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="32.jpg" alt="" style="width:100%;height:400px;">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="35.jpg" alt="" style="width:100%;height:400px;">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                     </div>

    
   

               <div class="panel panel-default" id="boutique" style="position:relative">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:white;font-size:25px"><i class="">
                    </i> <?php echo $Title;?></div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->
                  



                        <?php

                      foreach($Results as $product){
                           $image = $product['image'];
                           $name=  $product['name'];
                           $model= $product['model'];
                           $price= $product['price'];
                           $pid=   $product['pid'];
                          $_SESSION['prid']=$pid;
                        echo  "
			 <div class='box'>
			      <a href='car.php?id=$pid'> <img class='image'  src=' $image'>
                               <div class='name'>  $name <span> $model</span> </a>
	                        <div class='price'> $price$ </div>
	                        <a href='car.php?id= $pid'><button type='button' class='btn btn-warning' class='detail' style='margin-top:2%;'>View Details </button> </a>
	                       </div>

			</div>  ";

                        }

                        ?>

                    



		      

                  </div>
                </div>
         </div>
        </div>
       <script src="includes/js/webcomponents.min.js"></script>
     <script src="includes/js/qr.js"></script>
     <script src="includes/js/qr-code.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.js"></script> 
  


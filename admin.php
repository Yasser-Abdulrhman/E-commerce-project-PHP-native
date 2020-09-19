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
                    </i>The Page Of Admin </div>
                    <div class="row" id="products">
                    <!-- Using the Web Component -->
                  

   <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal" style=" display: block;margin-left:30%;">
  Insert Product
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-left:10%">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert Product</h4>
      </div>
      <div class="modal-body">
       
          
          <form method="POST" action="insert.php" enctype="multipart/form-data">
     <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="name" placeholder="Car Name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input type="model" class="form-control" id="exampleInputEmail1" name="model" placeholder="model" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="price" placeholder="Price" required>
  </div>
              <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Quantity" required>
  </div>
                           
   <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="des" class="form-control" id="exampleInputEmail1" name="desc" placeholder="Description" required>
  </div>
                         
             	<div class="form-group">
												
                                                <select  class="form-control " name="Car_Brand">
                                                    
                                                    <option>Select Brand  </option>  
                                                    
                                            <?php   
                                                  $get_brand ="SELECT * FROM  brand";
                                                    $Result = $db->getRows($get_brand,array());
                                                  foreach($Result as $Row){
                                                     $brand_name=$Row['Brand'];
                                                      $brand_id=$Row['id'];
                                                       echo "<option> $brand_id <br>$brand_name </option>" ;
                                                      
                                                  }
                                                    

				                         ?>
                                                    
                                                    
                                                </select>
											</div>  
              
              
              
              
              	<div class="form-group">
												
                                                <select  class="form-control " name="Car_Cat">
                                                    
                                                    <option>Select Category  </option>  
                                                    
                                            <?php   
                                                  $get_cats ="SELECT * FROM  Categories";
                                                    $Result = $db->getRows($get_cats,array());
                                                  foreach($Result as $Row){
                                                     $brandn=$Row['categorie'];
                                                       $brandid=$Row['id'];
                                                       echo "<option> $brandid <br>$brandn </option>";
                                                      
                                                  }
                                                    

				                         ?>
                                                    
                                                    
                                                </select>
											</div>               
 

   
              
              
         <div class="form-group">
                   <input type="file" class="form-control " name="image" placeholder="Book Picture" required>
          </div>
              
              <div class="form-group">
    <label for="exampleInputEmail1">Featured</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="feature" placeholder="feature" required>
  </div> 
              
                   <div class="form-group">
    <label for="exampleInputEmail1">color</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="color" placeholder="color" required>
  </div> 
               <div class="form-group">
    <label for="exampleInputEmail1">Image1</label>
    	<input type="file" class="form-control " name="image1" placeholder="image1" required>
  </div>
                <div class="form-group">
    <label for="exampleInputEmail1">Image2</label>
    	<input type="file" class="form-control " name="image2" placeholder="image2" required>
  </div>  
             <div class="form-group">
    <label for="exampleInputEmail1">Image3</label>
    	<input type="file" class="form-control " name="image3" placeholder="image3" required>
  </div>
                       <div class="form-group">
    <label for="exampleInputEmail1">Image4</label>
    	<input type="file" class="form-control " name="image4" placeholder="image4" required>
  </div> 
                       <div class="form-group">
    <label for="exampleInputEmail1">Image5</label>
    	<input type="file" class="form-control " name="image5" placeholder="image5" required>
  </div> 
              
     
                           
                          

  <button type="submit" name="add" class="sign_up_btn btn btn-warning " style="width:25%;margin-left:35%;">Add</button>
  


</form>
          



          
          
          
      </div>
      
    </div>
  </div>
</div>

                        
                        
               <!-- Button trigger modal -->
                        
                        
<!-- Delete Product -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm" style=" display: block;margin-left:30%;margin-top:5%;width:17%;">Delete Product</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="margin-top:10%;">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <form action="delete_product.php" method="post"> 
        
        <div class="form-group">
      
												
                             <select  class="form-control " name="pr_id">
                                            
                                 <option>Select id  </option>  
                               
                                    <?php  
                                 $get_id ="SELECT * FROM  products";
                                       $Result = $db->getRows($get_id,array());
                                      foreach($Result as $Row){                                            
                                        $proid=$Row['pid'];
                                          $pro_name=$Row['name'];
                                     echo "<option>$proid <br>$pro_name </option>";
                                          
                                      }
                                                  

	                         ?>
                                                    
                                                    
                                                </select>
            
											</div>
              <button type="submit" name="delete" class="sign_up_btn btn btn-warning " style="width:25%;margin-left:35%;">Delete</button>
            
            </form>
        
        
        
      
    </div>
  </div>
</div>
                    

  
                        
                   
                       
                        
                        

		      	<br><br>

                  </div>
                </div>
            </div>
        </div>
       <script src="includes/js/webcomponents.min.js"></script>
     <script src="includes/js/qr.js"></script>
     <script src="includes/js/qr-code.js"></script>
       <script src="https://code.jquery.com/jquery-2.2.4.js"></script> 
	
			 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
             <script>tinymce.init({ selector:'textarea' });
             </script>









     







<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>

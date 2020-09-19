<?php
   ob_start();
   session_start();
   include_once("database.php");

//feather products-->

     // $Title="Top Products:";

?>



                      <?php
	if(isset($_POST['add']))
			{
				
				$name=$_POST['name'];
                $model=$_POST['model'];
                 $price=$_POST['price'];
               $quantity=$_POST['quantity'];
        
                $desc=$_POST['desc'];
         $brand=$_POST['Car_Brand'];
    
        
          $cat=$_POST['Car_Cat'];
       
        
                $carimage=$_FILES['image']['name'];
                $carimage_tmp=$_FILES['image']['tmp_name'];
                move_uploaded_file( $carimage_tmp,"image/$carimage");
        
        $feature=$_POST['feature'];
         $color=$_POST['color'];
        
				 $carimage1=$_FILES['image1']['name'];
                $carimage1_tmp=$_FILES['image1']['tmp_name'];
                move_uploaded_file( $carimage1_tmp,"image/$carimage1");
        
         $carimage2=$_FILES['image2']['name'];
                $carimage2_tmp=$_FILES['image2']['tmp_name'];
                move_uploaded_file( $carimage2_tmp,"image/$carimage2");
        
         $carimage3=$_FILES['image3']['name'];
                $carimage3_tmp=$_FILES['image3']['tmp_name'];
                move_uploaded_file( $carimage3_tmp,"image/$carimage3");
        
         $carimage4=$_FILES['image4']['name'];
                $carimage4_tmp=$_FILES['image4']['tmp_name'];
                move_uploaded_file( $carimage4_tmp,"image/$carimage4");
        
         $carimage5=$_FILES['image5']['name'];
                $carimage5_tmp=$_FILES['image5']['tmp_name'];
                move_uploaded_file( $carimage5_tmp,"image/$carimage5");
       $sql="SELECT name FROM products WHERE name=$name ";
        $Count = $db->getCount($sql);
       if($Count>0)
             {
             
             echo "This product is already exist";
         }
        else 
       {
       
        $query = "INSERT INTO products (name,model,Bid,Cid,price,qty,dece,image,featured,color,pic1,pic2,pic3,pic4,pic5) VALUES ('$name','$model','$brand','$cat','$price','$quantity',' $desc',' $carimage','$feature','$color',' $carimage1',' $carimage2',' $carimage3',' $carimage4',' $carimage5')";
               $result=$db->insertRow( $query,array());
        
          if($result){
                                   $_SESSION['name']=$name;
                                   $_SESSION['model']=$model;
		                           $_SESSION['price']=$price;
                                  $_SESSION['quantity']=$quantity;
                                 $_SESSION[' desc']=$desc;
                                 $_SESSION['Car_Brand']=$brand;
                                 $_SESSION['Car_Cat']=$cat;
                                 $_SESSION['image']= $carimage;
                                $_SESSION['feature']=$feature;
                                  $_SESSION['color']=$color;
                                 $_SESSION['image1']= $carimage1;
                                    $_SESSION['image2']= $carimage2;
                                   $_SESSION['image3']= $carimage3;
                                     $_SESSION['image4']= $carimage4;
                                         $_SESSION['image5']= $carimage5;
          
               header("location:admin.php");
                              
                              
          echo "insert  done";

                             }
            }
      
       
       
      
        
        
    }
else 
    echo "Error";



?>





<?php

  $content=ob_get_contents();
  ob_end_clean();
  include("master.php");
?>
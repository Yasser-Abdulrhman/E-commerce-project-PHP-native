<?php
 include_once("database.php");   
  $sql = "SELECT * FROM categories where parent=0";
  $pquery = $db->getRows($sql,array());
//  $result = query($sql);
?>
<nav class="navbar navbar-inverse" id="menu" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php //while($parent = mysqli_fetch_assoc($pquery)) : 
        ?>
         <?php foreach ($pquery as $parent):?>  
				<?php
					$parent_id = $parent['id'];
					$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                                         $cquery = $db->getRows($sql2,array());
 				?>
        <li class="dropdown">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false" style="font-size:20px; "><?php echo $parent['categorie']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" id="drop-menu">
          	<?php //while($child = mysqli_fetch_assoc($cquery)) :
            ?>
             <?php foreach ($cquery  as $child):?> 
	     <li><a style="" href="category.php?id=<?php echo $child['id'];?>"><?php echo $child['categorie'];?></a></li>
            <li role="separator" class="divider"></li> 
						<?php endforeach; ?>
          </ul>
        </li>
        <?php endforeach; ?>    
         <!-- <li><a href="products.php">products</a></li> -->
        
      </ul>
      <form class="navbar-form navbar-left " method="post" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" name="searchname" placeholder="Search By color,Model And Name" style="width:300px">
        </div>
        <button type="submit" name="search" class="btn btn-default" ><i class="fa fa-search"></i></button>
      </form>





        <ul class="nav navbar-nav navbar-right">

         <li class="dropdown">
                     <?php if(isset($_SESSION['email']) && $_SESSION['lpassword'] == true):?>
                         <a href="#" id="category" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" style="font-size:19px;"> Hello <?php echo $_SESSION['username'];?><span class="caret"></span></a>
                        <?php else:?>

                      <a href="#" id="category" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" style="font-size:19px;"> Account<span class="caret"></span></a>
                      <?php endif;?> 
                <ul class="dropdown-menu" >
                    <?php if(isset($_SESSION['email']) && $_SESSION['lpassword'] == true):?>
                        <li><a style="color:black;"  href="logout.php"><i class="fa fa-user" ></i> <?php echo $_SESSION['username'];?></li>
                        <li><a style="color:black;" href="logout.php"><i class="fa fa-sign-out"></i> LogOut</a></li>
                    <?php else:?>
                        <li><a style="color:black;" href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a style="color:black;" href="register.php"><i class="fa fa-user-plus"></i> Registration</a></li>
                    <?php endif;?>
                </ul>
            </li>

        <li> <a href="show_cart.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color:orange;"> <span class="badge" style="margin-left:-40%;margin-top:-40%;color:orange;font-size:20px;"><?php
            if(isset($_SESSION['cart']))
            echo count($_SESSION['cart']);
            else 
                echo 0;
            
            ?>
            </span> </i></a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Left Side Brand--> 
<?php 
      $sql = "SELECT * FROM brand ";   
      $brand = $db->getRows($sql,array());
?>        
   <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default " id="ville">
                    <div class="panel-heading"  style="background:rgba(0,0,0,0.8);color:white;"><i class="fa fa-map-marker" >
                         </i>Brands</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($brand as $row):  
                            $sql="select * from products where Bid=?";
                            $count=$db->getCount($sql,array($row['id']));
                            ?>
                            <li class="list-group-item">
                                <span class="badge"style="color:orange; font-family: cursive;"><?php echo $count ;?> </span>
                                <a href="brand.php?id=<?php echo $row['id'];?>"> <div class="bimg" style="width:25px;height:25px;float:left;margin-right:8px"><img style="width:25px;height:25px;" src="<?php echo $row['image']  ?>"> </div> <?php echo $row['Brand'];?></a>
                            </li>
                            <?php endforeach; ?>
                        
                        </ul>
                    </div>
                </div>
            </div>

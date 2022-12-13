<?php 
session_start();
        include 'Admin/connect.php';
        include 'functions.php'; 
        $getquery="select * from product";
        $perpage=8;
        $go_query=mysqli_query($connection,$getquery);
        $num=mysqli_num_rows($go_query);
        $num=ceil($num/$perpage); 
        $page=''; //for panigation!
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../assets/Capture-removebg-preview.png" sizes="32x32" type="image/png">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css2?family=Acme&family=Bree+Serif&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../login/auth.css'>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./display.css">
    <script src="../login/auth.js"></script>
    <script src="../login/login.js"></script>
    <title>Display</title>
</head>
<body>
    <?php  include('./login/auth.php') ?>
<?php include('header.php') ?> 
    <div class="display-part">
        
        <h2 class="display-header">Horus <span style="color: #1f4287;">Gallery</span></h2>
        <div class="product-col">

             <?php
            
        // if(isset($_GET['page'])){
        $page=1;
        $show_product=($page*$perpage)-$perpage;    
        // }
        // if(!isset($_GET['page'])){
        // $show_product=0;
        // }
        // if(isset($_GET['cat_id'])){
        //     $cid=$_GET['cat_id'];
        //     $query="select * from product where category_id='$cid' limit $show_product,$perpage";
        // }
        // else
        // {
             
        // $query="select * from product limit $show_product,$perpage";}
        // $go_query=mysqli_query($connection,$query);
        // while($out=mysqli_fetch_array($go_query)){
        // $product_id=$out['product_id'];
        // $product_name=$out['product_name'];
        // $category_id=$out['category_id'];
        // $price=$out['price'];
        // $qty=$out['qty'];
        // $photo=$out['photo'];

        // $display ='<div class="col-sm-3 col-md-3"><div class="thumbnail">';
        // $display.="<img src='images/{$photo}'>";
        // $display.='<div class="caption">';
    
        // $display.="<h3>{$product_name}</h3>";

        // $display.="<p>{$price}</p>";
        // $display.='<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
        // $display.="</div></div></div>";
        
        // echo $display;
    
        // }
        
?>
        <?php
        $query="select * from product limit $show_product,$perpage";
        $go_query=mysqli_query($connection,$query);
        while($out=mysqli_fetch_array($go_query)){
            $product_id=$out['ProductID'];
            $product_name=$out['ProductName'];
            // $category_id=$out['ProductCategoryID'];
            $price=$out['UnitPrice'];
            $photo=$out['Image'];
            $qty=$out['ProductQuantity'];
        ?>

            <div class="product-box" >
                    <div class="img-box">
                        <a href="detailProduct/detailProduct.php">
                            <img height="250" width="220" src=<?php echo '../TD/html/'.$photo ;?> alt="image">
                        </a>
                    </div>
                        <div class="caption">
                            <h3><?php echo $product_name?></h3>

                         <h4><?php echo $price ?></h4>
                        <?php if ($qty == 0) { ?>
                        <h6 style="color:Orange;">Out of Stock</h6>
                        <p class="text-center"><a disabled href="add-to-cart.php?id=<?php echo $product_id?>" class="btn btn-primary">Add-To-Cart</a></p>

                        <?php    } else { ?>
                        <h6>&nbsp;</h6>
                                            <p class="text-center"><a href="add-to-cart.php?id=<?php echo $product_id?>" class="btn btn-primary">Add-To-Cart</a></p>

                        <?php } ?>
                    </div>
            </div>



        <?php
            }   
        ?>


            <!-- <div class="product-box" >
                <div class="img-box">
                <img style="width: 100%;"  src="https://stockx.imgix.net/products/streetwear/FEAR-OF-GOD-ESSENTIALS-3D-Silicon-Applique-Pullover-Hoodie-Oatmeal-Heather-String-Tan.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1603481985" alt="">
                </div>
                <div class="product-title">FEAR OF GOD</div>
        </div>
        <div class="product-box" >
            <div class="img-box">
            <img style="width: 100%;"  src="https://stockx.imgix.net/products/streetwear/FEAR-OF-GOD-ESSENTIALS-3D-Silicon-Applique-Pullover-Hoodie-Oatmeal-Heather-String-Tan.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1603481985" alt="">
            </div>
            <div class="product-title">FEAR OF GOD</div>
    </div>
    <div class="product-box" >
        <div class="img-box">
        <img style="width: 100%;"  src="https://stockx.imgix.net/products/streetwear/FEAR-OF-GOD-ESSENTIALS-3D-Silicon-Applique-Pullover-Hoodie-Oatmeal-Heather-String-Tan.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1603481985" alt="">
        </div>
        <div class="product-title">FEAR OF GOD</div>
</div> -->
        
        </div>
    </div>
    <br>
    <br>
    <!-- <div id="foot"></div> -->
</body>
<script src='../jquery-3.5.1.min.js'></script>
<script src='../imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.js'></script>
<script>


    var waypoints = $('#header').waypoint(function() {
      $('.selector').toggleClass('blank').toggleClass('notblank')
      }, {
    offset: '-180%'
  })
  var waypoints = $('#zero').waypoint(function() {
      $('.holder').toggleClass('holderEnd').toggleClass('holderStart')
      }, {
    offset: '90%'
  })
    </script>
</html>
<?php 
session_start();
		include 'admin/connect.php';
		include 'functions.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.CusTop{margin-top:70px;}
.showname{color:#009;}
</style>
</head>
<link href="style/bootstrap.css" rel="stylesheet" />
<script src="style/jquery-1.10.2.js"></script>
<script src="style/bootstrap.js"></script>
<link href="style/style.css" rel="stylesheet">
<body>
<?php include 'header.php' ?>
 <div class="display-part">
        
        <h2 class="display-header">Horus <span style="color: #1f4287;">Gallery</span></h2>
        <div class="product-col">

    <?php
	if(isset($_POST['submit'])){

      global $connection;
$data=$_POST['search'];
  
  $query="select * from product where ProductName LIKE '%$data%'";
  $go_query=mysqli_query($connection,$query);
  $count_result=mysqli_num_rows($go_query);
  if($count_result==0){
    echo '<div class="well well-lg"> Sorry,no results found! <a href="index.php">Back</a></div>'; 
  }elseif($count_result>0){
    
  while($out=mysqli_fetch_array($go_query)){
    $product_id=$out['ProductID'];
    $product_name=$out['ProductName'];
    // $category_id=$out['category_id'];
    $price=$out['UnitPrice'];
    $qty=$out['ProductQuantity'];
    $photo=$out['Image'];

  ?>

            <div class="product-box" >
                    <div class="img-box">
                        <a href="detailProduct/detailProduct.php">
                            <img height="250" width="220"  src=<?php echo '../TD/html/'.$photo ;?> alt="image">
                        </a>
                    </div>
                        <div class="caption">
                            <h3><?php echo $product_name . $out['ProductID'] ?></h3>

                         <h3><?php echo $price ?></h3>
                    <p class="text-center"><a href="add-to-cart.php?id=<?php echo $product_id?>" class="btn btn-primary">Add-To-Cart</a></p>
                    </div>
            </div>
  <?php
  } 
   }
	}
?>		
		 
        </div>
    </div>
    <br>
    <br>
    <div id="foot"></div>
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
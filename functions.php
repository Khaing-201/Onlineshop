<?php
function show_result(){
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
		$display ='<div class="col-sm-3 col-md-3"><div class="thumbnail">';
		$display.="<img src='../TD/html/{$photo}'>";
		$display.='<div class="caption">';
	
		$display.="<h3>{$product_name}</h3>";

		$display.="<p>{$price}</p>";
		$display.='<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
		$display.="</div></div></div>";
		
		echo $display;
	
	}
	}	
}

function create_accu(){
	global $connection;
	global $user_name;
	global $password;
	global $email;
	global $phone;
	global $address;
	
	$hpass=md5($password);
	$query="select * from customer where CustomerName='$user_name' and Password='$hpass'";
	$user_query=mysqli_query($connection,$query);
	$count=mysqli_num_rows($user_query);
			if($count>0){
			echo "<script>window.alert('already exists')</script>";	
				}
			else{	
				$query="insert into customer(CustomerName,Password,Email,PhoneNo,Address)";
				$query.="values('$user_name','$hpass','$email','$phone','$address')";
				$go_query=mysqli_query($connection,$query);
				if(!$go_query){
					die("QUERY FAILED".mysqli_error($connection));
				}
				else
				{echo"<script>window.alert('you successfully created an accuount')</script>";
				}
				
				}
                
		}
	

?>
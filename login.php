<?php
	session_start();
	include 'admin/connect.php';
	include 'header.php';
	include 'functions.php';
	if(isset($_POST['login'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$errors=array(
		'username'=>'',
		'password'=>''
	);
	if($name==''){
		$errors['username']="This field could not be empty";	
	}
	if($password==''){
		$errors['password']="This field could not be empty";
	}
	
	$hpass=md5($password);
	$query="select * from customer";
	$go_query=mysqli_query($connection,$query);
	while($out=mysqli_fetch_array($go_query)){
		$db_user_name=$out['CustomerName'];
		$db_password=$out['Password'];
		// $db_user_role=$out['role'];	
		if($db_user_name==$name & $db_password==$hpass){
		$_SESSION['user']=$name;
		// header('location:admin/product.php');
				header('location:index.php');	

	}
	elseif($db_user_name==$name & $db_password==$hpass){
		$_SESSION['user']=$name;
		header('location:index.php');	
	}
	else{
		header('location:index.php');	
	}
	}
	
	
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.CusTop{margin-top:70px;}
.adjustp {
  width: 100%;
}
</style>
</head>
<link href="style/bootstrap.css" rel="stylesheet" />
<script src="style/jquery-1.10.2.js"></script>
<script src="style/bootstrap.js"></script>
<link href="style/style.css" rel="stylesheet">
<body>
<?php include 'header.php' ?>
<div class="container CusTop">
	<div class="row adjustp">
    	 <div class="col-sm-12">
 			<br><br>
 			<br>
 			<br><br>
 			<br>

<div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
       
   
 <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">UserName:</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="email" placeholder="Enter user name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="login">Login</button>
      <a class="btn btn-primary"  href="registration.php">Register</a>

    </div>
  </div>
</form>

</div>
</div>
</body>
</html>
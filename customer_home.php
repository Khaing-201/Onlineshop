<?php  
session_start();
include('connect.php');

if(!isset($_SESSION['CustomerID'])) 
{
	echo "<script>window.alert('Please Login first to continue.')</script>";
	echo "<script>window.location='customerlogin.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Home</title>
</head>
<body>
<form>
<h4>
Welcome <?php echo $_SESSION['CustomerName'] ?> 


 <?php echo $_SESSION['Role'] ?>

  <a href="customer_logout.php"> Logout</a>


?>
	
</h4>
</form>
</body>
</html>
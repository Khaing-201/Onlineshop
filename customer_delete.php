<?php  
session_start();
include('connect.php');

$CustomerID=$_GET['CustomerID'];

$Delete="DELETE FROM Customer WHERE CustomerID='$CustomerID' ";
$ret=mysqli_query($connection,$Delete);

if($ret)  //True
{
	echo "<script>window.alert('Customer Account Successfully Deleted!')</script>";
	echo "<script>window.location='customerentry.php'</script>";
}
else
{
	echo "<p>Something went wrong in Customer Delete : " . mysqli_error($connection) . "</p>";
}

?>
<?php  
session_start();
include('connect.php');

if(isset($_POST['btnUpdate'])) 
{
	$txtCustomerID=$_POST['txtCustomerID'];
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtPhoneNo=$_POST['txtPhoneNo'];
	$txtAddress=$_POST['txtAddress'];

	 $update="UPDATE customer
			 SET 
			 CustomerName='$txtCustomerName',
			 Email='$txtEmail',
			 Password='$txtPassword',
			 PhoneNo='$txtPhoneNo',
			 Address='$txtAddress'
			 
			 WHERE
			 CustomerID='$txtCustomerID'
			 ";
	$ret=mysqli_query($connection,$update);

	if($ret)  //True
	{
		echo "<script>window.alert('Customer Account Successfully Updated!')</script>";
		echo "<script>window.location='customerentry.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Customer Update  " . mysqli_error($connection) . "</p>";
	}
}

if(isset($_GET['CustomerID']))
{
	$CustomerID=$_GET['CustomerID'];

	$query="SELECT * FROM Customer WHERE CustomerID='$CustomerID' ";
	$ret=mysqli_query($connection,$query);
	$count=mysqli_num_rows($ret);
	$rows=mysqli_fetch_array($ret);

	if ($count < 1) 
	{
		echo "<script>window.alert('Invalid Customer Profile.')</script>";
		echo "<script>window.location='customerentry.php'</script>";
	}
}
else
{
	$CustomerID="";
	echo "<script>window.location='customerentry.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Update</title>
</head>
<body>
<form action="customer_Update.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Enter Customer Updated Information :</legend>
<input type="hidden" name="txtCustomerID" value="<?php echo $rows ['CustomerID']?>" required/>
<table cellpadding="5px">
<tr>
	<td>
		CustomerName<br/>
		<input type="text" name="txtCustomerName" value="<?php echo $rows['CustomerName'] ?>" required />
	</td>
</tr>
<tr>
	<td>
		Email <br/>
		<input type="email" name="txtEmail" value="<?php echo $rows['Email'] ?>" required/>
	</td>
</tr>
<tr>
	<td>
		Password <br/>
		<input type="password" name="txtPassword" value="<?php echo $rows['Password'] ?>" required/>
	</td>
</tr>
<tr>
	<td>
		Phone No<br/>
		<input type="text" name="txtPhoneNo" value="<?php echo $rows['PhoneNo'] ?>" required/>
	</td>
</tr>
<tr>
	<td colspan="2">
		Address <br/>
		<textarea name="txtAddress" cols="35"><?php echo $rows['Address'] ?></textarea>
	</td>
</tr>




<tr>
	<td >
		<input type="hidden" name="txtCustomerID" value="<?php echo $rows['CustomerID'] ?>" />
		<input type="submit" name="btnUpdate" value="Update"/>
		<input type="reset" value="Cancel"/>
	</td>
</tr>
</table>

</fieldset>

</form>
</body>
</html>
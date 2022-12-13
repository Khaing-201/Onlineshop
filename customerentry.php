<?php  
session_start();
include('connect.php');

if(isset($_POST['btnRegister'])) 
{
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];
	$txtPhoneNo=$_POST['txtPhoneNo'];
	$txtAddress=$_POST['txtAddress'];


	//Image Upload--------------------------------------
	//$Image=$_FILES['FileStaffPhoto']['name']; //abc.jpg
	//$Folder="StaffPhotos/";

	//$filename=$Folder . '_' .  $Image;  //StaffPhotos/_abc.jpg

	//$copied=copy($_FILES['FileStaffPhoto']['tmp_name'], $filename);

	// if (!$copied) 
	// {
	// 	echo "<script>window.alert('Cannot Upload Staff Photo.')</script>";
	// 	echo "<script>window.location='Staff_Entry.php'</script>";
	// 	exit();
	// }
	//--------------------------------------------------
	
	//Check Email Already Exist or not-------------------
	$checkEmail="SELECT * FROM customer WHERE Email='$txtEmail' ";
	$ret=mysqli_query($connection,$checkEmail);
	$count=mysqli_num_rows($ret);

	if($count > 0) 
	{
		echo "<script>window.alert('Email address already exist.')</script>";
		echo "<script>window.location='customerentry.php'</script>";
		exit();
	}
	//---------------------------------------------------

	$insert="INSERT INTO customer(`CustomerName`, `Email`, `Password`, `PhoneNo`, `Address`)
             VALUES
             ('$txtCustomerName','$txtEmail',
             	'$txtPassword','$txtPhoneNo','$txtAddress')";

	$ret=mysqli_query($connection,$insert);

	if($ret)  //True
	{
		echo "<script>window.alert('Customer Account Successfully Created!')</script>";
		echo "<script>window.location='customerentry.php'</script>";
	}
	else
	{
		echo "<p>Something went wrong in Customer Entry  " . mysqli_error($connection) . "</p>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Entry</title>
</head>
<body>
<form action="customerentry.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Enter Customer Registration </legend>
<table cellpadding="5px">
<tr>
	<td>
		CustomerName <br/>
		<input type="text" name="txtSupplierName" placeholder="Eg.Alex" required />
	</td>

</tr>
<tr>
	<td>
		Email <br/>
		<input type="email" name="txtEmail" placeholder="example@gmail.com" required/>
	</td>
</tr>
<tr>
	<td colspan="2">
		Password:<br/>
		<input type="email" name="txtPassword" placeholder="XXXXXXXXXXXX" required/>
	</td>
</tr>
<tr>
	<td>
		Phone Number <br/>
		<input type="text" name="txtPhoneNo" placeholder="+95----------" required/>
	</td>
</tr>
<tr>
	<td colspan="2">
		Address:<br/>
		<textarea name="txtAddress" cols="35"></textarea>
	</td>
</tr>

<tr>
	<td >
		<input type="submit" name="btnRegister" value="Register"/>
		<input type="reset" value="Cancel"/>
	</td>
</tr>
</table>

<hr/>

<?php  
$query="SELECT * FROM Customer";
$ret=mysqli_query($connection,$query);
$count=mysqli_num_rows($ret);

if($count < 1) 
{
	echo "<p>No Customer Information Found...</p>";
}
else
{
?>
	<table border="1" cellpadding="6px">
	<tr>
		
		<th>#</th>
		<th>CustomerID</th>
		<th>CustomerName</th>
		<th>Email</th>
		<th>Password</th>
		<th>PhoneNo</th>
		<th>Address</th>
		<th>Action</th>

		
	</tr>
	<?php  
		for($i=0;$i<$count;$i++) 
		{ 
			$rows=mysqli_fetch_array($ret);
			//print_r($rows);

			$CustomerID=$rows['CustomerID'];
			

			echo "<tr>";
			
			echo "<td>" . ($i + 1)  . "</td>";
			echo "<td>$CustomerID</td>";
			echo "<td>" . $rows['CustomerName'] . "</td>";
			echo "<td>" . $rows['Email'] . "</td>";
			echo "<td>" . $rows['Password'] . "</td>";
			echo "<td>" . $rows['PhoneNo'] . "</td>";
			echo "<td>" . $rows['Address'] . "</td>";
			
			echo "<td>
					<a href='Customer_Update.php?CustomerID=$CustomerID'>Update</a> 
					|
					<a href='Customer_Delete.php?CustomerID=$CustomerID'>Delete</a> 
				  </td>";
			echo "</tr>";
		}
	?>
	</table>

<?php
}
?>

</fieldset>

</form>
</body>
</html>
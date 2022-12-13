<?php
session_start();
session_destroy();

echo "
	<script> alert('Logout success'); 
	window.location.assign('customer_login.php'); 
	</script>";

?>
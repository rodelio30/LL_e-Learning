<?php 
	session_start();
	session_destroy();
	include ('include/connect.php');
		// mysqli_query($conn,"Update user Set status = 'Offline'")or die ("query 1 incorrect.......");
		// mysqli_query($conn,"Update check_od Set today = '1'")or die ("query 10 incorrect.......");


	header("location: login.php");


 ?>
<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
require ("../inc/cs-functions.php"); 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_user = $_POST['id_user'];



$query = mysqli_query($con,"UPDATE  user SET username='$username',password='$password' WHERE id_user='$id_user' " );


mysqli_close($con);
header("location:".home_url()."/dashboard");




  ?>



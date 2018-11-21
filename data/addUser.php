<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
// require ("../inc/cs-functions.php"); 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_user = $_POST['id_user'];
	$status = $_POST['status'];



echo $id_user;


$query = mysqli_query($con,"INSERT INTO user(id_user, status, username, password) VALUES ('$id_user','$status','$username','$password')" );

mysqli_close($con);
// header("location:".home_url()."/settings");






  ?>



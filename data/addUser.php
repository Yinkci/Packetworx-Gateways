<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
require ("../inc/cs-functions.php"); 
if (isset($_POST["addUser_submit"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_user = $_POST['id_user'];


echo $id_user;


$query = mysqli_query($con,"INSERT INTO user(id_user, username, password) VALUES ('$id_user','$username','$password')" );

mysqli_close($con);
header("location:".home_url()."/settings");


}



  ?>


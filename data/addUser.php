<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
// require ("../inc/cs-functions.php"); 
;

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_user = $_POST['id_user'];
	$status = $_POST['status'];

$query_ = pg_query($con,"SELECT * FROM public.user WHERE username='$username'");
if (pg_num_rows($query_) != 0) {
	echo "Username already exists";
}
else{
	if (strlen($password) < 6):
	  echo "Password: minimum length of 6 characters";
	else:
		$query = pg_query($con,"INSERT INTO public.user(id_user, status, username, password) VALUES ('$id_user','$status','$username','$password')" );
		pg_close($con);
		echo "Succesfully added new user";
		// header("location:".home_url()."/settings");
	endif;
}

  ?>



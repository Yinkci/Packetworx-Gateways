<?php

session_start();
$error = "";
require ("config/database_con.php");
if (isset($_POST["log_submit"])) {
		$username = $_POST["log_user"];
		$password = $_POST["log_pass"];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$query = pg_query($con,"SELECT * FROM public.user where username = '$username' AND password = '$password'");
		$row = pg_num_rows($query);
		if ($row==1) {
			$_SESSION['login_user'] = $username;
			header("location: gateways");
		}
		else{
			$error="invalid username / password";
		}
			pg_close($con);
}// END FIRST IF

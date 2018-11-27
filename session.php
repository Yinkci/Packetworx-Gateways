<?php
session_start();
require ("config/database_con.php");
$user_check = $_SESSION['login_user'];
$ses_sqli = pg_query($con,"SELECT * FROM public.user where username = '$user_check'");
$row = pg_fetch_assoc($ses_sqli);
$login_session = $row['username'];


if (!isset($login_session)) {
	pg_close($con);
	header("location: index");
}
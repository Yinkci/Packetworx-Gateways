<?php 
require ("../config/database_con.php"); 
require ("../inc/cs-functions.php"); 
if(isset($_POST["submit_dellAll"])):
$query = mysqli_query($con,"DELETE FROM gateways");
mysqli_close($con);
else:
endif;
?>


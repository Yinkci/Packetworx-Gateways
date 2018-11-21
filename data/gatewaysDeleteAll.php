<?php 
require ("../config/database_con.php"); 

$query = mysqli_query($con,"DELETE FROM gateways");
mysqli_close($con);

?>


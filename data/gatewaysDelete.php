<?php 
require ("../config/database_con.php"); 

$gateways_id = $_POST["x"];
$query = mysqli_query($con,"DELETE FROM gateways WHERE gateway_id='$gateways_id'");
mysqli_close($con);

?>


<?php 
require ("../config/database_con.php"); 

$gateways_id = $_POST["x"];
$query = pg_query($con,"DELETE FROM gateways WHERE gateway_id='$gateways_id'");
pg_close($con);

?>


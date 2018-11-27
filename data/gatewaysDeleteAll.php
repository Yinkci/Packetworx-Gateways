<?php 
require ("../config/database_con.php"); 

$query = pg_query($con,"DELETE FROM gateways");
pg_close($con);

?>


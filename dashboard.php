<?php require ("session.php"); ?>
<?php require ("dashboard-header.php"); 
$con = pg_connect("host = localhost dbname=tester user=postgres");
// $con = mysqli_connect("localhost","root","");
// $db = mysqli_select_db($con,"resume"); 
if(!$con){
echo "not connected";
}
else{
	echo "connected";
}

?>
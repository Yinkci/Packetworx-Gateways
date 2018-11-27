<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
require ("../inc/cs-functions.php"); 
if (isset($_POST["submit_add"])) {
	$gateway_id = $_POST['gateway_id']?: 'N/A' ;
	$tti_id = $_POST['tti_id']?: 'N/A' ;
	$lon = $_POST['lon']?: 'N/A' ;
	$lat = $_POST['lat']?: 'N/A' ;
	$display_name = $_POST['display_name']?: 'N/A' ;
	$deployment_status = $_POST['deployment_status']?: 'N/A' ;
	$esn = $_POST['esn']?: 'N/A' ;
	$mac = $_POST['mac']?: 'N/A' ;
	$serial_number = $_POST['serial_number']?: 'N/A' ;
	$ctn_box_number = $_POST['ctn_box_number']?: 'N/A' ;
	$ssid = $_POST['ssid']?: 'N/A' ;
	$ssid_key = $_POST['ssid_key']?: 'N/A' ;
	$router_username = $_POST['router_username']?: 'N/A' ;
	$router_key = $_POST['router_key']?: 'N/A' ;
	$gateway_key = $_POST['gateway_key']?: 'N/A' ;
	$owner = $_POST['owner']?: 'N/A' ;
	$frequency  = $_POST['frequency']?: 'N/A' ;
	$antenna = $_POST['antenna']?: 'N/A';
	$gateway_site_id = $_POST['gateway_site_id']?: 'N/A' ;
	$site_location = $_POST['site_location']?: 'N/A' ;
	$city = $_POST['city']?: 'N/A' ;
	$contact = $_POST['gateway_site_id']?: 'N/A' ;
	$date_installed = $_POST['date_installed']?: 'N/A' ;
	$care_of = $_POST['care_of']?: 'N/A' ; 
	$notes = $_POST['notes']?: 'N/A' ;
	$gateway_username = $_POST['gateway_username']?: 'N/A' ;
	$monitored = $_POST['monitored'];






$query = pg_query($con,"INSERT INTO gateways(gateway_id,tti_id,lon,lat,display_name,deployment_status,esn,mac,serial_number,ctn_box_number,ssid,ssid_key,router_username,router_key,gateway_key,owner,frequency,antenna,gateway_site_id,site_location,city,contact,date_installed,care_of,notes,gateway_username,monitored)VALUES('$gateway_id','$tti_id','$lon','$lat','$display_name','$deployment_status','$esn','$mac','$serial_number','$ctn_box_number','$ssid','$ssid_key','$router_username','$router_key','$gateway_key','$owner','$frequency','$antenna','$gateway_site_id','$site_location','$city','$contact','$date_installed','$care_of','$notes','$gateway_username','$monitored')");

pg_close($con);
header("location:".home_url()."/gateways");


}



  ?>



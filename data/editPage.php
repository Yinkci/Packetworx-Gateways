<?php 
ob_start();
// include (__DIR__."/database.php");

require ("../config/database_con.php"); 
require ("../inc/cs-functions.php"); 

	$gateway_id = $_POST['gateway_id'];
	$tti_id = $_POST['tti_id'];
	$lon = $_POST['lon'];
	$lat = $_POST['lat'];
	$display_name = $_POST['display_name'];
	$deployment_status = $_POST['deployment_status'];
	$esn = $_POST['esn'];
	$mac = $_POST['mac'];
	$serial_number = $_POST['serial_number'];
	$ctn_box_number = $_POST['ctn_box_number'];
	$ssid = $_POST['ssid'];
	$ssid_key = $_POST['ssid_key'];
	$router_username = $_POST['router_username'];
	$router_key = $_POST['router_key'];
	$gateway_key = $_POST['gateway_key'];
	$owner = $_POST['owner'];
	$frequency  = $_POST['frequency'];
	$antenna = $_POST['antenna'];
	$gateway_site_id = $_POST['gateway_site_id'];
	$site_location = $_POST['site_location'];
	$city = $_POST['city'];
	$contact = $_POST['gateway_site_id'];
	$date_installed = $_POST['date_installed'];
	$care_of = $_POST['care_of']; 
	$notes = $_POST['notes'];
	$gateway_username = $_POST['gateway_username'];
	$monitored = $_POST['monitored'];


$query = mysqli_query($con,"UPDATE  gateways SET gateway_id='$gateway_id',tti_id='$tti_id',lon='$lon',lat='$lat',display_name='$display_name',deployment_status='$deployment_status',esn='$esn',mac='$mac',serial_number='$serial_number',ctn_box_number='$ctn_box_number',ssid='$ssid',ssid_key='$ssid_key',router_username='$router_username',router_key='$router_key',gateway_key='$gateway_key',owner='$owner',frequency='$frequency',antenna='$antenna',gateway_site_id='$gateway_site_id',site_location='$site_location',city='$city',contact='$contact',date_installed='$date_installed',care_of='$care_of',notes='$notes',gateway_username='$gateway_username',monitored='$monitored' WHERE gateway_id = '$gateway_id'");


mysqli_close($con);
header("location:".home_url()."/gateways");




  ?>



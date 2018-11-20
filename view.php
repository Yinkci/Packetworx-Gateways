<?php require ("session.php"); ?>
<?php require ("dashboard-header.php"); ?>
<?php require ("config/database_con.php"); ?>
<?php require ("inc/cs-functions.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title>Packetworx Gateway Management</title>
</head>
<body>
<?php
	$PageName = $_GET['view']; 
	$query = mysqli_query($con,"SELECT * FROM gateways where esn = '$PageName'  ");
	$row = mysqli_num_rows($query);

	while($rowx = mysqli_fetch_array($query)){
	$gateway_id = $rowx['gateway_id'];
	$tti_id = $rowx['tti_id'];
	$lon = $rowx['lon'];
	$lat = $rowx['lat'];
	$display_name = $rowx['display_name'];
	$deployment_status = $rowx['deployment_status'];
	$esn = $rowx['esn'];
	$mac = $rowx['mac'];
	$serial_number = $rowx['serial_number'];
	$ctn_box_number = $rowx['ctn_box_number'];
	$ssid = $rowx['ssid'];
	$ssid_key = $rowx['ssid_key'];
	$router_username = $rowx['router_username'];
	$router_key = $rowx['router_key'];
	$gateway_key = $rowx['gateway_key'];
	$owner = $rowx['owner'];
	$frequency  = $rowx['frequency'];
	$antenna = $rowx['antenna'];
	$gateway_site_id = $rowx['gateway_site_id'];
	$site_location = $rowx['site_location'];
	$city = $rowx['city'];
	$contact = $rowx['gateway_site_id'];
	$date_installed = $rowx['date_installed'];
	$care_of = $rowx['care_of']; 
	$notes = $rowx['notes'];
	$gateway_username = $rowx['gateway_username'];
	$monitored = $rowx['monitored'];

	}

?>

<div class="menu col-md-10 col-md-10 col-xl-10 d-xl-block pd-left10">

			<div class="view_gateways_view">
				<div class="row">
					<div class="col-md-4">
						<div><span>ESN :</span><input disabled="true" type="text" name="esn" value="<?php echo $esn; ?>"></div>
						<div><span>Status :</span><input disabled="true" type="text" name="deployment_status" value="<?php echo $deployment_status; ?>"></div> 
						<div><span>Gateway ID :</span><input  disabled="true" type="text" name="gateway_id" value="<?php echo $gateway_id; ?>"> </div>
						<div><span>SSID :</span><input  disabled="true" type="text" name="ssid" value="<?php echo $ssid; ?>"></div>
						<div><span>Site :</span><input  disabled="true" type="text" name="site_location" value="<?php echo $site_location; ?>"></div>
						<div><span>City :</span><input disabled="true"  type="text" name="city" value="<?php echo $city; ?>"></div> 
						<div><span>TTI ID :</span><input  disabled="true" type="text" name="tti_id" value="<?php echo $tti_id; ?>"></div> 
						<div><span>Longitude :</span><input  disabled="true" type="text" name="lon" value="<?php echo $lon; ?>"></div> 
						<div><span>Latitude :</span><input  disabled="true" type="text" name="lat" value="<?php echo $lat; ?>"></div>
						<div><span>Display Name :</span><input  disabled="true" type="text" name="display_name" value="<?php echo $display_name; ?>"></div> 
						<div><span>Mac Address :</span><input  disabled="true" type="text" name="mac" value="<?php echo $mac; ?>"></div>
						<div><span>Serial Number :</span><input  disabled="true" type="text" name="serial_number" value="<?php echo $serial_number; ?>"></div> 
						
					</div>
					<div class="col-md-4">
						<div><span>CTN Box Number :</span><input  disabled="true" type="text" name="ctn_box_number" value="<?php echo $ctn_box_number; ?>"></div>
						<div><span>SSID Key :</span><input  disabled="true" type="text" name="ssid_key" value="<?php echo $ssid_key; ?>"></div>
						<div><span>Router Username :</span><input  disabled="true" type="text" name="router_username" value="<?php echo $router_username; ?>"></div> 
						<div><span>Router Key :</span><input  disabled="true" type="text" name="router_key" value="<?php echo $router_key; ?>"></div>
						<div><span>Gateway Key :</span><input  disabled="true" type="text" name="gateway_key" value="<?php echo $gateway_key; ?>"></div>
						<div><span>Gateway Key :</span><input  disabled="true" type="text" name="gateway_key" value="<?php echo $gateway_key; ?>"></div>
						<div><span>Owner :</span><input  disabled="true" type="text" name="owner" value="<?php echo $owner; ?>"></div>
						<div><span>Frequency :</span><input  disabled="true" type="text" name="frequency" value="<?php echo $frequency; ?>"></div>
						<div><span>Antenna :</span><input  disabled="true" type="text" name="antenna" value="<?php echo $antenna; ?>"></div>
						<div><span>Gateway Site ID :</span><input  disabled="true" type="text" name="gateway_site_id" value="<?php echo $gateway_site_id; ?>"></div>
						<div><span>Contact :</span><input  disabled="true" type="text" name="contact" value="<?php echo $contact; ?>"></div>
					</div>
					<div class="col-md-4">
						<div><span>Date Installed :</span><input  disabled="true" type="text" name="date_installed" value="<?php echo $date_installed; ?>"></div>
						<div><span>Care Of :</span><input  disabled="true" type="text" name="care_of" value="<?php echo $care_of; ?>"></div>
						<div><span>Notes :</span><input  disabled="true" type="text" name="notes" value="<?php echo $notes; ?>"></div>
						<div><span>Gateway Username :</span><input  disabled="true" type="text" name="gateway_username" value="<?php echo $gateway_username; ?>"></div>
						<div><span>Monitor :</span><input  disabled="true" type="text" name="monitored" value="<?php echo $monitored; ?>"></div>
						<div class="view_back"><a href="gateways">BACK</a></div>
					</div>
				</div>
			</div>
</div><!-- end of col 10 -->

</div><!-- end of row dashbpard-header -->
</html>
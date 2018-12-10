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
	$query = pg_query($con,"SELECT * FROM gateways where esn = '$PageName'  ");
	$row = pg_num_rows($query);

	while($rowx = pg_fetch_array($query)){
	include("inc/sql-statements.php");
	if($monitored=="t"):
		$monitored ="True";
	else:
		$monitored ="False";
	endif;

	}

?>

<div class="menu col-md-10 col-md-10 col-xl-10 d-xl-block pd-left10">

			<div class="view_gateways_view">
				<div class="row">
					<div class="col-md-6">
						<div><span>ESN :</span><textarea disabled="true"><?php echo $esn; ?></textarea></div>
						<div><span>Status :</span><textarea disabled="true"><?php echo $deployment_status; ?></textarea></div> 
						<div><span>Gateway ID :</span><textarea disabled="true"><?php echo $gateway_id; ?></textarea></div>
						<div><span>SSID :</span><textarea disabled="true"><?php echo $ssid; ?></textarea> </div>
						<div><span>Site :</span><textarea disabled="true"><?php echo $site_location; ?></textarea></div>
						<div><span>City :</span><textarea disabled="true"><?php echo $city; ?></textarea></div> 
						<div><span>TTI ID :</span><textarea disabled="true"><?php echo $tti_id; ?></textarea></div> 
						<div><span>Longitude :</span><textarea disabled="true"><?php echo $lon; ?></textarea> </div> 
						<div><span>Latitude :</span><textarea disabled="true"><?php echo $lat; ?></textarea></div>
						<div><span>Display Name :</span><textarea disabled="true"><?php echo $display_name; ?></textarea></div> 
						<div><span>Mac Address :</span><textarea disabled="true"><?php echo $mac; ?></textarea></div>
						<div><span>Serial Number :</span><textarea disabled="true"><?php echo $serial_number; ?></textarea></div> 
						<div><span>CTN Box Number :</span><textarea disabled="true"><?php echo $ctn_box_number; ?></textarea></div>
						<div><span>SSID Key :</span><textarea disabled="true"><?php echo $ssid_key; ?></textarea></div>
						<div><span>Router Username :</span><textarea disabled="true"><?php echo $router_username; ?></textarea></div> 
						<div><span>Router Key :</span><textarea disabled="true"><?php echo $router_key; ?></textarea></div>
						<div><span>Gateway Key :</span><textarea disabled="true"><?php echo $gateway_key; ?></textarea></div>	
					</div>
					<div class="col-md-6">

						<div><span>Gateway Key :</span><textarea disabled="true"><?php echo $gateway_key; ?></textarea></div>
						<div><span>Owner :</span><textarea disabled="true"><?php echo $owner; ?></textarea></div>
						<div><span>Frequency :</span><textarea disabled="true"><?php echo $frequency; ?></textarea></div>
						<div><span>Antenna :</span><textarea disabled="true"><?php echo $antenna; ?></textarea></div>
						<div><span>Gateway Site ID :</span><textarea disabled="true"><?php echo $gateway_site_id; ?></textarea></div>
						<div><span>Contact :</span><textarea disabled="true"><?php echo $contact; ?></textarea></div>
						<div><span>Date Installed :</span><textarea disabled="true"><?php echo $date_installed; ?></textarea></div>
						<div><span>Care Of :</span><textarea disabled="true"><?php echo $care_of; ?></textarea></div>
						<div><span>Notes :</span><textarea disabled="true"><?php echo $notes; ?></textarea></div>
						<div><span>Gateway Username :</span><textarea disabled="true"><?php echo $gateway_username; ?></textarea></div>
						<div><span>Monitor :</span><textarea disabled="true"><?php echo $monitored; ?></textarea></div>
						<div class="view_back"><a href="gateways">Back</a></div>
					</div>
				</div>
			</div>
</div><!-- end of col 10 -->

</div><!-- end of row dashbpard-header -->
</html>
<?php require ("session.php"); ?>
<?php require ("dashboard-header.php"); ?>
<?php require ("config/database_con.php"); ?>
<?php require ("inc/cs-functions.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div class="menu col-md-10 col-md-10 col-xl-10 d-xl-block pd-left10">
		<form method="POST" action="data/addPage">
			<div class="view_gateways_edit">
				<div class="row">
					<div class="col-md-6">
						<div><span>ESN :</span><input type="text" name="esn" value=""></div>
						<div><span>Status :</span><input type="text" name="deployment_status" value=""></div> 
						<div><span>Gateway ID :</span><input type="text" name="gateway_id" value="" required> </div>
						<div><span>SSID :</span><input type="text" name="ssid" value=""></div>
						<div><span>Site :</span><input type="text" name="site_location" value=""></div>
						<div><span>City :</span><input type="text" name="city" value=""></div> 
						<div><span>TTI ID :</span><input type="text" name="tti_id" value="" required></div> 
						<div><span>Longitude :</span><input type="text" name="lon" value=""></div> 
						<div><span>Latitude :</span><input type="text" name="lat" value=""></div>
						<div><span>Display Name :</span><input type="text" name="display_name" value=""></div> 
						<div><span>Mac Address :</span><input type="text" name="mac" value=""></div>
						<div><span>Serial Number :</span><input type="text" name="serial_number" value=""></div> 
						<div><span>CTN Box Number :</span><input type="text" name="ctn_box_number" value=""></div>
						<div><span>SSID Key :</span><input type="text" name="ssid_key" value=""></div>
						<div><span>Router Username :</span><input type="text" name="router_username" value=""></div> 
					</div>
					<div class="col-md-6">
						<div><span>Router Key :</span><input type="text" name="router_key" value=""></div>
						<div><span>Gateway Key :</span><input type="text" name="gateway_key" value=""></div>
						<div><span>Gateway Key :</span><input type="text" name="gateway_key" value=""></div>
						<div><span>Owner :</span><input type="text" name="owner" value=""></div>
						<div><span>Frequency :</span><input type="text" name="frequency" value=""></div>
						<div><span>Antenna :</span><input type="text" name="antenna" value=""></div>
						<div><span>Gateway Site ID :</span><input type="text" name="gateway_site_id" value=""></div>
						<div><span>Contact :</span><input type="text" name="contact" value=""></div>
						<div><span>Date Installed :</span><input type="date" data-date-inline-picker="true" type="text" name="date_installed" value=""></div>
						<div><span>Care Of :</span><input type="text" name="care_of" value=""></div>
						<div><span>Notes :</span><input type="text" name="notes" value=""></div>
						<div><span>Gateway Username :</span><input type="text" name="gateway_username" value=""></div>
						<div><span>Monitor :</span><input type="text" name="monitored" value=""></div>
						<div class="edit_submit"><input type="submit" name="submit_add" value="ADD" class="action-edit-save"></div>
						<div class="edit_back"><a href="dashboard">BACK</a></div>

					</div>
				</div>
			</div>
		</form>
</div><!-- end of col 10 -->

</div><!-- end of row dashbpard-header -->
</html>
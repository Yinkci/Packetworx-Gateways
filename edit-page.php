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
	$PageName = $_GET['edit']; 
	$query = pg_query($con,"SELECT * FROM gateways where esn = '$PageName'  ");
	$row = pg_num_rows($query);
	while($rowx = pg_fetch_array($query)){
	include("inc/sql-statements.php");
	}
?>
<div class="menu col-md-10 col-md-10 col-xl-10 d-xl-block pd-left10 form-chck">
	<form method="POST" action="data/editPage">
		<div class="view_gateways_edit">
			<div class="row">
				<div class="col-md-4">
					<div><span>ESN :</span><input type="text" name="esn" value="<?php echo $esn; ?>"></div>
					<div class="status_"><span>Status :</span><input type="hidden" name="deployment_status" value="<?php echo $deployment_status; ?>" id="selected_status">
						<select onchange="document.getElementById('selected_status').value=this.options[this.selectedIndex].text">
						<option value="demo" <?php if($deployment_status=="Demo"): echo "selected=''"; else:endif;?> >Demo</option>
						<option value="onboarded"<?php if($deployment_status=="Onboarded"): echo "selected=''"; else:endif;?> >Onboarded</option>
						<option value="deployed"<?php if($deployment_status=="Deployed"): echo "selected=''"; else:endif;?>  >Deployed</option>
						<option value="installled"<?php if($deployment_status=="Installled"): echo "selected=''"; else:endif;?> >Installled</option>
						<option value="error"<?php if($deployment_status=="Error"): echo "selected=''"; else:endif;?>>Error</option>
						</select>
					</div> 
					<div><span>Gateway ID :</span><input  readonly class="readonly" type="text" name="gateway_id" value="<?php echo $gateway_id; ?>"> </div>
					<div><span>SSID :</span><input type="text" name="ssid" value="<?php echo $ssid; ?>"></div>
					<div><span>Site :</span><input type="text" name="site_location" value="<?php echo $site_location; ?>"></div>
					<div><span>City :</span><input type="text" name="city" value="<?php echo $city; ?>"></div> 
					<div><span>TTI ID :</span><input  type="text" name="tti_id" value="<?php echo $tti_id; ?>"></div> 
					<div><span>Longitude :</span><input type="text" name="lon" value="<?php echo $lon; ?>"></div> 
					<div><span>Latitude :</span><input type="text" name="lat" value="<?php echo $lat; ?>"></div>
					<div><span>Display Name :</span><input type="text" name="display_name" value="<?php echo $display_name; ?>"></div> 
					<div><span>Mac Address :</span><input type="text" name="mac" value="<?php echo $mac; ?>"></div>
					<div><span>Serial Number :</span><input type="text" name="serial_number" value="<?php echo $serial_number; ?>"></div> 
				</div>
				<div class="col-md-4">
					<div><span>CTN Box Number :</span><input type="text" name="ctn_box_number" value="<?php echo $ctn_box_number; ?>"></div>
					<div><span>SSID Key :</span><input type="text" name="ssid_key" value="<?php echo $ssid_key; ?>"></div>
					<div><span>Router Username :</span><input type="text" name="router_username" value="<?php echo $router_username; ?>"></div> 
					<div><span>Router Key :</span><input type="text" name="router_key" value="<?php echo $router_key; ?>"></div>
					<div><span>Gateway Key :</span><input type="text" name="gateway_key" value="<?php echo $gateway_key; ?>"></div>
					<div><span>Owner :</span><input type="text" name="owner" value="<?php echo $owner; ?>"></div>
					<div><span>Frequency :</span><input type="text" name="frequency" value="<?php echo $frequency; ?>"></div>
					<div><span>Antenna :</span><input type="text" name="antenna" value="<?php echo $antenna; ?>"></div>
					<div><span>Gateway Site ID :</span><input type="text" name="gateway_site_id" value="<?php echo $gateway_site_id; ?>"></div>
					<div><span>Contact :</span><input type="text" name="contact" value="<?php echo $contact; ?>"></div>
				</div>
				<div class="col-md-4">
					<div><span>Date Installed :</span><input type="date" data-date-inline-picker="true" name="date_installed" value="<?php echo $date_installed; ?>"></div>
					<div><span>Care Of :</span><input type="text" name="care_of" value="<?php echo $care_of; ?>"></div>
					<div><span>Notes :</span><input type="text" name="notes" value="<?php echo $notes; ?>"></div>
					<div><span>Gateway Username :</span><input type="text" name="gateway_username" value="<?php echo $gateway_username; ?>"></div>
					<div>
						<span>Monitor :</span>
						<input type="hidden" name="monitored" value="<?php echo $monitored; ?>" id="selected_text" >
				 	 	<?php  if($monitored=="f"): ?>
						<select onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
						<option value="yes">True</option>
						<option value="no" selected="">False</option>
						</select>
						<?php else: ?>
						<select onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
						<option value="yes" selected>True</option>
						<option value="no" >False</option>
						</select>
						<?php endif; ?> 
					</div>
					<div class="edit_submit"><input type="submit" name="submit_save" value="SAVE" class="action-edit-save"></div>
					<div class="edit_back"><a href="gateways">BACK</a></div>
				</div>
			</div>
		</div>
	</form>
</div><!-- end of col 10 -->
</div><!-- end of row dashbpard-header -->
</html>
<?php require ("session.php"); ?>
<?php require ("dashboard-header.php"); ?>
<?php require ("config/database_con.php"); ?>
<?php require ("inc/cs-functions.php"); ?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body class="dashboard-view">
<div class="menu col-md-10 col-md-12 col-xl-10 d-xl-block pd-left10">
<div class="search-field">
	<form action="search" method="post"> 
	<input type="text" name="term" placeholder="Search Gateway / ESN" />
	<input type="submit" value="Submit" /> 
	</form> 
</div>
	<div class="view_gateways" style="overflow-x:auto;">
		<form action="" method="POST">
		<table class="gateways-table">
		<tr class="all_title_tr">
			<th>ESN</th>
			<th>Status</th> 
			<th>Gateway ID</th>
			<th>SSID</th>
			<th>Site</th> 
			<th>City</th> 
			<th>Action</th> 
		</tr>
<?php
 	$status= $row['status'];
	$query  = mysqli_query($con,"SELECT * FROM  gateways");
	$row = mysqli_num_rows($query);
	$x =1;
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
	$contact = $rowx['contact'];
	$date_installed = $rowx['date_installed'];
	$care_of = $rowx['care_of']; 
	$notes = $rowx['notes'];
	$gateway_username = $rowx['gateway_username'];
	$monitored = $rowx['monitored'];
?>
	<tr class="<?php echo "esn_".$gateway_id ?> clr_<?php echo $x?>">
			<td><?php echo $esn; ?> </td>
			<td><?php echo $deployment_status; ?> </td>
			<td><?php echo $gateway_id; ?> </td>
			<td><?php echo $ssid; ?> </td>
			<td><?php echo $site_location; ?> </td>
			<td><?php echo $city; ?> </td>
			<td class="action-edit"><a href='<?php echo home_url()."/view/?view=".$esn ?>'> View </a>
			<!-- Check if admin or editor -->
			<?php if($status=="admin"): ?>			
			 <a href='<?php echo home_url()."/edit-page/?edit=".$esn ?>'> Edit </a><a href="javaScript:void(0);"  data-name="<?php echo $gateway_id ?>"  class="deleteGate_"> Delete </a>
			<?php else: ?>
			<?php endif; ?>
		</tr> 
		</td>
		<?php 
		// color counter interval
		if($x==2):
			$x=0;
			$x++;
		else:
			$x++;
		endif;
		} ?><!-- end og while -->
		</table>
		</form>
	</div>
<div class="controller">
	<div class="row">
		<div class="col-md-3 p-0">
			<a href="addgateway"><div class="gateway_btns">Add New Gateway</div></a>
		</div>
		<div class="col-md-3 p-0">
			<div class="">
				<form method="POST" action="data/gatewaysDeleteAll" class="delForm">
					<input type="submit" name="submit_dellAll" class="delAll" value="Delete All">
				</form>
			</div>
		</div>
	</div>
</div>
</div><!-- end of col 10 -->

</div><!-- end of row dashbpard-header -->
</html>
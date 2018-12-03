<?php require ("session.php"); ?>
<?php require ("dashboard-header.php"); ?>
<?php require ("config/database_con.php"); ?>
<?php require ("inc/cs-functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Packetworx Gateway Management</title>
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
			<th>Gateway ID</th>
			<th>Status</th> 
			<th>ESN</th>
			<th>Serial No.</th>
			<th>Site</th> 
			<th>City</th> 
			<th>Owner</th>
			<th>Action</th> 
		</tr>
<?php
 	$status= $row['status'];
	$query  = pg_query($con,"SELECT * FROM  public.gateways");
	$row = pg_num_rows($query);
	$x =1;
	while($rowx = pg_fetch_assoc($query)){
	include("inc/sql-statements.php");
?>
	<tr class="<?php echo "esn_".$gateway_id ?> clr_<?php echo $x?>">
			<td><?php echo $gateway_id; ?> </td>
			<td><?php echo $deployment_status; ?> </td>
			<td><?php echo $esn; ?> </td>
			<td><?php echo $serial_number; ?> </td>
			<td><?php echo $site_location; ?> </td>
			<td><?php echo $city; ?> </td>
			<td><?php echo $owner; ?> </td>
			<td class="action-edit"><a href='<?php echo home_url()."/view/?view=".$esn ?>'> View </a>
			<!-- Check if admin or editor -->
			<?php if($status=="Admin"): ?>			
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
		} ?><!-- end of while -->
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
				<?php if($status=="Admin"): ?>
				<form method="POST" action="data/gatewaysDeleteAll" class="delForm">
					<input type="submit" name="submit_dellAll" class="delAll" value="Delete All">
				</form>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</div><!-- end of col 10 -->
</div><!-- end of row dashbpard-header -->
</html>
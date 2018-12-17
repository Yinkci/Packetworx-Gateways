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

<div class="settings-col col-md-4 col-md-12 col-xl-5 d-xl-block ">
<?php
	$current_user = $row['username'];
	$status= $row['status'];
	$query =pg_query($con,"SELECT * FROM public.user WHERE username ='$current_user'");
	$row =pg_num_rows($query);
	while($rowx =pg_fetch_array($query)){
	$username = $rowx['username'];
	$password = $rowx['password'];
	$id_user = $rowx['id_user'];
	$status = $rowx['status'];
	}
?>
<!-- USER INFO -->
<div class="row">
		<form method="POST" class="profile_set">
			<div class="pro_set"> Profile Settings </div>
			<div class="settings_ no-border">
				<div class="username">Username</div><input readonly type="text" name="" value="<?php echo $username ?>">
				<div class="password">Password</div><input readonly type="password" name="" value="<?php echo $password ?>">
				<div class="row">
					<div class="col-md-6">
						<a href="changpass" data-toggle="modal" data-target="#changepass" >Change Password</a>
					</div>
				</div>
			</div>
		</form>
		<!--Changepass modal -->
		<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <h4 class="modal-title" id="myModalLabel">Change Password</h4>
			        </div>
			        <div class="modal-body">
			        	
					<form method="POST" action="data/changePass">
						<div class="settings_ changepass ">
							<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo $id_user ?>">
							<div class="username">Username</div><input readonly type="text" name="username" value="<?php echo $username ?>">
							<div class="password">Password</div><input type="password" name="password" value="" class="f_pass">
							<div>Confirm Password</div><input type="password" name="password_confirm" value=""  class="confirm_password">
							<div class="row">
								<div class="col-md-6">
									<input type="submit" name="" value="Submit" class="check_pass">
								</div>
								<div class="col-md-6">
									<a href=""  class="closeModal" data-dismiss="modal">Close</a>
								</div>
							</div>

						</div>
					</form>

			        </div>
			    </div>
			</div>
		</div>

</div>
</body>
</html>
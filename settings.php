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
	$query = mysqli_query($con,"SELECT * FROM user WHERE username ='$current_user'");
	$row = mysqli_num_rows($query);

	while($rowx = mysqli_fetch_array($query)){
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
					<div class="col-md-6">
						<?php if($status=="Admin"): ?>	
						<a href="changpass" data-toggle="modal" data-target="#adduser">Add New User</a>
						<?php else: ?>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</form>
		<!--Changepass modal -->
		<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <h4 class="modal-title" id="myModalLabel">Change Username / Password</h4>
			        </div>
			        <div class="modal-body">
			        	
					<form method="POST" action="data/changePass">
						<div class="settings_ changepass ">
							<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo $id_user ?>">
							<div class="username">Username</div><input type="text" name="username" value="">
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
		<!--Add user modal -->
		<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <h4 class="modal-title" id="myModalLabel">Add User</h4>
			        </div>
			        <div class="modal-body">
			        	
					<form method="POST" action="data/addUser" id="addUserForm">
						<div class="settings_ changepass adduser_">
							<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo $id_user ?>">
							<div class="status">Role</div><input type="hidden" name="status" id="selected_role" value="<?php echo $status ?>">
							<select onchange="document.getElementById('selected_role').value=this.options[this.selectedIndex].text" class="role_box">
							<option value="admin">Admin</option>
							<option value="editor" >Editor</option>
							</select>
							<div class="username">Username</div><input type="text" name="username" value="<?php echo $username ?>" data-username ="">
							<div class="password">Password</div><input type="password" name="password" value="<?php echo $password ?>">
							<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo rand(10,9000); ?>">
							<div class="row">
								<div class="col-md-6">
									<!-- <input type="submit" name="addUser_submit" value="Submit" > -->
									<a href="javascript:void(0);" class="addUser_ajax">Submit</a>
								</div>
								<div class="col-md-6">
									<a href=""  class="closeModal" data-dismiss="modal">Close</a>
								</div>
							</div>
							<div class="success_new_user"></div>

						</div>
					</form>


			        </div>
			    </div>
			</div>
		</div>
</div>



</body>
</html>
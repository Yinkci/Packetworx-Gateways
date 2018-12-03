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

	<div class="user-col col-md-4 col-md-12 col-xl-10 d-xl-block ">
		<div class="view_gateways" style="overflow-x:auto;">
			<form action="" method="POST">
				<table class="gateways-table">
					<tr class="all_title_tr">
						<th>User ID</th>
						<th>Username</th> 
						<th>Password</th>
						<th>Status</th>
					</tr>
					<?php
					$status= $row['status'];
					$query  = pg_query($con,"SELECT * FROM  public.user");
					$row = pg_num_rows($query);
					$x =1;
					while($rowx = pg_fetch_assoc($query)){
						$id_user = $rowx['id_user'];
						$status = $rowx['status'];
						$username = $rowx['username'];
						$password = $rowx['password'];
						?>
						<tr class="<?php echo "esn_".$gateway_id ?> clr_<?php echo $x?>">
							<td><?php echo $id_user; ?> </td>
							<td><?php echo $username; ?> </td>
							<td><?php echo "*****"; ?> </td>
							<td><?php echo $status; ?> </td>
						</tr> 
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
		<!-- USER INFO -->
		<div class="controller">
			<div class="row">
				<div class="col-md-3 p-0">
					<a href="changpass" data-toggle="modal" data-target="#adduser"><div class="gateway_btns">Add New User</div></a>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
			$args = pg_query($con,"SELECT * FROM public.user ORDER BY id_user");
			pg_close($con);
			?>
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
									<div class="username">Username</div><input type="text" name="username" value="" data-username ="">
									<div class="password">Password</div><input type="password" name="password" value="">
									<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo rand(10,9000); ?>">
									<div class="row">
										<div class="col-md-6">
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
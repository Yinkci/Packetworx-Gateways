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

<div class="settings-col col-md-4 col-md-4 col-xl-4 d-xl-block ">
<?php
	$query = mysqli_query($con,"SELECT * FROM user ");
	$row = mysqli_num_rows($query);

	while($rowx = mysqli_fetch_array($query)){
	$username = $rowx['username'];
	$password = $rowx['password'];
	$id_user = $rowx['id_user'];

	}

?>
<form method="POST">
	<div class="pro_set"> Profile Settings </div>
	<div class="settings_">
		<div class="username">Username</div><input type="text" name="" value="<?php echo $username ?>">
		<div class="password">Password</div><input type="password" name="" value="<?php echo $password ?>">
		<a href="changpass" data-toggle="modal" data-target="#myModal">Change Password?</a>

	</div>
</form>



<!-- Button trigger modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Change Password</h4>
        </div>
        <div class="modal-body">
        	
		<form method="POST" action="data/changePass">
			<div class="settings_ changepass">
				<div class="id_user"></div><input type="hidden" name="id_user" value="<?php echo $id_user ?>">
				<div class="username">Username</div><input type="text" name="username" value="<?php echo $username ?>">
				<div class="password">Password</div><input type="password" name="password" value="<?php echo $password ?>">
				<input type="submit" name="" value="Submit">
				<a href=""  class="closeModal" data-dismiss="modal">Close</a>

			</div>
		</form>


        </div>
    </div>
</div>


</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Packetworx</title>
	<?php include ("inc/links.php");?>
	<?php require("setlogin.php"); ?>
</head>
<body class="login_body">
	<div class="d-flex">
		<div class="log-container">
			<div class="d-table">
				<div class="d-cell">
					<div class="log_form">
						<img src="assets/images/logo.png" class="main-logo">
						<form method="POST" action="">
							<input type="text" name="log_user" placeholder="Username">
							<input type="password" name="log_pass" placeholder="Password">
							<div class="g-recaptcha" data-sitekey="6Ldu1WwUAAAAAPSjQoOxWCArmvyPydmopaI31AAK"></div>
							<input type="submit" name="log_submit" value="LOGIN">
							<?php echo "<div class='login-error-message'>".$error."</div>" ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
// require ("config/database_con.php");
// 		$query = pg_query($con,"SELECT * FROM public.user");
// 		$row = pg_num_rows($query);

// while ($rowx = pg_fetch_row($query)) {
// echo $rowx[1];
// }

	?>
</body>
</html>
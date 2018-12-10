<?php include ("inc/links.php");?>
<?php  $status= $row['status']; ?>
<?php $currentPage =  str_replace(".php", "",  basename($_SERVER['PHP_SELF'])); ?>
<!-- MOBILE MENU -->
<div id="my-wrapper-cs-menu" >       
	<nav id="cs-menu" class="cs-menu">
		<ul class="menu-sen">
			<li><a href="dashboard"><i class="fas fa-code"></i> Dashboards</a></li>
			<li><a href="gateways"><i class="fas fa-th-list"></i> Gateways</a></li>
			<li><a href="#"><i class="fas fa-user-circle"></i>Users</a></li>
			<li><a href="settings"><i class="fas fa-cog"></i>Settings</a></li>
			<li><a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
		</ul>
	</nav>
</div>
<!-- DESKTOP MENU -->
<div class="d-flex">
	<div class="admin-header">
		<div class="row">
			<div class="col-3 col-md-6">
				<a href="#cs-menu" class="cs-menuicon  d-xl-none text-left">
					<div class="d-table">
						<div class="d-cell">
							<i class="fas fa-bars"></i>
						</div>
					</div>
				</a>
			</div>
			<div class="col-9 col-md-6 col-xl-12 cs-logout">
				<div class="d-table">
					<div class="d-cell">
						<img src="assets/images/logo.png" class="d-none  d-xl-inline-block dashboard-logo">
						<a href="javascript:void(0);"><i class="fas fa-user-circle"></i> Welcome,  <?php echo $row['username']; ?> !</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="menu col-md-2 col-md-2 d-none col-xl-2 d-xl-block pd-left10">
		<div class="header-sen ">
			<ul class="menu-sen">
				
				<li class="<?php if($currentPage=="dashboard"):echo "activelink"; else: endif; ?>"><a href="dashboard"><i class="fas fa-code"></i> Dashboard</a></li>
				<li class="<?php if($currentPage=="gateways" || $currentPage=="edit-page" || $currentPage=="view"  ):echo "activelink"; else: endif; ?>"><a href="gateways"><i class="fas fa-th-list"></i> Gateways</a></li>
				<?php if($status=="Admin"): ?>	
				<li class="<?php if($currentPage=="users"):echo "activelink"; else: endif; ?>"><a href="users"><i class="fas fa-user-circle""></i> Users</a></li>
				<?php else: endif;?>
				<li class="<?php if($currentPage=="settings"):echo "activelink"; else: endif; ?>"><a href="settings"><i class="fas fa-cog"></i> Settings</a></li>
				<!-- <li class="<?php echo $currentPage ?>"><a href="#"><i class="fas fa-wrench"></i> C.A Settings</a></li> -->
				<li class="<?php if($currentPage=="logout"):echo "activelink"; else: endif; ?>"><a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
			</ul>
		</div>
	</div>


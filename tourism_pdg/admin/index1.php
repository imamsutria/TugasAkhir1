<?php
session_start();
    if(isset($_GET['username']))
    {
    	$username = $_SESSION['username'];
    }
 ?>

<!-- <?php 
session_start();
if(!isset($_SESSION['A']))
{
	echo"<script language='JavaScript'>document.location='login.php'</script>";
  exit();
}
include("../../connect.php");
?>
 --> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin • Page</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/layout.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.min.css" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../assets/js/app.js"></script>
	<script src="../../global_assets/js/demo_pages/maps/google/markers/animation.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNnzxae2AewMUN0Tt_fC3gN38goeLVdVE"></script>

	<!-- /theme JS files -->

	<script src="inc/script.js" type="text/javascript"></script>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand"  style="padding-top: 10px; padding-bottom: 1px">
			<a href="#" class="d-inline-block">
<!-- 				<img src="../../global_assets/images/logo_light.png" alt=""> -->
				<h5 style="color: white; margin: 0px"><b>WEBGIS</b> • Admin</h5>
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile" style="padding-left: 0px">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-green-300 mr-2"></span>
					<?php 
						if(isset( $_SESSION['username'])){
							echo $username = $_SESSION['username'];
						}
						else{
							echo "Visitor";	
						}
					?>
			</span>

			<ul class="navbar-nav ml-md-auto">

				<li class="nav-item">

				<a href="act/logout.php" class="navbar-nav-link">
						<i class="icon-switch2"></i>
						Log Out
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Navigation</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->

			<!-- Sidebar content -->
			<div class="sidebar-content" >
				
				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<a href="#">
								<img src="../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark">
								<?php 
									if(isset( $_SESSION['username'])){
										echo "Hello, ";
										echo $username = $_SESSION['username'];
									}
									else{
										echo "Hello";	
									}
								?>
							</h6>
							<span class="font-size-sm text-white text-shadow-dark">Indonesia</span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-cog5"></i>
									<span>Account settings</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="../tourism_pdg/admin/act/logout.php" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /user menu -->

<!------------------------------------------------------------------------------------------------------------------------------------->
<!-- SIDEBAR -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="../home.php" class="nav-link " id="1">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
							<ul class="nav nav-group-sub"></ul>
						</li>

						<li class="nav-item">
							<a href="../index1.php" class="nav-link">
								<i class="icon-book"></i> 
								<span>User Access</span>
							</a>
							<ul class="nav nav-group-sub"></ul>
						</li>
						<li class="nav-item">
							<a href="?page=home" class="nav-link">
							  <i class="icon-list"></i>
							  <span>List Tourism</span>
							</a>
							<ul class="nav nav-group-sub"></ul>
						</li>   
						  <li class="nav-item">
						      <a href="?page=fasilitas" class="nav-link">
						          <i class="icon-chair"></i>
						          <span>Facility</span>
						      </a>
						      <ul class="nav nav-group-sub"></ul>
						  </li>
						  <li class="nav-item">
						      <a href="?page=pass_change" class="nav-link">
						          <i class="icon-lock4"></i>
						          <span>Change Password</span>
						      </a>
						      <ul class="nav nav-group-sub"></ul>
						  </li>
						  <li class="nav-item">
						      <a href="?page=user_management" class="nav-link">
						          <i class="icon-users4"></i>
						          <span>Manage User</span>
						      </a>
						      <ul class="nav nav-group-sub"></ul>
						  </li>
					</ul>
				</div>
				<!-- /main navigation -->
			</div>
			<!-- /sidebar content -->			
		</div>
		<!-- /main sidebar -->

<!-- END SIDEBAR -->
<!------------------------------------------------------------------------------------------------------------------------------------->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">
								Admin
							</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
					
				</div>
			</div>
			<!-- /page header -->

<!------------------------------------------------------------------------------------------------------------------------------------->

  <!-- MENAMPILKAN PETA -->

			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-12">
                           
 					<!-- google maps with location list -->
						<div class="card">

							<div class="centered" id="container" style="height: 730px; margin: 3%">
								<section id="main-content">
							      <section class="wrapper">
							  		  <div class="row mt">
							    			<?php
							      			$p=$_GET['page'];
							      			$page="pages/".$p.".php";
							      			if(file_exists($page)){
							      				include($page);
							      			}elseif($p==""){
							      				include('pages/home.php');
							      			}else{
							      				include('pages/404.php');
							      			}
							    		  ?>
										  </div>
							      </section>
						    	</section>
							</div>
						</div>
					</div>
				</div>
			</div>		

			<!-- /content area -->


<!------------------------------------------------------------------------------------------------------------------------------------->

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						 <a href="#">Muhammad Imam Sutria</a> - <a href="#" target="_blank">1511521023</a> &copy; 2019
					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

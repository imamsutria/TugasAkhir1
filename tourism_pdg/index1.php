<?php 
session_start();
    if(isset($_GET['username']))
    {
    	$username = $_SESSION['username'];
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Halal Tourism - Padang</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->

<!--     <script src="assets/js/chart-master/Chart.js"></script> -->

    <script src="../config_public.js"></script>
    <script src="_map.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNnzxae2AewMUN0Tt_fC3gN38goeLVdVE&sensor=true"></script>


<style type="text/css">
      #legend {
        background: white;
        padding: 15px;
        margin: 10px;
        font-size: 12px;
        font-color: black;
        font-family: Arial, sans-serif;
    }
    .color {
        border: 1px solid;
        height: 12px;
        width: 12px;
        margin-right: 3px;
        float: left;
        opacity: 0.7;
    }
    .a {
        background: #ff3300;
      }
    .b {
        background: #ffd777;
      }
    .c {
        background: #00b300;
      }
    .d {
        background: #618685;
      }
    .e {
        background: #337AFF;
      }
    .f {
        background: #FF9300;
      }
    .g {
        background: #FF00C1;
      }
    .h {
        background: #FF0000;
      }
    .i {
        background: #04FF00;
      }
    .j {
        background: #EC00FF;
      }
    .k {
        background: #0A0D85;
      }
    .l {
        background: navy;
      }
   </style>

    <!--LOADER-->
    <style>
    #loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 40px;
      margin: 5px;
      height: 40px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style>


</head>

<body onload="init()" >

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index1.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
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

			<span class="navbar-text ml-md-3 mr-md-auto">
					<!-- span class="badge bg-success">Online</span> -->
			</span>

			<ul class="navbar-nav">

				<li class="nav-item dropdown dropdown-user">
					<a href="../login.php" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
						<span>
							<?php 

							if(isset($_SESSION['username']))
							{
								echo $_SESSION['username'];
							}

							?>

						</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="admin/login.php" class="dropdown-item"><i class="icon-user-plus"></i> Login</a>
						<a href="admin/login.php" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

<!-- 							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div> -->
							<div class="media-body">
								<div class="media-title font-weight-semibold">

								<?php 

								if(isset($_SESSION['username']))
								{
									echo $_SESSION['username'];
								}

								?>
									
								</div>

								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;<!-- Santa Ana, CA -->
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index1.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
							<ul class="nav nav-group-sub"></ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<li class="nav-item">

								<a onclick="init(); listTourism();" style="cursor:pointer;" class="nav-link"><i class="icon-list"></i> <span>List Tourism</span></a>
								<ul class="nav nav-group-sub"></ul>
							
							</li>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pushpin"></i> <span>Tourism Around You</span></a>
							
							<ul class="nav nav-group-sub">
								<ul class="nav-item">

			                          <div class=" form-group" style="color: #26a69a ;" > 

			                          <label for="inputradius" style="font-size: 10pt";>Radius : </label>
			                          <label  id="nilai"  style="font-size: 10pt";>0</label> m
			                          <div></div>
			                          <input  type="range" onchange="init();tourism_sekitar_user();cekkk();" id="inputradius" 
			                                  name="inputradius" data-highlight="true" min="0" max="20" value="0" >
			                          <script>
			                            function cekkk()
			                            {
			                              document.getElementById('nilai').innerHTML=document.getElementById('inputradius').value*100
			                            }
			                          </script>
			                        </div>
			                      </ul> 
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Search Tourism By</span></a>

							<ul class="nav nav-group-sub">
								
			                      <li class="sub">
			                          <a style="cursor:pointer;"><i class="icon-stack" style="margin-top:10px; margin-left:50px"></i> By Name</a>
			                          <ul class="sub">
			                            <li style="margin-top:10px; margin-left:50px; margin-right:20px"><input id="input_name" type="text" class="form-control" style="width: 100%"></li>                             
			                            <li style="margin-top:10px; margin-left:50px ; margin-bottom: 10px"><a onclick="init();cari_tourism(1)" style="cursor:pointer;">Search</a></li>
			                          </ul>
			                      </li>

						          <li class="nav-item nav-group-sub">
			                          <a style="cursor:pointer;"><i class="icon-stack"></i> By Address</a>
			                          <ul class="sub">
			                            <li style="margin-top:10px; margin-left:50px; margin-right:20px"><input id="input_address" type="text" class="form-control" style="width: 100%"></li>                             
			                            <li style="margin-top:10px; margin-left:50px"><a onclick="init();cari_tourism(2)" style="cursor:pointer;">Search</a></li>
			                          </ul>
			                      </li>

			                      <li class="sub">
			                          <a style="cursor:pointer;background:none"><i class="icon-stack" style="margin-top:10px; margin-left:50px; margin-bottom: 10px"></i> By Type</a>
			                          <ul class="sub">
			                            <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px; margin-right:20px">
			                            <select class="form-control kota text-center" style="width:100%;margin-top:10px" id="select_jenis">
			                              <?php                      
			                              include('../connect.php');    
			                              $querysearch="SELECT id, name FROM tourism_type"; 
			                              $hasil=mysqli_query($conn, $querysearch);

			                                while($baris = mysqli_fetch_array($hasil)){
			                                    $id=$baris['id'];
			                                    $name=$baris['name'];
			                                    echo "<option value='$id'>$name</option>";
			                                }
			                              ?>
			                            </select>
			                            </li>                             
			                            <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px"><a onclick="init();cari_tourism(3)" style="cursor:pointer;">Search</a></li>
			                          </ul>
			                      </li>

			                      <li class="sub">
			                          <a style="cursor:pointer;"><i class="icon-stack" style="margin-top:10px; margin-left:50px; margin-bottom: 10px"></i> By Facility</a>
			                          <ul class="sub">
			                            <li style="margin-top:10px; margin-left:50px; margin-right:20px" ><input id="input_fasility" type="text" class="form-control" style="width: 100%"></li>                                 
			                            <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px"><a onclick="init();cari_tourism(4)" style="cursor:pointer;background:none">Search</a></li>
			                          </ul>
			                      </li>
			                      
			                      <li class="sub">
			                          <a style="cursor:pointer;"><i class="icon-stack" style="margin-top:10px; margin-left:50px; margin-bottom: 10px"></i> By District</a>
			                          <ul class="sub">
			                            <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px; margin-right:20px">
			                            <select class="form-control kota text-center" style="width:100%;margin-top:10px" id="select_district">
			                              <?php                      
			                              include('../connect.php');    
			                              $querysearch="SELECT id, name FROM district"; 
			                              $hasil=mysqli_query($conn, $querysearch);

			                                while($baris = mysqli_fetch_array($hasil)){
			                                    $id=$baris['id'];
			                                    $name=$baris['name'];
			                                    echo "<option value='$id'>$name</option>";
			                                }
			                              ?>
			                            </select>
			                            </li>                             
			                            <li style="margin-top:10px; margin-left:50px"><a onclick="init();cari_tourism(5)" style="cursor:pointer;">Search</a></li>
			                          </ul>
			                      </li>

							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a style="cursor:pointer;" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
<!-- 					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div> -->
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index1.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-8">
                           
 					<!-- google maps with location list -->
						<div class="card">
							<div class="card-header header-elements-inline" style="padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
								<h6 class="card-title">Google Map with Location List</h6>
									
									<header class="card-header" style="float:right; padding-top: 2px; padding-bottom: 1px; padding-right: 2px;">
		                              <input type="hidden" id="myLatLocation" value="0">
		                              <input type="hidden" id="myLngLocation" value="0">
		                             
		                              <a class="btn btn-default" role="button" data-toggle="collapse" onclick="posisisekarang()" title="Current Position" style="margin-right:5px"><i class="icon-pin" style="color: #26a69a;"></i></a>
		                             
		                              <a class="btn btn-default" role="button" data-toggle="collapse" onclick="lokasimanual()" title=" Manual Position" style="margin-right:5px"><i class="icon-pushpin" style="color: #26a69a ;"></i></a>
		                              <label id="tombol">
		                             
		                              <a class="btn btn-default" role="button" id="showlegenda" data-toggle="collapse" onclick="legenda()" title="Legend" style="margin-right:5px"><i class="icon-eye" style="color: #26a69a ;"></i></a>
		                             
		                              </label>
		                            </header>

							</div>
							<div class="centered" id="map" style="height:460px"></div>
						</div>
					<!-- /google maps with location list -->

					</div>

					<div class="col-xl-4">

						<!-- Sales stats -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<!-- <h6 class="card-title">Object</h6> -->
								<div class="header-elements">
			                	</div>
							</div>
							<div class="centered" id=" " style="height:460px"></div>
						</div>
						<!-- /sales stats -->

					</div>
				</div>
				<!-- /main charts -->

					</div>

					<div class="col-xl-4">				

					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


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
						&copy; 2019 <a>Imam Sutria</a>
					</span>
				</div>


<!-- 				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>
				</div>
 -->			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

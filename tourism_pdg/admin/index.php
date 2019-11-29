<?php 
session_start();
if(!isset($_SESSION['A'])){
	echo"<script language='JavaScript'>document.location='login.php'</script>";
  exit();
}
include("../../connect.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin • Tourism</title>


	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  

	  <script src="inc/script.js" type="text/javascript"></script>
	  <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM2fDXHmGzCDmDBk3bdPIEjs6zwnI1kGQ&libraries=drawing"></script>
    <script src="../assets/js/chart-master/Chart.js"></script>

    <script type="text/javascript" src="../html5gallery/html5gallery.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.min.css" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->

    <!-- Slider CSS -->
    <link href="../assets/css/slider.css" rel="stylesheet" type="text/css">

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/maps/google/markers/animation.js"></script>

  </head>

  <body>
    <section id="container" >

      <header class="header black-bg">
        <?PHP include("inc/header.php"); ?>
      </header>
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <?PHP include("inc/sidebar.php"); ?>
        </div>
      </aside>

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

  </section>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery-1.8.3.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/jquery.sparkline.js"></script>
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="../assets/js/common-scripts.js"></script>
<script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
<script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>	
<script type="text/javascript" src="../assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="../assets/js/advanced-form-components.js"></script>    
<script type="text/javascript">
  $(function () {
    $('#example1, #example2, #example3').dataTable({
      "bPaginate": true,
      "bLengthChange": true,
      "bFilter": true,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false,
  "iDisplayLength": 10,
  "oLanguage": {
	 "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
	 "sLengthMenu": "Show _MENU_ entries",
	 "sSearch": "Search:"
	}
    });
  });
</script>
<!----------------------------------------------------------------------------------------------------------------------------------->

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


  </body>
</html>
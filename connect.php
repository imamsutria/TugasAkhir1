<?php
	$host = "localhost";
	$user = "root";
	$pass = "iemam1429";
	$db = "pdg_tourism";
	$conn = mysqli_connect($host, $user, $pass) or die ("GAGAL");
	mysqli_select_db($conn, $db); 
?>
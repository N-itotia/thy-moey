<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
		$sql = "INSERT INTO risk_factors(ksnum,risk_factor) VALUES ($_POST[ksnum],$_POST[risk])";	
		if(mysqli_query($db,$sql)){
	echo "Patient details entered successfully";	
	}
?>
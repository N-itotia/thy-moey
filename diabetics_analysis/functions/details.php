<?php
include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
			$sql = "INSERT INTO patient_details
			(patient_name,ksnum,diabetestype,dob,dodiagnosis) VALUES ('$_POST[pname]','$_POST[ksnum]','$_POST[diabetestype]','$_POST[dob]','$_POST[dodiag]')";
	
	if(mysqli_query($db,$sql)){
	echo "Patient details entered successfully";	
	}else {
		echo "Change the Kisumu Specailist Number";}		
?>
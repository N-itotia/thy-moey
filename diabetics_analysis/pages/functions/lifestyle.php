<?php
	include("conn.php");
		session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		$sql ="INSERT INTO lifestyle_changes(smocking,alcohol_intake) VALUES ('$_POST[smoking]','$_POST[alcohol_intake]')";
		
		if(mysqli_query($db,$sql)) {
		echo "success";}

?>
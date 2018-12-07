<?php
	$servername ="localhost";
	$username="root";
	$password="";
	$databasename="padikita";

	$connection=mysqli_connect($servername,$username,$password,$databasename);

	if (!$connection) {
		echo "Error".mysqli_connect_error();
		exit();
	}

?>
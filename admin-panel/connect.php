<?php
	$servername ="localhost";
	$username="id8152792_padikita";
	$password="12345";
	$databasename="id8152792_padikita";

	$connection=mysqli_connect($servername,$username,$password,$databasename);

	if (!$connection) {
		echo "Error".mysqli_connect_error();
		exit();
	}

?>
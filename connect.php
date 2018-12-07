<?php 
$servername = "localhost";
$username = "id8152792_padikita";
$password = "12345";
$databasename = "id8152792_padikita";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if (!$conn) {
	echo "error: ".mysqli_connect_error();
	exit();
}
 ?>
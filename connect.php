<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "padikita";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if (!$conn) {
	echo "error: ".mysqli_connect_error();
	exit();
}
 ?>
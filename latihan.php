<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN 1 PEMROGRAMAN WEB</title>
</head>
<body>
	<?php
		$nama = array("Nurfawaid","Binar Putri","Lalang Kurniawan","Hamim Jazuli","Siti Nurasyiroh","Muhammad Ramli","M.Faruk","Khoirul Anam","Afika Rismayanti","Dian Ratna Sari","Lusy Sarida","Dwi Sri Anggun");
		for ($i=0; $i < count($nama) ; $i++) { 
		 	echo $nama[$i]."<br/>";
		 } 
	 ?>
</body>
</html>
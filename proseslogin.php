<?php
		

		if(isset($_POST['msk'])){
		$email = $_POST['email'];
		$password = $_POST['pass'];

			if($email=="admin@admin.com" &&$password=="admin"){
				header("Location: index.php");
			}
			else{
			 echo "login gagal";
		}




	}
	?>
<?php 
	include("connect.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Masuk - Budidaya Padi Kita</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header" class="fixed-top">
		<div class="row">
			<div class="col-4" style="padding-top: 25px; padding-left: 25px;">
				Budidaya Padi Kita
			</div>
			<div class="col-8" style="padding-top: 16px; padding-left: 25px;">
				<nav class="navbar navbar-expand-lg">
				 
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="index.php" style="color: white;">Beranda <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item active">
				        <a class="nav-link" href="tentang.php" style="color: white;">Tentang Kita <span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white; background-color: #39ac39;">Login</button>
				    </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="content" style="height: 650px; width: 100%;">
			<div class="login1">
				<h3><center>Masuk</h3></center>
				<form method="post">
					  <div class="form-group">
					    <label for="email">Email:</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email ....">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd" name="password" placeholder="Masukan Password ....">
					  </div>
					  <button type="submit" class="btn btn-primary" name="msk">Masuk</button>
					  <button type="submit" class="btn btn-primary" style="margin-left: 15px;"><a href="daftaruser.php" style="color: white;">Daftar</button></a><br>
					   Lupa Password?<a href="" style="color: white;">Klik Disini.</a>
				</form>

				<?php 
					if(isset($_POST['msk'])) {
						
						$email=$_POST['email'];
						$password=$_POST['password'];

						$masuk="SELECT * FROM user WHERE email ='$email' AND password ='$password'";
						$cek = mysqli_query($conn,$masuk);
						$row = mysqli_fetch_array($cek);
						$count = mysqli_num_rows($cek);
						if ($count > 0) {
							session_start();
							$_SESSION['namauser'] = $row['nama_lengkap'];
							?>
  								<meta http-equiv="refresh" content="0;url=index1.php" />
  							<?php
						}else{
							echo "Email atau password anda salah!";
						}
					}
				 ?>
			</div>
		</div>
	</div>
	
</body>
</html>
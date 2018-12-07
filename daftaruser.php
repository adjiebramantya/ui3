<?php 
	include("connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar - Budidaya Padi Kita</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
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
				        <a class="nav-link" href="#" style="color: white;">Beranda <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item active">
				        <a class="nav-link" href="#" style="color: white;">Tentang Kita <span class="sr-only">(current)</span></a>
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
		<div class="content" style="height: 900px; width: 100%;">
			<div class="daftar1" style="height: 800px;">
			<h3><center>Daftar</h3></center>
			<?php 
				if (isset($_POST['daftar'])) {
					$nama = $_POST['nama_lengkap'];
					$jk = $_POST['jk'];
					$nohp = $_POST['nohp'];
					$alamat = $_POST['alamat'];
					$kota = $_POST['kota'];
					$email = $_POST['email'];
					$pass = $_POST['password'];

					$user = "INSERT INTO user (nama_lengkap,jenis_kelamin,no_hp,alamat,kota,email,password) VALUES('$nama','$jk','$nohp','$alamat','$kota','$email','$pass');";
					
					if(mysqli_query($conn,$user)){
						header('location:login.php');
		         	}else{
		         	?>
		         	<div class="alert alert-danger" role="alert">
		              	Gagal Daftar
		            </div>		
		         	<?php 
		         	}
						
					}
		         	
				
			 ?>
			<form method="post">
			  <div class="form-group">
			    <label for="namauser">Nama Lengkap</label>
			    <input type="text" class="form-control" name="nama_lengkap" placeholder="Isi nama lengkap...">
			  </div>
			  <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" value="Laki-laki" checked>
			          <label class="form-check-label" for="jk">
			            Laki-laki
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" value="Perempuan">
			          <label class="form-check-label" for="jk">
			            Perempuan
			          </label>
			        </div>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group">
			    <label for="tanggallahir">No. Hp</label>
			    <input type="text" class="form-control" name="nohp" placeholder="Isi No.HP yang aktif...">
			  </div>
			  <div class="form-group">
			    <label for="kota">Alamat</label>
			    <input type="text" class="form-control" name="alamat" placeholder="Isi alamat...">
			  </div>
			  <div class="form-group">
			    <label for="nohp">Kota</label>
			    <input type="text" class="form-control" name="kota" placeholder="Isi Kota...">
			  </div>
			  <div class="form-group">
			    <label for="kota">Email</label>
			    <input type="email" class="form-control" name="email" placeholder="Isi email yang digunakan...">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" placeholder="Isi password...">
			  </div>
			  <div class="row">
			  	<button type="submit" style=" margin-left: 285px;" name="daftar" class="btn btn-secondary">Daftar</button>
				<button style=" margin-left: 40px;" class="btn btn-secondary"><a href="index.php" style="color: white">Kembali</button></a>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>
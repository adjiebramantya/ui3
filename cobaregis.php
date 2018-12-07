<!DOCTYPE html>
<html>
<head>
	<title>Daftar - Budidaya Padi Kita</title>
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
				        <a class="nav-link" href="#" style="color: white;">Beranda <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
				          Fitur
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Fitur 1</a>
				          <a class="dropdown-item" href="#">Fitur 2</a>
				          <a class="dropdown-item" href="#">Fitur 3</a>
				          <a class="dropdown-item" href="#">Fitur 4</a></div>
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

	<div class="container" style="background-color: lightgrey;">
		<div class="content" style="height: 900px; width: 100%;">
			<div class="daftar1">
			<h3><center>Daftar</h3></center>
			<div class="row" style="margin-top: 30px;">
				<form method="post" action="prosesregister.php">
				<div class="col-4">
					<p>Nama</p>
				</div>
				<div class="col-8">
					<p>: <input type="text" name="nama" ></p>
				</div>
				<div class="col-4">
					<p>Tanggal Lahir</p>
				</div>
				<div class="col-8">
					<p>: <input type="date" name="date" ></p>
				</div>
				<div class="col-4">
					<p>jenis Kelamin</p>
				</div>
				<div class="col-8">
					<p>: <input type="radio" name="jk">Laki-Laki<input type="radio" name="jk" style="margin-left: 10px;">Perempuan</p>
				</div>
				<div class="col-4">
					<p>Kota</p>
				</div>
				<div class="col-8">
					<p>: <input type="text" name="kota" ></p>
				</div>
				<div class="col-4">
					<p>No Hp</p>
				</div>
				<div class="col-8">
					<p>: <input type="text" name="nohp" ></p>
				</div>
				<div class="col-4">
					<p>Email</p>
				</div>
				<div class="col-8">
					<p>: <input type="email" name="email" ></p>
				</div>
				<div class="col-4">
					<p>Kata Sandi</p>
				</div>
				<div class="col-8">
					<p>: <input type="password" name="password" ></p>
				</div>
				<div class="col-4">
					<p>Ulangi Kata Sandi</p>
				</div>
				<div class="col-8">
					<p>: <input type="password" name="password" ></p>
				</div>
				<div class="col-8">
					<p>: <input type="password" name="password" ></p>
				</div>

			</div>
			<div class="row">
					<button name="daftar" style=" margin-left: 285px;">Daftar</button>
					<button style=" margin-left: 40px;">Kembali</button>
			</div>
		</form>
		</div>
		</div>		
	</div>
</body>
</html>
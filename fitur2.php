<!DOCTYPE html>
<html>
<head>

	<?php 
    session_start();
    include('connect.php');
    if (!isset($_SESSION["namauser"])) {
        header("location:login.php");
    } ?>

	<title>Fitur 2 - Budidaya Padi Kita</title>
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
				        <a class="nav-link" href="index1.php" style="color: white;">Beranda <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
				          Fitur
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="fitur1.php">Fitur 1</a>
				          <a class="dropdown-item" href="fitur2.php">Fitur 2</a>
				          <a class="dropdown-item" href="fitur3.php">Fitur 3</a>
				          <a class="dropdown-item" href="fitur4.php">Fitur 4</a></div>
				      </li>
				      <li class="nav-item active">
				        <a class="nav-link" href="tentang.php" style="color: white;">Tentang Kita <span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				     <form class="form-inline my-2 my-lg-0">
				      	<h5>Selamat datang,</h5> &nbsp;
				      	<h5><?php echo $_SESSION['namauser'] ?></h5>&nbsp;
				    </form>
				    <form class="form-inline my-2 my-lg-0" method="post">
				      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="keluar" style="color: white; background-color: #39ac39;">Log out</button>
				      	<?php if (isset($_POST['keluar'])) {
				      		session_start();
				      		session_destroy();
				      		header("location:keluar.php");
				      	} ?>
				    </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>

	<div class="container" style="background-color: lightgrey;">
		<form action="" method="post">
		<div class="content" style="height: 1000px;">
			<center><h3> Perkawinan Silang Varietas Padi</h3></center>
			<div class="form-group">
  				<label for="sel1"><strong>Varietas 1</strong> :</label>
  				<select class="form-control" name="varietas1">
  					<option hidden>Pilih varietas 1...</option>
    				<option name="ciherang">ciherang</option>
    				<option name="ir64">ir64</option>
    			</select>
    		</div>
			<div class="col-2" style="text-align: center;">
				X<br/><br/>
			</div>
			<div class="form-group">
  				<label for="sel1"><strong>Varietas 2</strong> :</label>
  				<select class="form-control" name="varietas2">
  					<option hidden>Pilih varietas 2...</option>
    				<option name="msp">msp</option>
    				<option name="galur">galur</option>
    			</select>
    		</div>
    		<div class="row ml-4 py-4">
				<button type="submit" name="submit" class="btn btn-secondary">Simpan</button>
			</div>
			<?php
				if (isset($_POST['submit'])) {
					$var1 = $_POST['varietas1'];
					$var2 = $_POST['varietas2'];

					if ($var1=='ciherang'AND $var2=='msp') {
						echo"<div class='alert alert-success' role='alert'>
							  Hasil: 80% F1  Varietas Hibrida
							</div>";
					}elseif ($var1=='ir64' AND $var2=='galur') {
						echo"<div class='alert alert-success' role='alert'>
							  Hasil: 80% F1 Varietas Mekongga
							</div>";
					}else{
						echo "<div class='alert alert-danger' role='alert'>
							  Hasil: Tidak ditemukan!!
							</div>";
					}
				}
			 ?>
		</div>
			</form>
		<div class="sidebar" style="height: 1000px">
			<p style="background-color: #006600; margin-top: 20px; color: white;">POPULER</p>
			<?php 

			$artikel="SELECT * FROM artikel";
			$selectartikel=mysqli_query($conn,$artikel);
			

			while ($row=mysqli_fetch_array($selectartikel)) { ?>

			<div class="card mx-3" style="width: auto;">
  				<img class="card-img-top" src="admin-panel/image/<?php echo $row['gambar'] ?>" width="auto" height="200px" alt="<?php echo $row['gambar'] ?>">
  				<div class="card-body">
    				<p class="card-text"><a href="artikel.php?id_artikel=<?php echo $row['id_artikel'] ?>"><?php echo $row['judul']?></a></p>
  				</div>
			</div><br/>
			
			<?php } ?>	
	</div>
	</div>
</body>
</html>
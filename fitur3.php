<?php 
	include("connect.php");
 ?>
 <?php 
    session_start();
    if (!isset($_SESSION["namauser"])) {
        header("location:login.php");
    } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Fitur 3 - Budidaya Padi Kita</title>
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
				<h4>BUDIDAYA PADI KITA</h4>
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
		<div class="content">
			<h3>Penyakit, Hama, dan Gulma Serta Pengendaliannya.</h3>
			<center>
				<form class="my-4" method="post">
					<div class="form-group">
		  				<label for="sel1">Ciri-Ciri</label>
		  				<select class="form-control" name="ciri">
		  					<option hidden>Pilih ciri...</option>
		    				<option name="ciri1">daun melipat dan menggulung</option>
							<option name="ciri2">daun bercak</option>
		    			</select>
		    		</div>
					<button class="btn btn-success" name="btnsimpan">Simpan</button>
				</form>
				<?php
					if (isset($_POST['btnsimpan'])) {
						$ciri = $_POST['ciri'];
						$queryselect = "SELECT*FROM penyakit WHERE ciri_penyakit='$ciri';";
						$resultselect = mysqli_query($conn,$queryselect);
						$row = mysqli_fetch_array($resultselect);
						
						
 
						 if ($ciri=='daun melipat dan menggulung') {
						 	echo"Hasilnya :".$row['hasil_penyakit'];
						 	echo "<br/><br/>";
						 	echo "Cara mengatasinya :".$row['cara_atasi'];
						 }elseif ($ciri=='daun bercak') {
						 	echo"Hasilnya :".$row['hasil_penyakit'];
						 	echo "<br/><br/>";
						 	echo "Cara mengatasinya :".$row['cara_atasi'];

							
						}
					}
					
				 ?>
			</center>
				
		</div>
		<div class="sidebar">
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
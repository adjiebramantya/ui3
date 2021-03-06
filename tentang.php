<!DOCTYPE html>
<html>
<head>
	<?php include('connect.php'); ?>
	<title>Tentang Kita - Budidaya Padi Kita</title>
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
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white; background-color: #1f7a1f;"><a href="login.php" style="color: white;"> Login </a></button>
				    </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>

	<div class="container" style="background-color: lightgrey;">
		<div class="content">
			<h3> Tentang Kita</h3>
			<p>Website "Budidaya Padi Kita" merupakan Website yang berisikan konten serta fitur untuk membantu para petani khusus nya para petani padi agar mereka dapat mengetahui lebih detail mengenai padi.</p> 
			<p>Pada website ini berisikan fitur seperti Grafik panen pertahun, persilangan varietas, harga beras perdaerah, jenis jenis penyakit hama gulma padi serta pengendaliannya, dan fitur lain
			Diharapkan melalui Website ini petani dapat memperoleh hasil panen yang maksimal. Website ini dibuat oleh tim dari Mahasiswa Teknik Informatika Semester 3 Politenik Negeri Jember</p>
			<h5 style="padding-left: 20px;">Anggota TIM :</h5>
			<ol  style="padding-left: 50px;">
				<li>Mochammad Lembar Adjie Bramantya (E41172165)</li>
				<li>Novando Agung Syahputra (E41172150)</li>
				<li>Ilham Bahtiar (E41172176)</li>
				<li>Moh. Wafiq Fakhri Ali (E41172219)</li>
			</ol>
			<p>Website ini memiliki banyak kekurangan. Oleh karena itu, developer mengharapkan kritik serta saran yang membangun untuk website ini. </p>
			<h3>Hubungi Kami :</h3>
			<div class="row">
				<div class="col-3 ml-4">
					Email
				</div>
				<div class="col-8">: adjiebramantya.ab@gmail.com</div>
			<div class="col-3 ml-4">
					No Telepon
			</div>
				<div class="col-8">: 082228607806</div>
				<div class="col-3 ml-4">
					Instagram
			</div>
				<div class="col-8">: adjie.bramantya</div>
			</div>
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
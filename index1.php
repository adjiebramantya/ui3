<?php
	session_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Budidaya Padi Kita</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="baguetteBox.min.css">
<link rel="stylesheet" href="gallery-grid.css">

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
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="http://s3media.freemalaysiatoday.com/wp-content/uploads/2012/01/padi23.jpg" alt="First slide" style=" height: 400px; width: 100px; ">
					      		<div class="carousel-caption d-none d-md-block">
							    <h5>Penjelasan Padi</h5>
							    <p>Padi adalah blal bla bla bla</p>
							    <a href="#"> Baca Selengkapnya....</a>
							  	</div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="http://carakumenanam.com/wp-content/uploads/2016/08/padi.jpg" alt="Second slide" style=" height: 400px; width: 100px;">
					      		<div class="carousel-caption d-none d-md-block">
							    <h5>Jenis-Jenis Varietas Padi</h5>
							    <p>Adapun jenis-jenis padi, yaitu blal bla bla bla</p>
							    <a href="#"> Baca Selengkapnya....</a>
							  	</div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="https://cdn0-production-images-kly.akamaized.net/7TO881BwB-mhXvIOxibyIF15LjE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1745394/original/053955200_1508476779-612818842.jpg" alt="Third slide" style=" height: 400px; width: 100px;">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					<h3 style="padding-top: 20px;">Galeri</h3>

			<div class="tz-gallery">
		        <div class="row">
		        	<?php
		        	$select="SELECT * FROM galeri";
                    $hasilselect=mysqli_query($conn,$select);

		        	 while ($row=mysqli_fetch_array($hasilselect)) { ?>

		        		<div class="col-sm-6 col-md-4">
		                	<a class="lightbox" href="admin-panel/image/<?php echo $row['nama_file']?>">
		                    	<img src="admin-panel/image/<?php echo $row['nama_file']?>" alt="<?php $row['nama_gambar']?>">
		                	</a>
		            	</div>
		            	
		        <?php	} ?>
		            
		   		</div>
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

<script src="baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
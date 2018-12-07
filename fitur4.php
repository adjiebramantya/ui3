<!DOCTYPE html>
<html>
<head>
	<title>Fitur 4 - Budidaya Padi Kita</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<?php include("connect.php"); ?>
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
		<div class="content">
			<h3 class="mb-2">Harga Beras Daerah.</h3>
				<?php 
				$queryselect="SELECT * FROM hargapadi";
				$hasil=mysqli_query($conn,$queryselect);
				 ?>
				<table class="table table-bordered table-hover">
					<thead class="thead-dark">
						<th>Kota/Kabupaten</th>
						<th>Harga Padi</th>
					</thead>
					<tbody>
					<?php 
					while ($row=mysqli_fetch_array($hasil)) { ?>
						<tr>
							<td><?php echo $row['kota']; ?></td>
							<td>Rp. <?php echo $row['hargapadi']; ?></td>
						</tr>
					<?php
						}
				 	?>
				 	</tbody>
				 </table>
		</div>
		<div class="sidebar">
			<p style="background-color: #006600; margin-top: 20px; color: white;">POPULER</p>
			<div class="card mx-3" style="width: auto;">
  				<img class="card-img-top" src="http://s3media.freemalaysiatoday.com/wp-content/uploads/2012/01/padi23.jpg" width="auto" height="200px" alt="Card image cap">
  				<div class="card-body">
    				<p class="card-text"><a href="#">Artikel 1</a></p>
  				</div>
			</div><br/>
			<div class="card mx-3" style="width: auto;">
  				<img class="card-img-top" src="http://carakumenanam.com/wp-content/uploads/2016/08/padi.jpg" width="auto" height="200px" alt="Card image cap">
  				<div class="card-body">
    				<p class="card-text"><a href="#">Artikel 2</a></p>
  				</div>
			</div><br/>
			<div class="card mx-3" style="width: auto;">
  				<img class="card-img-top" src="https://cdn0-production-images-kly.akamaized.net/7TO881BwB-mhXvIOxibyIF15LjE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1745394/original/053955200_1508476779-612818842.jpg" width="auto" height="200px" alt="Card image cap">
  				<div class="card-body">
    				<p class="card-text"><a href="#">Artikel 3</a></p>
  				</div>
			</div>
	
	</div>
</body>
</html>
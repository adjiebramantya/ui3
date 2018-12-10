<!DOCTYPE html>
<html>
<head>
	<title>Fitur 1 - Budidaya Padi Kita</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
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
				          <a class="dropdown-item" href="fitur1.php">Fitur 1</a>
				          <a class="dropdown-item" href="fitur2.php">Fitur 2</a>
				          <a class="dropdown-item" href="fitur3.php">Fitur 3</a>
				          <a class="dropdown-item" href="fitur4.php">Fitur 4</a></div>
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
			<h3> Grafik Hasil Panen Padi</h3>
			<p>Hasil Panen 5 Tahun Sebelumnya</p>
			<form method="post">
			<div class="row my-2 mx-3">
				<div class="col-3">1. 5 tahun terakhir.</div>
				<div class="col-4">
						: <input type="text" name="ke5">
				</div>
				<div class="col-2">ton/hektar</div>
			</div>
			<div class="row my-2 mx-3">
				<div class="col-3">2. 4 tahun terakhir.</div>
				<div class="col-4">
						: <input type="text" name="ke4">
				</div>
				<div class="col-2">ton/hektar.</div>
			</div>
			<div class="row my-2 mx-3">
				<div class="col-3">3. 3 tahun terakhir</div>
				<div class="col-4">
						: <input type="text" name="ke3">
				</div>
				<div class="col-2">ton/hektar.</div>
			</div>
			<div class="row my-2 mx-3">
				<div class="col-3">4. 2 tahun terakhir</div>
				<div class="col-4">
						: <input type="text" name="ke2">
				</div>
				<div class="col-2">ton/hektar.</div>
			</div>
			<div class="row my-2 mx-3">
				<div class="col-3">5. 1 tahun terakhir</div>
				<div class="col-4">
						: <input type="text" name="ke1">
				</div>
				<div class="col-2">ton/hektar.</div>
			</div>
				<div class="row ml-5">
						<button name="simpan">Simpan</button>
				</div>
			</form>

			<?php if (isset($_POST['simpan'])) { ?>
				
				<h3> Hasil :</h3>

				<div style="width: 500px;margin: 0px auto;">
					<canvas id="myChart"></canvas>
				</div>
				
			<h3>Keterangan :</h3>
			<?php 
			
			 ?>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius tempora officia omnis modi a expedita quisquam, quam laborum, accusamus, aperiam nesciunt saepe aut amet, incidunt illo dolorum ratione? Quas, ratione? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cupiditate, reiciendis illo porro magnam sunt nemo, recusandae quas! Dicta, placeat, dolor?</p>

			<?php } ?>

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

				<script>
					var ctx = document.getElementById("myChart").getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: ["Tahun Ke-1", "Tahun ke-2", "Tahun Ke-3", "Tahun ke-4","Tahun ke-5"],
							datasets: [{
								label: '',
								data: [
								<?php 
								$tahun1 = $_POST['ke1'];
								echo $tahun1;
								?>, 
								<?php 
								$tahun2 = $_POST['ke2'];
								echo $tahun2;
								?>, 
								<?php 
								$tahun3 = $_POST['ke3'];
								echo $tahun3;
								?>, 
								<?php 
								$tahun4 = $_POST['ke4'];
								echo $tahun4;
								?>,
								<?php 
								$tahun5 = $_POST['ke5'];
								echo $tahun5;
								?>
								],
								backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(255, 162, 235, 0.2)',
								],
								borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(255, 162, 235, 0.2)',
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero:true
									}
								}]
							}
						}
					});
				</script>

</body>
</html>
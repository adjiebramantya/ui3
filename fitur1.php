<!DOCTYPE html>
<html>
<head>
	<?php 
    session_start();
    include('connect.php');
    if (!isset($_SESSION["namauser"])) {
        header("location:login.php");
    } ?>

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

				
			<h3>Keterangan :</h3>
			<?php 
				$hasil= $tahun1+$tahun2+$tahun3+$tahun4+$tahun5;

				if (8<$hasil) {
					echo "<p>Perkembangan dan Pertumbuhan Padi di Daerah tersebut baik-Baik saja, Pertahankan!!.</p>";	
				}

				elseif (6<$hasil) {
					echo "<p>Faktor yang mempengaruhi Pertumbuhan dan Perkembangan Padi: </p>
					<p><b>1. Kurang perawatan terhadap tanaman.</b> Perawatan terhadap tanaman sangat diperlukan karena seringkali dengan meningkatnya harga pupuk dan pestisida petani telat untuk melakukan perlakukan terhadap tanaman yang mengakibatkan terlambatnya penanganan terhadap penyebaran hama dan penyakit.</p>
					<p><b>2. Pola tanam tidak serempak.</b> Pola tanam sangat penting dalam bercocok tanam karena dengan pola tanam yang tidak serempak dapat mengundang hama akan terus berkembang dan siklusnya tidak akan terputus.</p>";
				}

				elseif (4<$hasil) {
					echo "<p>Faktor yang mempengaruhi Pertumbuhan dan Perkembangan Padi: </p>
					<p><b>1. Kurang perawatan terhadap tanaman.</b> Perawatan terhadap tanaman sangat diperlukan karena seringkali dengan meningkatnya harga pupuk dan pestisida petani telat untuk melakukan perlakukan terhadap tanaman yang mengakibatkan terlambatnya penanganan terhadap penyebaran hama dan penyakit.</p>
					<p><b>2. Pola tanam tidak serempak.</b> Pola tanam sangat penting dalam bercocok tanam karena dengan pola tanam yang tidak serempak dapat mengundang hama akan terus berkembang dan siklusnya tidak akan terputus.</p>
					<p><b>3. Kekeringan.</b> Kekeringan merupakan faktor penting dalam terjadinya gagal panen, karena kekeringan akan menghentikan suplay air yang dibutuhkan tanaman untuk melakukan pertumbuhan dan pembuahan, kekeringan tidak hanya terjadi dimusim kemarau saja melainkan kekeringan juga bisa jadi karena faktor irigasi yang rusak.</p>";
				}

				elseif (2<$hasil) {
					echo "<p>Faktor yang mempengaruhi Pertumbuhan dan Perkembangan Padi: </p>
					<p><b>1. Salah memilih varietas benih.</b> faktor salahnya memilih varietas benih, seringkali petani memakai benih yang tidak sesuai kedaan wilayah sehingga terjadi serangan hama dan penyakit yang meningkat lebih cepat.</p>";
				}

				elseif (0<$hasil) {
					echo "<p>Faktor yang mempengaruhi Pertumbuhan dan Perkembangan Padi: </p>
					<p><b>1. Salah memilih varietas benih.</b> faktor salahnya memilih varietas benih, seringkali petani memakai benih yang tidak sesuai kedaan wilayah sehingga terjadi serangan hama dan penyakit yang meningkat lebih cepat.</p>";
				}

				else {
					echo "<p>Masukkan Data dengan Benar!! Silahkan Coba lagi.</p>";
				}				
			 ?>

			<?php } ?>

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
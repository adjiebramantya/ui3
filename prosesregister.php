		<?php
			if (isset($_POST['daftar'])) {
				$nama=$_POST['nama'];
				$date=$_POST['date'];
				$jk=$_POST['jk'];
				$kota=$_POST['kota'];
				$nohp=$_POST['nohp'];
				$email=$_POST['email'];
				$password=$_POST['password'];

				echo "Nama : ".$nama." <br>";
				echo "tanggal lahir : ".$date." <br>";
				echo "Jenis Kelamin : ".$jk." <br>";
				echo "Kota : ".$kota." <br>";
				echo "No. Hp : ".$nohp." <br>";
				echo "Email : ".$email." <br>";
			}
		?>
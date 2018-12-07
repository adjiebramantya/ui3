<?php 
	include("connect.php");
	

		if (isset($_POST['tambah'])) {
			$nama_lengkap=$_POST['nama_lengkap'];
			$jenis_kelamin=$_POST['jenis_kelamin'];
			$nohp=$_POST['nohp'];
			$alamat=$_POST['alamat'];
			$kota=$_POST['kota'];
			$email=$_POST['email'];
			$password=$_POST['password'];

			$querytambah="INSERT INTO user (nama_lengkap,jenis_kelamin,nohp,alamat,kota,email,password) VALUES ('$nama_lengkap','$jenis_kelamin','$nohp','$alamat','$kota','$email','$password')";

			$resulttambah=mysqli_query($connection,$querytambah);

			if ($resulttambah) {?>
				<div class="alert alert-success" role="alert">
					Berhasil Menambah User.
				</div>
			<?php }
			else{?>
				<div class="alert alert-danger" role="alert">
					Gagal Menambah user. Silahkan Coba Lagi!
				</div>
			<?php
			}

		}
		?>

		<!--Modal-->
		<form method="post">
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      		
		        	<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Nama Lengkap</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nama_lengkap">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
					    <div class="col-sm-9">
					      	<div class="form-check">
							  <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Laki-Laki
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Perempuan
							  </label>
							</div>

					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nohp">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Alamat</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="alamat">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Kota</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="kota">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">email</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Password</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="password">
					    </div>
					 </div>
		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>
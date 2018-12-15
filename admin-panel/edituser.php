<?php 
	include("connect.php");
	

		if (isset($_POST['ubah'])) {
			$id_user=$_POST['id_user'];
			$nama_lengkap=$_POST['nama_lengkap'];
			$jenis_kelamin=$_POST['jenis_kelamin'];
			$nohp=$_POST['nohp'];
			$alamat=$_POST['alamat'];
			$kota=$_POST['kota'];
			$email=$_POST['email'];
			$password=$_POST['password'];

			$queryedit="UPDATE user SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',nohp='$nohp',alamat='$alamat',kota='$kota',email='$email',password='$password' WHERE id_user=$id_user";

			$resultedit=mysqli_query($connection,$queryedit);
		}
		?>

		<!-- Modal ubah -->
		<form method="post">
		<div class="modal fade" id="edit<?php echo $row['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		
		<?php 
		$id_user=$row['id_user'];
		$queryselectedit="SELECT * FROM user WHERE id_user=$id_user;";
		$resultselectedit= mysqli_query($connection,$queryselectedit);
		$rowselectedit=mysqli_fetch_assoc($resultselectedit);
		 ?>
		      <div class="modal-body">
		      		<div class="form-group row">
					    <div class="col-sm-9">
					      <input type="hidden" class="form-control"  name="id_user" value="<?php echo $rowselectedit['id_user']?>">
					    </div>
					 </div>
		      		<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Nama Lengkap</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $rowselectedit['nama_lengkap']?>">
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
					      <input type="text" class="form-control" name="nohp" value="<?php echo $rowselectedit['nohp']?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Alamat</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="alamat" value="<?php echo $rowselectedit['alamat']?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Kota</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="kota" value="<?php echo $rowselectedit['kota']?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">email</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email" value="<?php echo $rowselectedit['email']?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Password</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="password" value="<?php echo $rowselectedit['password']?>">
					    </div>
					 </div>
		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>
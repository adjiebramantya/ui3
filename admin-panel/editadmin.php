<?php 
	include("connect.php");
	

		if (isset($_POST['ubah'])) {
			$id_admin=$_POST['id_admin'];
			$nama_lengkap=$_POST['nama_lengkap'];
			$email=$_POST['email'];
			$password=$_POST['password'];

			$queryedit="UPDATE admin SET nama_lengkap='$nama_lengkap',email='$email',password='$password' WHERE id_admin=$id_admin";

			$resultedit=mysqli_query($connection,$queryedit); ?>
			<meta http-equiv="refresh" content="0;url=index.php">
			<?php
		}
		?>

		<!-- Modal ubah -->
		<div class="modal fade" id="edit<?php echo $row['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		
		<?php 
		$id_admin=$row['id_admin'];
		$queryselectedit="SELECT * FROM admin WHERE id_admin=$id_admin;";
		$resultselectedit= mysqli_query($connection,$queryselectedit);
		$rowselectedit=mysqli_fetch_assoc($resultselectedit);
		 ?>
		 	<form method="post">
		      <div class="modal-body">
		      		<div class="form-group row">
					    <div class="col-sm-9">
					      <input type="hidden" class="form-control"  name="id_admin" value="<?php echo $rowselectedit['id_admin']?>">
					    </div>
					 </div>
		      		<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Nama Lengkap</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $rowselectedit['nama_lengkap']?>">
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
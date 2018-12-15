

		<!-- Modal ubah -->
		<div class="modal fade" id="edit<?php echo $row['id_gambar'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		
		<?php 
		$id_gambar=$row['id_gambar'];
		$queryselectedit="SELECT * FROM galeri WHERE id_gambar=$id_gambar;";
		$resultselectedit= mysqli_query($connection,$queryselectedit);
		$rowselectedit=mysqli_fetch_assoc($resultselectedit);
		 ?>
		      <form method="post" enctype="multipart/form-data">
		      <div class="modal-body">
		      		<input type="text" name="id_gambar" value="<?php echo $id_gambar ?>" hidden>
		        	<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Nama Foto</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nama_gambar" value="<?php echo $rowselectedit['nama_gambar']?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Nama File</label>
					    <div class="col-sm-9">
					      <input type="file" class="form-control" name="nama_file">
					    </div>
					 </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>


		<?php 
	include("connect.php");
	

		if (isset($_POST['ubah'])) {

			$nama_gambar=$_POST['nama_gambar'];
			$nama_file=$_FILES['nama_file']['name'];
			$id_gambar=$_POST['id_gambar'];

			if (!empty($_FILES['nama_file']['tmp_name'])) {
				move_uploaded_file($_FILES['namafile']['tmp_name'],'image/'.$_FILES['namafile']['name']);

			 	$queryedit="UPDATE galeri SET nama_gambar='$nama_gambar',nama_file='$nama_file' where id_gambar='$id_gambar'";

			$resultedit=mysqli_query($connection,$queryedit); ?>
				<meta http-equiv="refresh" content="0;url=tabel3.php">
			<?php
			 } else{
				$queryedit="UPDATE galeri SET nama_gambar='$nama_gambar' where id_gambar='$id_gambar'";

			$resultedit=mysqli_query($connection,$queryedit); ?>
				<meta http-equiv="refresh" content="0;url=tabel3.php">
			<?php
			}

		}
		?>